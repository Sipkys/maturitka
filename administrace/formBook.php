<?php
include_once 'header.php';
$path = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'db.php';
include_once $path;
$submit = filter_input(INPUT_POST, "submit");
$id_book = filter_input(INPUT_GET, "id_book");
$ean = filter_input(INPUT_POST, "ean");
$title = filter_input(INPUT_POST, "title");
$pages = filter_input(INPUT_POST, "pages");
$description = filter_input(INPUT_POST, "description");
$genre = filter_input(INPUT_POST, "genres");
$lended = filter_input(INPUT_POST, "lended");
$bookean = "";
$booktitle = "";
$bookpages = "";
$bookdes = "";
$bookg = "";
$bookl = "";
if (isset($submit) && isset($id_book)) {
    $query = "UPDATE books SET ean = '$ean', title = '$title', pages_count = '$pages', description = '$description', id_genre = '$genre', lended = '$lended'
  WHERE id_book = '$id_book'";
    echo $query;
    $finish = mysqli_query($connection, $query);
    echo "Ezi Pezi";
} elseif ($submit) {
    $query = "INSERT INTO books (ean, title, pages_count, description, id_genre, lended)
    VALUES ('$ean', '$title', '$pages', '$description', '$genre', '$lended')";
    echo $query;
    $finish = mysqli_query($connection, $query);
    echo "Ezi Pezi";
}
if (isset($id_book)) {
    $sql = "SELECT * from books WHERE id_book = $id_book";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $bookean = $row["ean"];
    $booktitle = $row["title"];
    $bookpages = $row["pages_count"];
    $bookdes = $row["description"];
    $bookg = $row["id_genre"];
    $bookl = $row["lended"];
}
?>
<form method="post">
<input type="number" name="ean" value="<?php echo $bookean ?>">EAN</br>
<input type="text" name="title" value="<?php echo $booktitle ?>">Title</br>
<input type="number" name="pages" value="<?php echo $bookpages ?>">Počet stran</br>
<input type="text" name="description" value="<?php echo $bookdes ?>">Popisek</br>
<input type="number" name="genres" value="<?php echo $bookg ?>">Žánr</br>
<input type="number" name="lended" value="<?php echo $bookl ?>">Půjčeno</br>
<input type="submit" name="submit" value="submit">
</form>
