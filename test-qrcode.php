<html>
<head>
    <title>Qr code</title>
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <?php
  include "conn.php";
  session_start();
  //A avoir avec les cookies
  if(isset($_POST['code']))
    {

      $code = $_POST['code'];
      // cookies
      $req = "SELECT `id_reservation` FROM `reservation` WHERE `id_client` = $_SESSION['id'];";
      $res = $conn->query($req);
      $row = $res->fetch_array();
      $id_reservation = $row[0];

      $_SESSION['id_reservation']=$id_reservation;

      //Cherche un casier de libre
      $req = "SELECT `code_casier`,`id_casier` FROM `reservation` WHERE `id_reservation` = $id_reservation;";
      $res = $conn->query($req);
      $row = $res->fetch_array();
      $codetocheck = $row[0];
      $id_casier = $row[1];

      echo $code."-".$codetocheck;
      if($code==$codetocheck)
      {
      $sql = "UPDATE `casier` SET `Ouverture`= 1 WHERE `id_casier`= $id_casier;";
      echo $sql;
      $res = $conn->query($sql);
      }else
      {
        echo "Veillez reesayer";
      }
    }
  ?>
    <div id="qr-reader" style="width:500px"></div>
    <div id="qr-reader-results"></div>
    <form  id="myForm" action="test-qrcode.php" method="post">
        <input id="code" name="code" value="" />
    </form>
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

             alert(decodedText);
             $("#code").val(decodedText);
             $("#myForm").submit()
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });

        html5QrcodeScanner.render(onScanSuccess);
    });
</script>
</head>
</html>
