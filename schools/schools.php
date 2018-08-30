<?php

require_once("../includes/conn.php");

$sql = "SELECT * FROM `schools`";
$result = $conn->query($sql);

$line = "";

    $line .= "<table>";
    $line .= "<tr>";
    $line .= "<th>School Name</th>";
    $line .= "<th>Address</th>";
    $line .= "<th>Controls</th>";
    $line .= "</tr>";
while ($row = $result->fetch_assoc()) {
    $line .= "<tr>";
    $line .= "<td>".$row['school_name']."</td>";
    $line .= "<td>".$row['address']."</td>";
    $line .= "<td><button style='margin-right: 2vw;' onclick='window.location.href=\"editschool.php?id=".$row['id']."\"'>Edit</button><button onclick='window.location.href=\"deleteschool.php?id=".$row['id']."\"'>Slet</button></td>";
    $line .= "</tr>";
}
$line .= "</table>";
$line .= "<button style='min-width: 6vw; min-height: 6vh;' onclick='window.location.href=\"newschool.php\"'>Add new</button>";
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