<?php

require_once('../includes/conn.php');

$line = "";

if ($_POST) {
    $name = $conn->real_escape_string($_POST['name']);
    $subjects = $conn->real_escape_string($_POST['subjects']);
    $school = $conn->real_escape_string($_POST['school']);
    $sql = "INSERT INTO `teachers` (`name`,`subjects`,`school`) VALUES ('".$name."','".$subjects."','".$school."')";
    $conn->query($sql);
    header("location: teachers.php");
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
                <h1>Enter Teacher Name</h1>
                <input type="text" name="name" required></input>
                <h1>Enter Teacher School</h1>
                <input type="text" name="school"  required></input>
                <h1>Enter Teacher Subjects</h1>
                <input type ="text" name = "subjects" required></input>
                <br><br>
                <button type="submit" value="submit">Submit</button>
            </form>
        </center>
    </div>
</body>
</html>
