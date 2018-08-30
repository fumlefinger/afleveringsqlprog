<?php

require_once('../includes/conn.php');

$line = "";

if ($_POST) {
    $name = $conn->real_escape_string($_POST['name']);
    $title = $conn->real_escape_string($_POST['title']);
    $school = $conn->real_escape_string($_POST['school']);
    $sql = "INSERT INTO `administration` (`name`,`title`,`school`) VALUES ('".$name."','".$title."','".$school."')";
    $conn->query($sql);
    header("location: staff.php");
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
            <form method="POST">
                <h1>Enter Staff Name</h1>
                <input type="text" name="name" required></input>
                <h1>Enter Staff Title</h1>
                <input type="text" name="title" required></input>
                <h1>Enter Staff School</h1>
                <input type ="text" name = "school" required></input>
                <br><br>
                <button type="submit" value="submit">Submit</button>
            </form>
        </center>
    </div>
</body>
</html>
