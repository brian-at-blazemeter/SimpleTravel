<?php
// Start the session
session_start();
if (!isset($_SESSION['token']) || $_SESSION['token'] !== $_POST['csrf_t']) {
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
<?php
    $price = $_POST['price'];
    $tax = 514.76;
    $total = $price + $tax;

?>
<h2>Your flight from <?php echo $_SESSION["fromPort"]; ?> to <?php echo $_SESSION["toPort"]; ?> has been reserved.</h2>
    <p>Airline: <?php echo $_POST['airline'];  ?></p>
    <p>Flight Number: <?php echo $_POST['flight']; ?></p>
    <p>Price: <?php echo $_POST['price'] ?></p>
    <p>Arbitrary Fees and Taxes: <?php echo $tax; ?></p>
    <hr>
    <p>Total Cost: <em><?php echo $total; ?> </em></p>
    <p>Please submit the form below to purchase the flight.</p>



<form class="form-horizontal" action="confirmPurchase.php" method="post">
    <div class="control-group">
        <label class="control-label" for="inputName">Name</label>
        <div class="controls">
            <input type="text" id="inputName" placeholder="First Last" name="name">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="address">Address</label>
        <div class="controls">
            <input type="text" id="address" placeholder="123 Main St." name="address">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="city">City</label>
        <div class="controls">
            <input type="text" id="city" placeholder="Anytown" name="city">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="state">State</label>
        <div class="controls">
            <input type="text" id="state" placeholder="State" name="state">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="zipCode">Zip Code</label>
        <div class="controls">
            <input type="text" id="zipCode" placeholder="12345" name="zip">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="creditCardType">Card Type</label>
        <div class="controls">
            <select class="form-inline">
                <option value="visa">Visa</option>
                <option value="amex">American Express</option>
                <option value="dinersclub">Diner's Club</option>
             </select>
        </div>
      </div>

        <div class="control-group">
            <label class="control-label" for="creditCardNumber">Credit Card Number</label>
            <div class="controls">
                <input type="text" id="creditCardNumber" placeholder="Credit Card Number">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="nameOnCard">Name on Card</label>
            <div class="controls">
                <input type="text" id="nameOnCard" placeholder="John Smith">
            </div>
        </div>


    <div class="control-group">
        <div class="controls">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <input type="hidden" name="csrf_t" value="<?php echo $_SESSION['token']; ?>" />
            <button type="submit" class="btn btn-primary">Purchase Flight</button>
            
        </div>
    </div>
</form>
    </div>

</body>
</html
