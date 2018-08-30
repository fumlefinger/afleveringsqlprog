<?php

require_once("../includes/conn.php");
if($_POST) {
    $sql = "UPDATE `schoolcontrols`.`schools` SET `school_name`= '".$_POST['schoolname']."', `address`= '".$_POST['schooladdress']."' WHERE  `id`=".$_GET['id'];
    $conn ->query($sql);
    header("Location: schools.php");
}
else {
    $sql = "SELECT * FROM `schools` WHERE `id` = '".$_GET['id']."'";
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
                    <h1>Enter school name</h1>
                    <input type="text" name="schoolname" value="<?php echo $row['school_name'];?>"></input>
                    <h1>Enter school address</h1>
                    <input type="texy" name="schooladdress" value="<?php echo $row['address'];?>"></input>
                    <br><br>
                    <button type="submit" value="submit">Submit</button>
                </form>
            </center>
        </div>
    </body>
</html>