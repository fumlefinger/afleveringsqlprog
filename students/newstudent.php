<?php

require_once('../includes/conn.php');

$line = "";

if ($_POST) {
    $name = $conn->real_escape_string($_POST['studentName']);
    $programme = $conn->real_escape_string($_POST['studentProgramme']);
    $school = $conn->real_escape_string($_POST['studentSchool']);
    $teacher = $conn->real_escape_string($_POST['contactTeacher']);
    $sql = "INSERT INTO `students` (`name`,`programme`,`school`,`contact_teacher`) VALUES ('".$name."','".$programme."','".$school."','".$teacher."')";
    $conn->query($sql);
    header("location: students.php");
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
                <h1>Enter Student Name</h1>
                <input type="text" name="studentName" required></input>
                <h1>Enter Student Programme</h1>
                <input type="text" name="studentProgramme" required></input>
                <h1>Enter Student School</h1>
                <input type ="text" name = "studentSchool" required></input>
                <h1>Enter Student Contact Teacher</h1>
                <input type="text" name="contactTeacher" required></input>
                <br><br>
                <button type="submit" value="submit">Submit</button>
            </form>
        </center>
    </div>
</body>
</html>
