<?php

require_once("../includes/conn.php");


$sql = "DELETE FROM `schoolcontrols`.`administration` WHERE  `id` = ".$_GET['id'];
$conn -> query($sql);
header("Location: staff.php");

?>