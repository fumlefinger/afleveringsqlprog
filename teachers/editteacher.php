<?php

require_once("../includes/conn.php");
if($_POST) {
    $name = $conn->real_escape_string($_POST['name']);
    $subjects = $conn->real_escape_string($_POST['subjects']);
    $school = $conn->real_escape_string($_POST['school']);

    $sql = "UPDATE `schoolcontrols`.`teachers` SET `name`= '".$name."', `school`= '".$school."', `subjects`= '".$subjects."' WHERE  `id`=".$_GET['id'];
    $conn ->query($sql);
    header("Location: teachers.php");
}
else {
    $sql = "SELECT * FROM `teachers` WHERE `id` = '".$_GET['id']."'";
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
                <h1>Enter Teacher Name</h1>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" required></input>
                <h1>Enter Teacher School</h1>
                <input type="text" name="school" value="<?php echo $row['school']; ?>" required></input>
                <h1>Enter Teacher Subjects</h1>
                <input type ="text" name = "subjects" value="<?php echo $row['subjects']; ?>" required></input>
                <br><br>
                <button type="submit" value="submit">Submit</button>
                </form>
            </center>
        </div>
    </body>
</html>