<?php
include_once 'header.php';
include_once 'db.php';

$query = "SELECT *
FROM books b
JOIN books_authors ba using (id_book)
JOIN authors a using (id_author)
JOIN genres g using (id_genre)";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    
<?php
    echo $row["ean"];
    echo $row["title"];
    echo $row["author_name"];
    echo $row["pages_count"];
    echo $row["genres_name"];
    echo $row["lended"] . "<br>" . "<br>";
}
include_once 'footer.php';
