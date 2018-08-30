<?php

require_once("../includes/conn.php");


$sql = "DELETE FROM `schoolcontrols`.`cards` WHERE  `id` = ".$_GET['id'];
$conn -> query($sql);
header("Location: cards.php");

?>