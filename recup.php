<?php //connexion
session_start();
include "conn.php";
//A avoir avec les cookies
try
{
  //Cherche un casier de libre
  $id_client = $_SESSION["id"];
  $req = "SELECT * FROM `reservation` WHERE `statut` = 1 AND id_client=$id_client LIMIT 1;";
  $res = $conn->query($req);
  $row = $res->fetch_array();

}catch(Exception $e)
{

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reservation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <h1>
      <?php
      if(isset($row[0]))
      {
        echo "Votre reservation en cours : ";
        echo "<script>$('#si').show()</script>";
      }
      else
      {
        echo "Aucun reservation en cours";
        echo "<script>$('#si').hide()</script>";
      }
      ?>
    </h1>
    <div id="si">
      <?php
        $req = "SELECT * FROM `casier` WHERE `id_casier` = $row[2];";
        $res = $conn->query($req);
        $row = $res->fetch_array(); ?>

        <h3>Casier : <?php echo $row[0]; ?></h3>
        <h3>Localisation : <?php echo $row[1];
        $code = $row[2];
        $id_casier = $row[0];
        ?>
      </h3>
        <button onclick="dev()"> Déverouiller le casier </button>
    </div>
  </div>
    <body>
        <div id="qr-reader" style="width:500px"></div>
        <div id="qr-reader-results"></div>
    </body>
  </body>
  <script src="https://unpkg.com/html5-qrcode"></script>
  <script src="/html5-qrcode.min.js"></script>
  <script src="jquery-3.6.0.min.js"></script>
  <script>
  function dev()
  {
    $("#qr-reader").toggle();
  }
      function docReady(fn) {
          // see if DOM is already available
          $("#qr-reader").hide();

          if (document.readyState === "complete"
              || document.readyState === "interactive") {
              // call on next available tick
              setTimeout(fn, 1);
          } else {
              document.addEventListener("DOMContentLoaded", fn);
          }
      }
      docReady(function () {
          var resultContainer = document.getElementById('qr-reader-results');
          var lastResult, countResults = 0;
          function onScanSuccess(decodedText, decodedResult) {

               //$("#code").val(decodedText);
               var code = <?php echo json_encode($code).";";?>
               if(code == decodedText)
               {

                 <?php $sql = "UPDATE `casier` SET `Ouverture`= 1 WHERE `id_casier`= $id_casier;";
                 $res = $conn->query($sql);

                 $sql = "UPDATE `casier` SET `statut`= 0 WHERE `id_casier`= $id_casier;";
                 $res = $conn->query($sql);

                 $sql = "UPDATE `reservation` SET `statut`= 0 WHERE `id_client`= $id_client;";
                 $res = $conn->query($sql);


                ?>
                 alert("Cassier déverouiller");


               }else {
                 alert("Réessayer");
               }
          }

          var html5QrcodeScanner = new Html5QrcodeScanner(
              "qr-reader", { fps: 10, qrbox: 250 });

          html5QrcodeScanner.render(onScanSuccess);
      });
  </script>
  </head>
  </html>
</html>
