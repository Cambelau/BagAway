<?php
include "conn.php";
echo "hello bagaway";
$res = $conn->query("SELECT id FROM user ORDER BY id ASC");

for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " id = " . $row['id'] . "\n";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bagaway Alpha0.0.0</title>
    <button type="button" name="button">Inscription</button>
    <button type="button" name="button">Connexion</button>

    <form class="" action="index.html" method="post">
      <input type="text" name="" value="">
      <input type="text" name="" value="">
       <button type="submit" name="button">S'inscrire</button>
    </form>

  </head>
  <body>

  </body>
</html>
