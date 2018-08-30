<?php

require_once("../includes/conn.php");
if($_POST) {
    $name = $conn->real_escape_string($_POST['studentName']);
    $programme = $conn->real_escape_string($_POST['studentProgramme']);
    $school = $conn->real_escape_string($_POST['studentSchool']);
    $teacher = $conn->real_escape_string($_POST['contactTeacher']);

    $sql = "UPDATE `schoolcontrols`.`students` SET `name`= '".$name."', `programme`= '".$programme."', `school`= '".$school."', `contact_teacher`= '".$teacher."' WHERE  `id`=".$_GET['id'];
    $conn ->query($sql);
    header("Location: students.php");
}
else {
    $sql = "SELECT * FROM `students` WHERE `id` = '".$_GET['id']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}



?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../includes/style.css">
    </head>
    <body>
        <div>
            <center>
                <form method="POST">
                <h1>Enter Student Name</h1>
                <input type="text" name="studentName" value="<?php echo $row['name']; ?>" required></input>
                <h1>Enter Student Programme</h1>
                <input type="text" name="studentProgramme" value="<?php echo $row['programme']; ?>" required></input>
                <h1>Enter Student School</h1>
                <input type ="text" name = "studentSchool" value="<?php echo $row['school']; ?>" required></input>
                <h1>Enter Student Contact Teacher</h1>
                <input type="text" name="contactTeacher" value="<?php echo $row['contact_teacher']; ?>" required></input>
                <br><br>
                <button type="submit" value="submit">Submit</button>
                </form>
            </center>
        </div>
    </body>
</html>