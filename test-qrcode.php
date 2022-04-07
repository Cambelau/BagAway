<?php
session_start();
include "conn.php";
$id =  $_SESSION["id"];
$id_casier =  $_SESSION['casier'];
$req = "SELECT * FROM `casier` WHERE `id_casier` = $id_casier;";
$res = $conn->query($req);
$row = $res->fetch_array();
?>



<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
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
</head>
  <!-- ==== qr part ==== -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/html5-qrcode"></script>
<script src="/html5-qrcode.min.js"></script>
<script src="jquery-3.6.0.min.js"></script>

<body class="bg-primary">
<?php include 'headerConnected.php'?>
    <div id="home" class="relative pt-[120px] md:pt-[130px] lg:pt-[160px] bg-primary ">
    <div class="flex flex-wrap items-center -mx-4 ">
    <div class="w-full   px-4">

        <div  class="
                hero-content
                text-center
                mx-auto
                h-max
                wow
                max-w-full
                fadeInUp">
            <h2 class="  font-bold
                  text-xl
                  sm:text-4xl
                  md:text-[40px]
                  text-white
                  mb-4
                    ">Casier n° <?php echo $row[0]; ?></h3>
            <br>
            <h2 class="  font-bold
                  text-x1
                  sm:text-4xl
                  md:text-[40px]
                  text-whiet
                  mb-4
                    ">Localisation : <?php echo $row[1];?></h3>
            <br>
        </div>
        <div class="
                hero-content
                text-center
                mx-auto
                h-max
                wow
                max-w-full">

            <div class="
                hero-content
                text-center
                mx-auto
                h-max
                wow
                max-w-full" id="qr-reader" style="width:500px">
            </div>
            <div id="qr-reader-results">
                </div>
                
                <form action="main.php">
                <button class="
              mb-5
              mt-12
              text-base
              font-medium
              text-white
              bg-white bg-opacity-20
              rounded-lg
              py-3
              px-6
              hover:bg-opacity-100 hover:text-dark
              signUpBtn
              duration-300
              ease-in-out"  id="retour" type="submit" name="button" hidden>Revenir au menu</button>
              <form>
                  </div>
            </div>
    </div>
</body>



<script>

    function docReady(fn) {
        // see if DOM is already available
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
             var code = <?php echo json_encode($_SESSION['code']).";";?>
             if(code == decodedText)
             {
               <?php $sql = "UPDATE `casier` SET `Ouverture`= 1 WHERE `id_casier`= $id_casier;";
               $res = $conn->query($sql);
               echo 'alert("Cassier déverouiller");';
               ?>
               $("#retour").show();

             }else {
               alert("non");
             }
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    });
</script>
</html>
