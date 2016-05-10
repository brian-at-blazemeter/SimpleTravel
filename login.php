<?php
//ob_start();
session_start();
?>

<!DOCTYPE HTML>
<html lang = "en">

<head>
    <meta charset="utf-8">
    <title>Simple Travel Agency</title>
    <meta name="description" content="Enterprise Selenium demo app">
    <meta name="sage" content="flights app">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="assets/bootstrap-table.js"></script>
    <link href="assets/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/jumbotron.css" rel="stylesheet" media="screen">
    <link href="assets/bootstrap-table.css" rel="stylesheet" media="screen">
    <style type="text/css">
        body { background: #f5f5f5); }
        .hero-unit { background-color: #fff; }
        .center { display: block; margin: 0 auto; }
    </style>
</head>
<body>

<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.php">Travel The World</a>

        </div>
    </div>
</div>

<div class="jumbotron">
    <div class="container">
        <h1>Welcome to the Taurus Travel Agency!</h1>
        <p>Do you love to travel? Get ready for some action! Choose your departure and destination below and pack your bags...</p>
        <div>
            <img src="assets/plane.png" class="img-rounded">
        </div>
    </div>
</div>

<div class="container hero-unit">

    <h2>Please log in to start your amazing journey!</h2>

    <!-- login form -->

    <form name="login" action="index.php" method="post">
            <input class="input-large" type="text" name="username" placeholder="username"><p>
            <input class="input-large" type="password" name="password" placeholder="password"><p>
            <input type="submit" class="btn btn-primary" value="Login">
        <input 
    </form>


</div>

</body>
</html>
