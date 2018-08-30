<?php

require_once('../includes/conn.php');

$line = "";

if ($_POST) {
    $number = $conn->real_escape_string($_POST['number']);
    $credit = $conn->real_escape_string($_POST['credit']);
    $sql = "INSERT INTO `cards` (`cardnumber`,`credit`) VALUES ('".$number."','".$credit."')";
    $conn->query($sql);
    header("location: cards.php");
}


?>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../includes/style.css">
</head>
<body style="background: rgb(66,134,244)">
    <div>
        <center>
            <form method="post">
                <h1>Enter Card Number as Int</h1>
                <input type="number" name="number" required></input>
                <h1>Enter Card Credit as Int</h1>
                <input type="number" name="credit" required></input>
                <br><br>
                <button type="submit" value="submit">Submit</button>
            </form>
        </center>
    </div>
</body>
</html>
