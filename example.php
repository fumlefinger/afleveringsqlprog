<?php

$line = "";

$database = $_GET['databaseno'];
if ($database == 1) {
    $line .= "<h1>Value1</h1>";
    $line .= "<input type='text' name='value1'></input>";
}
else if ($database == 2) {
    $line .= "<h1>Value1</h1>";
    $line .= "<input type='text' name='value1'></input>";
    $line .= "<h1>Value2</h1>";
    $line .= "<input type='text' name='value2'></input>";
}



?>

<html>

<head>

</head>

<body>

<form method = "POST">
    <?echo $line;?>
</form>
</body>
</html>