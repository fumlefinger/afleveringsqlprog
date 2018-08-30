<?php

require_once("../includes/conn.php");

$sql = "SELECT * FROM `cards`";
$result = $conn->query($sql);

$line = "";

    $line .= "<table>";
    $line .= "<tr>";
    $line .= "<th>Card Owner</th>";
    $line .= "<th>Cardnumber</th>";
    $line .= "<th>credit</th>";
    $line .= "<th>Controls</th>";
    $line .= "</tr>";
while ($row = $result->fetch_assoc()) {
    $line .= "<tr>";
    $sql2 = "SELECT * FROM `students` WHERE `cardid` = ".$row['id'];
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    if (isset($row2['name'])) {
        $line .= "<td>".$row2['name']."</td>";
    }
    else {
        $line .= "<td>Unassigned</td>";    
    }
    $line .= "<td>".$row['cardnumber']."</td>";
    $line .= "<td>".$row['credit']."</td>";
    $line .= "<td><button style='margin-right: 2vw;' onclick='window.location.href=\"editcard.php?id=".$row['id']."\"'>Edit</button><button onclick='window.location.href=\"deletecard.php?id=".$row['id']."\"'>Slet</button></td>";
    $line .= "</tr>";
}
$line .= "</table>";
$line .= "<button style='min-width: 6vw; min-height: 6vh;' onclick='window.location.href=\"newcard.php\"'>Add new</button>";
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