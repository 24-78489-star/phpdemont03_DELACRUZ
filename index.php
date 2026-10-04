<!-- internal php code -->
<?php
    include 'pure_php.php';
?>
<!-- boiler plate -->
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP DEMO BSIT NT 3103</title>
</head>
<body>
    <!--<h1>Hello World</h1>-->
    <!-- php internal code -->
    <?php //echo "<h1>Hello World</h1>"; ?>
    <!-- Anchor Tag -->
    <a href="next_page.php">Next Page</a>
    <a href="example2.php">Example 2</a>
    
    <h3>
        Username: <u id="displayusername"><?php echo $username; ?></u>
        <br>
        UserID: <u id="displayuserID"><?php echo $user_id; ?></u>
        <br>
        Age: <u id="displayage"><?php echo $age; ?></u>
        <br>
        Address <u id="displayaddress"><?php echo $address; ?></u>
        <br>
    </h3>

    <button type="button" onclick="greetUser()">Greet User</button>
    <script src="external.js"></script>
</body>
</html>