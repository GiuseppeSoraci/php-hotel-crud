<?php
require_once __DIR__ . '/database.php';
$id = $_GET['id'];
$stanza_dettaglio = [];
$query = "SELECT * FROM `stanze` WHERE id =" . $id . ";";
$start_query = $connection->query($query);
if ($start_query && $start_query->num_rows > 0) {
    $stanza_dettaglio = $start_query->fetch_assoc();
    $connection->close();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>

<body>
    <a href="index.php">Back</a>
    <h2>Room Detail <?= $stanza_dettaglio['room_number']; ?></h2>
    <p>Floor <?= $stanza_dettaglio['floor'] ?></p>
    <p>
        <?= $stanza_dettaglio['beds'] > 1 ? 'there are' : 'there is'; ?> <?= $stanza_dettaglio['beds'] > 1 ? $stanza_dettaglio['beds'] . ' beds' : $stanza_dettaglio['beds'] . ' bed'; ?></p>
</body>

</html>

</html>