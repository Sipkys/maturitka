<?php
include_once 'header.php';
$path = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'db.php';
include_once $path;
$submit = filter_input(INPUT_POST, "submit");
$id_genre = filter_input(INPUT_GET, "id_genre");
$genres_name = filter_input(INPUT_POST, "genres");
if (isset($submit) && isset($id_genre)) {
    $query = "UPDATE genres SET genres_name = '$genres_name' WHERE id_genre = '$id_genre' ";
    echo $query;
    $finish = mysqli_query($connection, $query);
    echo "Ezi Pezi";
} elseif ($submit) {
    $query = "INSERT INTO genres (genres_name)
    VALUES ('$genres_name')";
    $finish = mysqli_query($connection, $query);
    echo "Ezi Pezi";
}
$genres = "";
if (isset($id_genre)) {
    $sql = "SELECT * from genres WHERE id_genre = $id_genre";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $genres = $row["genres_name"];
}
?>
<form method="post">
<input type="text" name="genres" value="<?php echo $genres ?>">Žánr</br>
<input type="submit" name="submit" value="submit">
</form>
