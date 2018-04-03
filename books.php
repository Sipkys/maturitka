<?php
include_once 'header.php';
include_once 'db.php';
$query = "SELECT *
FROM books b
JOIN books_authors ba using (id_book)
JOIN authors a using (id_author)
JOIN genres g using (id_genre)";
$result = mysqli_query($connection, $query);
  ?>
  <table border="2" cellpadding="5" cellspacing="4">
    <tr>
      <th>EAN</th>
      <th>Název</th>
      <th>Author</th>
      <th>Stránky</th>
      <th>žánr</th>
      <th>Půjčený</th>
    </tr>
    <?php
  while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo $row["ean"]; ?></td>
        <td><?php echo $row["title"]; ?></td>
        <td><?php echo $row["author_name"]; ?></td>
        <td><?php echo $row["pages_count"]; ?></td>
        <td><?php echo $row["genres_name"]; ?></td>
        <td><?php echo $row["lended"]; ?></td>
      </tr>
  <?php
  }
  ?>
</table>
<?php
include_once 'footer.php';
