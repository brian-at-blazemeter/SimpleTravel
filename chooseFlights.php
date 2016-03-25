<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Enterprise Selenium Flights App</title>
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
    // Set session variables
    $_SESSION["fromPort"] = $_POST['fromPort'];
    $_SESSION["toPort"] = $_POST['toPort'];
    ?>

        <h3>Flights from <?php echo $_SESSION["fromPort"]; ?> to <?php echo $_SESSION["toPort"]; ?>: </h3>
        <table class="table">
            <thead>
            <tr>
                <th>Choose</th>
                <th>Flight #</th>
                <th>Airline</th>
                <th>Departs: <?php echo $_SESSION["fromPort"]; ?></th>
                <th>Arrives: <?php echo $_SESSION["toPort"]; ?></th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
               <form name="VA43" method="post" action="purchaseFlight.php">
                <td><input type="submit" class="btn btn-small" value="Choose This Flight"></td>
                <td>43</td>
                <td>Virgin America</td>
                <td>1:43 AM</td>
                <td>9:45 PM</td>
                <td>$472.56</td>
                   <input type="hidden" value="43" name="flight">
                <input type="hidden" value="472.56" name="price">
                <input type="hidden" value="Virgin America" name="airline">
              
                   <script>mixpanel.track("Virgin Flight 43 Selected");</script>
                </form>
            </tr>
            <tr>
                <form name="UA234" method="post" action="purchaseFlight.php">
                <td><input type="submit" class="btn btn-small" value="Choose This Flight"></td>
                <td>234</td>
                <td>United Airlines</td>
                <td>7:43 AM</td>
                <td>10:45 PM</td>
                <td>$432.98</td>
                    <input type="hidden" value="234" name="flight">
                <input type="hidden" value="432.98" name="price">
                <input type="hidden" value="United Airlines" name="airline">
                   
                    <script>mixpanel.track("United Flight 234 Selected");</script>
                </form>
            </tr>
            <tr>
                <form name="AL969" method="post" action="purchaseFlight.php">
                <td><input type="submit" class="btn btn-small" value="Choose This Flight"></td>
                <td>9696</td>
                <td>Aer Lingus</td>
                <td>5:27 AM</td>
                <td>8:22 PM</td>
                <td>$200.98</td>
                <input type="hidden" value="9696" name="flight">
                <input type="hidden" value="200.98" name="price">
                <input type="hidden" value="Aer Lingus" name="airline">
                    
                    <script>mixpanel.track("Aer Lingus Flight 9696 Selected");</script>
                </form>

            </tr>
            <tr>
                <form name="VA12" method="post" action="purchaseFlight.php">
                <td><input type="submit" class="btn btn-small" value="Choose This Flight"></td>
                <td>12</td>
                <td>Virgin America</td>
                <td>11:23 AM</td>
                <td>1:45 PM</td>
                <td>$765.32</td>
                    <input type="hidden" value="12" name="flight">
                <input type="hidden" value="765.32" name="price">
                <input type="hidden" value="Virgin America" name="airline">
                    
                    <script>mixpanel.track("Virgin Flight 12 Selected");</script>
                </form>
            </tr>
            <tr>
                <form name="L4346" method="post" action="purchaseFlight.php">
                <td><input type="submit" class="btn btn-small" value="Choose This Flight"></td>
                <td>4346</td>
                <td>Lufthansa</td>
                <td>1:45 AM</td>
                <td>8:34 PM</td>
                <td>$233.98</td>
                <input type="hidden" value="4346" name="flight">
                <input type="hidden" value="233.98" name="price">
                <input type="hidden" value="Lufthansa" name="airline">
                
                <script>mixpanel.track("Lufthansa Flight 4346 Selected");</script>
                </form>
            </tr>
            </tbody>
        </table>
        <input type="hidden" name="fromPort" value="<?php echo $fromPort; ?>" />
        <input type="hidden" name="toPort" value="<?php echo $toPort; ?>" />



</div>

</body>
</html
