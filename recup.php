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
<meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    BagAway - Qr code
  </title>
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/tailwind.css" />
  <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
  <!-- ==== WOW JS ==== -->
  <script src="assets/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/html5-qrcode"></script>
  <script src="/html5-qrcode.min.js"></script>
  <script src="jquery-3.6.0.min.js"></script>
</head>
<body class="bg-primary">

<?php include 'headerConnected.php'?>
<div id="home" class="relative pt-[120px] md:pt-[130px] lg:pt-[160px] bg-primary ">
    <div class="flex flex-wrap items-center -mx-4 ">
    <div class="w-full   px-4">
    <div class="
                hero-content
                text-center
                mx-auto
                h-max
                wow
                max-w-full
                fadeInUp">

    <h2 class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark
                  mb-8
                ">
      <?php
      if(isset($row[0]))
      {
        echo "Ma réservation en cours : ";
        echo "<script>$('#si').show()</script>";
      }
      else
      {
        echo "Aucune réservation en cours";
        echo "<script>$('#si').hide()</script>";
      }
      ?>
    </h2>
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
        <button  class="font-medium
              text-white
              mb-5
              bg-white bg-opacity-20
              rounded-lg
              my-4
              py-3
              px-6
              hover:bg-opacity-100 hover:text-dark
              signUpBtn
              duration-300
              ease-in-out" onclick="dev()"> Déverouiller mon casier </button>
    </div>
  </div>
    <div>
      <div id="qr-reader" style="width:500px"></div>
      <div id="qr-reader-results"></div>
    </div>
    </div>
    </div>

            </div>
    </div>
</body>



  
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
                 alert("Casier déverouillé");


               }else {
                 alert("Réessayer");
               }
          }

          var html5QrcodeScanner = new Html5QrcodeScanner(
              "qr-reader", { fps: 10, qrbox: 250 });

          html5QrcodeScanner.render(onScanSuccess);
      });
  </script>
</html>
