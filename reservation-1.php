<!DOCTYPE html>
<?php //connexion
include "conn.php";

$nbrbag = $_POST['nbrbag'];
$type = $_POST['type'];
$data = $_POST['date'];
//A avoir avec les cookies
$id_client = 1;

try
{
  //Cherche un casier de libre
  $req = "SELECT `id_casier` FROM `casier` WHERE `statut` = 0 LIMIT 1;";
  $res = $conn->query($req);

  $id_casier = $res->fetch_array()[0];

  if(isset($id_casier))
  {
    //On cree une nouvelle reservation
    $sql = "INSERT INTO `reservation`(`id_client`, `id_casier`, `statut`) VALUES ($id_client,$id_casier,1);";
    $res = $conn->query($sql);

    //On change le statut du casier
    $sql = "UPDATE `casier` SET `statut` = 1 WHERE `casier`.`id_casier` = $id_casier;";
    $res = $conn->query($sql);
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

    </form>
  </body>
</html>
