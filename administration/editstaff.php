<?php

require_once("../includes/conn.php");
if($_POST) {
    $name = $conn->real_escape_string($_POST['name']);
    $title = $conn->real_escape_string($_POST['title']);
    $school = $conn->real_escape_string($_POST['school']);


    $sql = "UPDATE `schoolcontrols`.`administration` SET `name`= '".$name."', `title`= '".$title."', `school`= '".$school."' WHERE  `id`=".$_GET['id'];
    $conn ->query($sql);
    header("Location: staff.php");
}
else {
    $sql = "SELECT * FROM `administration` WHERE `id` = '".$_GET['id']."'";
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
                <h1>Enter Staff Name</h1>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" required></input>
                <h1>Enter Staff Title</h1>
                <input type="text" name="title" value="<?php echo $row['title']; ?>" required></input>
                <h1>Enter Staff School</h1>
                <input type ="text" name = "school" value="<?php echo $row['school']; ?>" required></input>
                <br><br>
                <button type="submit" value="submit">Submit</button>
                </form>
            </center>
        </div>
    </body>
</html>