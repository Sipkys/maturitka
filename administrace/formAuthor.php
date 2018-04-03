<?php
include_once 'header.php';
$path = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'db.php';
include_once $path;
$submit = filter_input(INPUT_POST, "submit");
if ($submit) {
    $name = filter_input(INPUT_POST, "name");
    $query = "INSERT INTO authors (author_name) VALUES ('$name')";
    echo $query;
    $finish = mysqli_query($connection, $query);
    echo "Ezi Pezi";
}
?>
<form method="post" action="http://localhost/maturita-1/administrace/addAuthor.php">
<input type="text" name="name">Jméno Autora
<input type="submit" name="submit" value="submit">
</form>
