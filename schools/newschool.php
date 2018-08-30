<?php

require_once('../includes/conn.php');

$line = "";

if ($_POST) {
    $schoolname = $conn->real_escape_string($_POST['schoolname']);
    $address = $conn->real_escape_string($_POST['schooladdress']);
    $sql = "INSERT INTO `schools` (`school_name`,`address`) VALUES ('".$schoolname."','".$address."')";
    $conn->query($sql);
    header("location: schools.php");
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
                <h1>Enter school name</h1>
                <input type="text" name="schoolname"></input>
                <h1>Enter school address</h1>
                <input type="texy" name="schooladdress"></input>
                <br><br>
                <button type="submit" value="submit">Submit</button>
            </form>
        </center>
    </div>
</body>
</html>
