<?php
include_once 'header.php';
$path = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'db.php';
include_once $path;
$query = "SELECT * FROM authors";
$result = mysqli_query($connection, $query);
?>
<table border="2" cellpadding="5" cellspacing="4">
  <tr>
    <th>Číslo</th>
    <th>Jméno</th>
    <th>Upravit</th>
  </tr>
  <?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row["id_author"]; ?></td>
      <td><?php echo $row["author_name"]; ?></td>
      <td><a href="http://localhost/maturita-1/administrace/autor/<?php echo $row['id_author'] ?>">Upravit</a></td>
    </tr>
<?php
}
?>
<tr>
  <td><a href="http://localhost/maturita-1/administrace/autor/new">Přidat</a></td>
</tr>
</table>
<?php
include_once 'footer.php';
?>
