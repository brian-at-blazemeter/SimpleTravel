<?php
// Start the session
session_start();
if (!isset($_SESSION['token']) || $_SESSION['token'] !== $_POST['csrf_token']) {
    header('HTTP/1.1 500 Internal Server Error');
    echo "CSRF ATTACK!";
    throw new RuntimeException('CSRF attack');
    session_destroy();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simple Travel Agency</title>
    <meta name="description" content="Enterprise Selenium demo app">
    <meta name="sage" content="flights app">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="assets/bootstrap-table.js"></script>
    <link href="assets/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/bootstrap-table.css" rel="stylesheet" media="screen">
    <style type="text/css">
        body { background: #f5f5f5); }
        .hero-unit { background-color: #fff; }
        .center { display: block; margin: 0 auto; }
    </style>
    
</head>

<body>
<?php
// $conn = mysqli_connect("localhost", "root", "root", "simple_travel");
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }


$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$sql="INSERT INTO customer (name, address, city, state, zip)
VALUES
('$name','$address', '$city', '$state', '$zip')";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
?>
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



<div class="container hero-unit">
    <h3>Your flight from <?php echo $_SESSION["fromPort"]; ?> to <?php echo $_SESSION["toPort"]; ?> has been reserved. Thank you!</h3>
</div>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
