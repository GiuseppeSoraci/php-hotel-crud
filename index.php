<?php
require_once __DIR__ . '/database.php';
$array_stanze = [];

$query = "SELECT * FROM `stanze`;";
$start_query = $connection->query($query);
if ($start_query && $start_query->num_rows > 0) {
    while ($row = $start_query->fetch_assoc()) {
        $array_stanze[] = $row;
    }
    $connection->close();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rooms</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Room List</h1>
    <ul>
        <?php foreach ($array_stanze as $room) { ?>
            <li>Room Number: <?= $room['room_number']; ?></li>
            <li>Floor: <?= $room['floor']; ?></li>
            <li><a href="details.php?id=<?= $room['id']; ?>">Room Details</a></li>
        <?php } ?>
    </ul>
</body>

</html>