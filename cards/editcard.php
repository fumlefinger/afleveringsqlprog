<?php
$line = "";
require_once("../includes/conn.php");
if($_POST) {
    $id = $conn->real_escape_string($_POST['student']);
    $toid = $conn->real_escape_string($_POST['cardid']);
    $number = $conn->real_escape_string($_POST['number']);
    $credit = $conn->real_escape_string($_POST['credit']);

    $sql = "UPDATE `schoolcontrols`.`cards` SET `number`= '".$number."', `credit`= '".$credit."' WHERE  `id`=".$_GET['id'];
    $conn ->query($sql);

    $sql = "UPDATE `schoolcontrols`.`students` SET `cardid` = '".$toid."' WHERE `id` = '".$id."'";
    $conn ->query($sql);
    header("Location: cards.php");
}
else {
    $sql = "SELECT * FROM `cards` WHERE `id` = '".$_GET['id']."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $sql2 = "SELECT * FROM `students` WHERE `cardid` IS NULL OR `cardid` = 1";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_assoc()) {
        $line .= "<option value='".$row2['id']."'>".$row2['name']."</option>";
    }
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
                <input type="hidden" name="cardid" value="<?php echo $row['id'];?>"></input>
                <h1>Enter Card Number as Int</h1>
                <input type="number" name="number" value="<?php echo $row['cardnumber'];?>" required></input>
                <h1>Enter Card Credit as Int</h1>
                <input type="number" name="credit" value="<?php echo $row['credit']; ?>"required></input>
                <h1>Assign student to card</h1>
                <select name = "student"><?php echo $line; ?></select>
                <br><br>
                <button type="submit" value="submit">Submit</button>
                </form>
            </center>
        </div>
    </body>
</html>