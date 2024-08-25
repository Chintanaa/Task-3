<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Website</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>Chinthana</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#">Courses <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="#">Generative AI</a></li>
                        <li><a href="#">Power BI</a></li>
                        <li><a href="#">Machine Learning</a></li>
                        <li><a href="#">Data science</a></li>
                        <li><a href="#">Data analytics</a></li>
                        <li><a href="#">Web-development</a></li>
                    </ul>
                </li>
                <li><a href="#">Profile</a></li>
                <li><a href="new-tab.html" target="_blank">AI</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h2>Welcome to World of AI</h2>
            <p>Gateway to learning new skills.</p>
        </section>
    </main>
</body>
</html>

