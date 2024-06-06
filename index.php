<?php
include './process.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="./2ch.css">
</head>

<body>
    <h1 class="title">Message Board</h1>
    <hr>
    <div class="boardWrapper">
        <section>
            <?php foreach ($comment_array as $comment) : ?>
                <article>
                    <div class="wrapper">
                        <div class="nameArea">
                            <span>Name: </span>
                            <p class="username"><?php echo htmlspecialchars($comment["username"], ENT_QUOTES, 'UTF-8') ?></p>
                            <time>:<?php echo htmlspecialchars($comment["postDate"], ENT_QUOTES, 'UTF-8') ?></time>
                        </div>
                        <p class="comment"><?php echo htmlspecialchars($comment["comment"], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
        <form class="formWrapper" method="POST" action="index.php">
            <div>
                <label for="">Name: </label>
                <input type="text" name="username">
            </div>
            <div class="commentbox">
                <label for="">Comment: </label>
                <textarea name="comment" class="commentTextArea"></textarea>
            </div>
            <div>
                <?php if (!empty($error_messages['username'])) : ?>
                    <p class="error"><?php echo $error_messages['username']; ?></p>
                <?php endif; ?>
                <?php if (!empty($error_messages['comment'])) : ?>
                    <p class="error"><?php echo $error_messages['comment']; ?></p>
                <?php endif; ?>
            </div>
            <input class="submit" type="submit" value="submit" name="submitButton">
        </form>
    </div>
</body>

</html>