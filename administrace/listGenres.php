<?php
include_once 'header.php';
$path = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'db.php';
include_once $path;
$query = "SELECT * FROM genres";
$result = mysqli_query($connection, $query);
?>
<table border="2" cellpadding="5" cellspacing="4">
  <tr>
    <th>Číslo</th>
    <th>Žánr</th>
    <th>Upravit</th>
  </tr>
  <?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row["id_genre"]; ?></td>
      <td><?php echo $row["genres_name"]; ?></td>
      <td><a href="http://localhost/maturita-1/administrace/genres/<?php echo $row["id_genre"] ?>">Upravit</a></td>
    </tr>
<?php
}
?>
<tr>
  <td><a href="http://localhost/maturita-1/administrace/genres/new">Přidat</a></td>
</tr>
</table>
<?php
include_once 'footer.php';
?>
