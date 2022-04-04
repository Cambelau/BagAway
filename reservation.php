<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reservation d'un camion</title>
  </head>
  <body>
    <h1>Reservation du camion</h1>
    <form action="reservation-1.php" method="post">
        <label for="nombre de bagage">Bagages : </label>
        <select class="" name="nbrbag">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <br>
        <input name="type" type="radio" value="livraison">En Livraison</input>
        <input name="type" type="radio" value="surplace">Sur Place </input>
        <br>
        <label>Heure estimé pour recupere votre bagage</label>
        <input type="time" id="meeting-time" name="date">
        <br>
       <button type="submit" name="button">Confirmer la reservation</button>
    </form>
  </body>
</html>
