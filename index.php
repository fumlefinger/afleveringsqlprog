<?php
require_once('includes/conn.php');


?>

<html>
<head>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="includes/style.css">

</head>

<body style="background: rgb(66, 134, 244);">

<center><h1> Welcome to fumlefingers school administration system </h1></center>

<div class="mainmenubuttondiv">
    <button class="mainmenubutton" onclick="window.location.href='schools/schools.php'">Schools</button>
</div>

<div class="mainmenubuttondiv">
    <button class="mainmenubutton" onclick="window.location.href='teachers/teachers.php'">Teachers</button>
</div>

<div class="mainmenubuttondiv">
    <button class="mainmenubutton" onclick="window.location.href='students/students.php'">Students</button>
</div>

<div class="mainmenubuttondiv">
    <button class="mainmenubutton" onclick="window.location.href='administration/staff.php'">Administration</button>
</div>

<div class="mainmenubuttondiv">
    <button class="mainmenubutton" onclick="window.location.href='cards/cards.php'">Food Cards</button>
</div>

</body>

</html> 