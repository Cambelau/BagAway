<!DOCTYPE html>
<?php //connexion
include "conn.php";

//A avoir avec les cookies
$id_client = 1;

try
{
  //Cherche un casier de libre
  $req = "SELECT `id_casier`,`code` FROM `casier` WHERE `statut` = 0 LIMIT 1;";
  $res = $conn->query($req);

  $row = $res->fetch_array();
  $id_casier = $row[0];
  $code = $row[1];
  echo $code."+".$id_casier;

  if(isset($id_casier))
  {
    //On cree une nouvelle reservation
    echo "string";
    $sql = "INSERT INTO `reservation`(`id_client`, `id_casier`, `statut`,`code_casier`) VALUES ($id_client,$id_casier,1,\"".$code."\");";
    echo $sql;
    $res = $conn->query($sql);
    echo "string";

    //On change le statut du casier
    $sql = "UPDATE `casier` SET `statut` = 1 WHERE `casier`.`id_casier` = $id_casier;";
    $res = $conn->query($sql);


    header("Location: /test-qrcode.php");
  }else
  {
    echo "Aucun casiers de libre";
  }

}catch(Exception $e)
{

}

?>

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
