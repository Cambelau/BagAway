<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reservation d'un camion</title>
  </head>
  <body>
    <h1>Reservation du camion</h1>
    <form class="" action="index.php" method="post">
        <label for="nombre de bagage">Affaire</label>
        <select class="" name="nombre de bagage">
          <option value="">1</option>
          <option value="">2</option>
          <option value="">3</option>

        </select>
        <label for="nombre de bagage">Valise cabine</label>
        <select class="" name="nombre de bagage">
          <option value="">1</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
        <label for="nombre de bagage">Grande valise</label>
        <select class="" name="nombre de bagage">
          <option value="">1</option>
          <option value="">2</option>
          <option value="">3</option>
        </select>
        <br>
        <label for="">Heure estime d'arrivre</label>
        <input type="datetime-local" id="meeting-time"
       name="meeting-time" value="2018-06-12T19:30"
       min="2018-06-07T00:00" max="2018-06-14T00:00">
        <br>
        <label for="">Heure estime de recuperation</label>
        <input type="datetime-local" id="meeting-time"
       name="meeting-time" value="2018-06-12T19:30"
       min="2018-06-07T00:00" max="2018-06-14T00:00">

       <button type="button" name="button">Reserver</button>
    </form>
  </body>
</html>
