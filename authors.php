<?php
include_once 'header.php';
include_once 'db.php';

$query = "SELECT * FROM authors";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["id_author"];
    echo $row["name"] . "<br>";
}
include_once 'footer.php';
