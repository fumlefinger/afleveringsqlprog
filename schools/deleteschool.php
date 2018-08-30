<?php

require_once("../includes/conn.php");


$sql = "DELETE FROM `schoolcontrols`.`schools` WHERE  `id` = ".$_GET['id'];
$conn -> query($sql);
header("Location: schools.php");

?>

