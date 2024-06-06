<?php
date_default_timezone_set("America/Vancouver");

$comment_array = array();
$pdo = null;
$stmt = null;
$error_messages = array();

// DB connection
try {
    $pdo = new PDO('mysql:host=localhost;dbname=blog_db', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

// When form is submitted
if (isset($_POST["submitButton"])) {
    // Check name
    if (!isset($_POST["username"]) || $_POST["username"] === '') {
        $error_messages['username'] = "Please enter your name!";
    }
    // Check comment
    if (!isset($_POST["comment"]) || $_POST["comment"] === '') {
        $error_messages['comment'] = "Please enter comment!";
    }

    if (empty($error_messages)) {
        $postDate = date("Y-m-d H:i:s");

        try {
            $stmt = $pdo->prepare("INSERT INTO blog_table (username, comment, postDate) VALUES (:username, :comment, :postDate)");
            $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
            $stmt->bindParam(':comment', $_POST['comment'], PDO::PARAM_STR);
            $stmt->bindParam(':postDate', $postDate, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

// Get comment data from DB
try {
    $sql = "SELECT id, username, comment, postDate FROM blog_table";
    $stmt = $pdo->query($sql);
    $comment_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

// Close DB connection
$pdo = null;
