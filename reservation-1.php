<?php
ob_start();
?>

<?php //connexion
session_start();
include "conn.php";

//A avoir avec les cookies
try
{
  //Cherche un casier de libre
  $id_client = $_SESSION["id"];
  $req = "SELECT `id_casier`,`code` FROM `casier` WHERE `statut` = 0 LIMIT 1;";
  $res = $conn->query($req);

  $row = $res->fetch_array();
  $id_casier = $row[0];
  $code = $row[1];

  if(isset($id_casier))
  {
    //On cree une nouvelle reservation
    $_SESSION["id_casier"] = $id_casier;
    echo "SESSSION : ".$_SESSION["id"];
    echo "ID : ". $id_client;

    $sql = "INSERT INTO `reservation`(`id_client`, `id_casier`, `statut`,`code_casier`) VALUES ($id_client,$id_casier,1,\"".$code."\");";
    echo $sql;
    $res = $conn->query($sql);

    //On change le statut du casier
    $sql = "UPDATE `casier` SET `statut` = 1 WHERE `casier`.`id_casier` = $id_casier;";
    $res = $conn->query($sql);
    echo $sql;

    header("Location: /test-qrcode.php");
    ob_end_flush();
  }else
  {
    echo "Aucun casiers de libre";
  }

}catch(Exception $e)
{
    echo $e;

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reservation d'un camion</title>
  </head>
  <body>
    <h1>Reservation du camion</h1>
    <form action="reservation-1.php" method="post">
      confirme la reservation
        <input type="submit" name="" value="">
    </form>
  </body>
</html>
