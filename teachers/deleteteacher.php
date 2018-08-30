<?php

require_once("../includes/conn.php");


$sql = "DELETE FROM `schoolcontrols`.`teachers` WHERE  `id` = ".$_GET['id'];
$conn -> query($sql);
header("Location: teachers.php");

?>