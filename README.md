## PHP Blog - Message Board Web Application

This project demonstrates how to build a simple message board web application using PHP and MySQL. Users can post comments, which are then displayed on the message board. The application uses PHP for server-side scripting and MySQL for database management.

## Overview

The "PHP Blog" message board application allows users to post and view comments. It includes features such as input validation, error messaging, and secure handling of user inputs to prevent XSS attacks.

## Features

Users can enter their name and comment.
Comments are stored in a MySQL database and displayed on the message board.
Input validation and error messaging for name and comment fields.
Secure handling of user inputs using htmlspecialchars to prevent XSS attacks.
Technologies Used
PHP: Server-side scripting to handle form submissions and interact with the database.
MySQL: Database management for storing and retrieving comments.
HTML5: Structure and semantics of the web pages.
CSS3: Custom styles for layout and design.
PDO: PHP Data Objects for secure database interactions.
How to Use
Clone the repository or download the source code.
Set up a MySQL database with the following structure:
sql

CREATE DATABASE blog_db;
USE blog_db;

CREATE TABLE blog_table (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(255) NOT NULL,
comment TEXT NOT NULL,
postDate DATETIME NOT NULL
);
Update the database connection details in the process.php file if necessary.
Run the application by opening the index.php file in your web server.
Enter your name and comment in the form and click "Submit" to post your comment.
Reference URLs
PHP: [https://www.php.net/]
MySQL: [https://www.mysql.com/]
Google Fonts: [https://fonts.google.com/]
Author
Created by Ryoko Yamamoto

Note: This README file has been edited.
