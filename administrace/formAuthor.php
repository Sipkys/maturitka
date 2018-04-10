<?php
include_once 'header.php';
$path = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'db.php';
include_once $path;
$submit = filter_input(INPUT_POST, "submit");
$id_author = filter_input(INPUT_GET, "id_author");
$name = filter_input(INPUT_POST, "name");
$bookname = "";
if (isset($submit) && isset($id_author)) {
    $query = "UPDATE authors SET author_name = '$name' WHERE id_author = '$id_author'";
    $finish = mysqli_query($connection, $query);
    echo "Ezi Pezi";
} elseif ($submit) {
    $query = "INSERT INTO authors (author_name) VALUES ('$name')";
    echo $query;
    $finish = mysqli_query($connection, $query);
    echo "Ezi Pezi";
}
if (isset($id_author)) {
    $sql = "SELECT * from authors WHERE id_author = $id_author";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $bookname = $row["author_name"];
}
?>
<form method="post">
<input type="text" name="name" value="<?php echo $bookname ?>">Jméno Autora
<input type="submit" name="submit" value="submit">
</form>
