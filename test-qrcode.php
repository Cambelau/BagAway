<?php
session_start();
include "conn.php";
$id =  $_SESSION["id"];
$id_casier =  $_SESSION['casier'];
$req = "SELECT * FROM `casier` WHERE `id_casier` = $id_casier;";
$res = $conn->query($req);
$row = $res->fetch_array();
?>
<html>
<head>
    <title>Qr code</title>
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h3>Casier : <?php echo $row[0]; ?></h3>
    <h3>Localisation : <?php echo $row[1];?></h3>
    <div id="qr-reader" style="width:500px"></div>
    <div id="qr-reader-results"></div>
    <form action="main.php">
    <button id="retour" type="submit" name="button" hidden>Revenir au menu</button>
    <form>
</body>
<script src="https://unpkg.com/html5-qrcode"></script>
<script src="/html5-qrcode.min.js"></script>
<script src="jquery-3.6.0.min.js"></script>
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
</head>
</html>
