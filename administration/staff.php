<?php

require_once("../includes/conn.php");

$sql = "SELECT * FROM `administration`";
$result = $conn->query($sql);

$line = "";

    $line .= "<table>";
    $line .= "<tr>";
    $line .= "<th>Name</th>";
    $line .= "<th>Title</th>";
    $line .= "<th>School</th>";
    $line .= "<th>Controls</th>";
    $line .= "</tr>";
while ($row = $result->fetch_assoc()) {
    $line .= "<tr>";
    $line .= "<td>".$row['name']."</td>";
    $line .= "<td>".$row['title']."</td>";
    $line .= "<td>".$row['school']."</td>";
    $line .= "<td><button style='margin-right: 2vw;' onclick='window.location.href=\"editstaff.php?id=".$row['id']."\"'>Edit</button><button onclick='window.location.href=\"deletestaff.php?id=".$row['id']."\"'>Slet</button></td>";
    $line .= "</tr>";
}
$line .= "</table>";
$line .= "<button style='min-width: 6vw; min-height: 6vh;' onclick='window.location.href=\"newstaff.php\"'>Add new</button>";
?>

<html> 

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../includes/style.css">
</head>

<body style="background: rgb(66, 134, 244)">

    <div>
        <?php echo $line; ?>
    </div>

</body>

</html>