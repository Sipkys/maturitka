<?php
include_once 'header.php';
include_once 'db.php';

$query = "SELECT * FROM authors";
$result = mysqli_query($connection, $query);
?>
<table border="2" cellpadding="5" cellspacing="4">
  <tr>
    <th>Číslo</th>
    <th>Jméno</th>
  </tr>
  <?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row["id_author"]; ?></td>
      <td><?php echo $row["author_name"]; ?></td>
    </tr>
<?php
}
?>
</table>
<?php
include_once 'footer.php';
