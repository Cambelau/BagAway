<?php
include "conn.php";
//inscription
if (isset($_POST["email"])){

$email = $_POST['email'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

$requete = "INSERT INTO `user` (`id`, `first_name`, `last_name`,`email`, `password`) VALUES (NULL,'$fname','$lname','$email','$password')";
$conn->query($requete);
}

//connexion
if (isset($_GET["email"])){
$email = $_GET['email'];
$password = $_GET['password'];
$res = $conn->query("SELECT password FROM user WHERE email = '$email'");
echo "SELECT password FROM user WHERE email = '$email'";
$passwordtocheck = $res->fetch_array()[0];
if($passwordtocheck==$password)
{
   header("Location: /main.php");   
}

}

?>
<!DOCTYPE html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bagaway Alpha0.0.0</title>
    <body>
    <H1> Bagaway </H1>
    <button id="#btn1" onclick="login(1)"type="button" name="button">Inscription</button>
    <button id="#btn2" onclick="login(2)"type="button" name="button">Connexion</button>

    <form id='ins' class="" action="index.php" method="post" hidden>
      <H1> Inscription </H1>
      <input type="text" name="fname" value="" placeholder="Name">
      <input type="text" name="lname" value="" placeholder="Name">
      <input type='password' name='password' placeholder="password">
      <input type='email' name='email' placeholder="mail">
      <button type="submit" name="button">S'inscrire</button>
    </form>

    <form id='con' class="" action="index.php" method="get" hidden>
      <H1> Connexion </H1>
      <input type='email' name='email' placeholder="mail">
      <input type='password' name='password' placeholder="password">
      <button type="submit" name="button">Connexion</button>
    </form>
  </head>
  </body>
</html>


<script type="text/javascript">
$(document).ready(function(){

});

function login(i)
{
  if(i==1)
  {
    $('#ins').show()
    $('#con').hide()
  }else
  {
  $('#ins').hide()
  $('#con').show()
  }
}
</script>
