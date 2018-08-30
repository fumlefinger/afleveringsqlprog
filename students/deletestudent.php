<?php

require_once("../includes/conn.php");


$sql = "DELETE FROM `schoolcontrols`.`students` WHERE  `id` = ".$_GET['id'];
$conn -> query($sql);
header("Location: students.php");

?>