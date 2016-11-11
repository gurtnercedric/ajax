<!DOCTYPE html>
<html>
  <head>
    <?php session_start(); ?>
    <script
			  src="http://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <script src="app.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>First PHP Website</title>
  </head>

  <body>
    <div class="container">
      <div class="jumbotron">
        <div class="title">
          <h5>&copy;2016 Jan Kressebuch</h5>
          <h1>Autovermietung</h1>
          <h3>Autovermietung Modul 307 Jan Kressebuch</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="post">
            <form class="form-inline">
              <div class="form-group">
                <label for="name">Fahrzeugname</label>
                <input  class="form-control"
                        type="text"
                        name="name"
                        value=""
                        placeholder="Fahrzeugname"
                        id="name"

                ></div>
                <div class="form-group">
                  <label for="color">Autofarbe</label>
                  <input  class="form-control"
                          type="color"
                          name="color"
                          value="#ff0000"
                          placeholder=""
                          id="color"

                ></div>
                <label for="bauart">Bauart</label>
                <div class="form-group">
                  <select name="bauart" id="bauart" class="form-control">
                    <option value="Kombi">Kombi</option>
                    <option value="Cabrio">Cabrio</option>
                    <option value="Limousine">Limousine</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="age">Age</label>
                  <input disabled class="form-control"
                          type="number"
                          name="age"
                          value=""
                          placeholder="Alter"
                          id="age"
                  ></div>
                <label for="email">Kraftstoff</label>
                <div class="form-group">
                  <input  class="form-control"
                          type="kraftstoff"
                          name="kraftstoff"
                          value=""
                          placeholder="Kraftstoff"
                          id="kraftstoff"

                ></div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Ich akzeptiere die allgemeinen Geschäftsbedingungen</label>
                </div>
                <div class="radio">
                  <label class="radio-inline"><input type="radio" value="">Ich möchte jetzt ein Mail erhalten</label>
                </div>
                <div class="radio">
                  <label class="radio-inline"><input type="radio" value="">Ich möchte jetzt später Mail erhalten</label>
                </div>
                <div class="radio">
                  <label class="radio-inline"><input disabled type="radio" value="">Ich möchte kein Mail erhalten</label>
                </div>

                <div class="form-group">
                  <button type="submit" id="submitbutton" name="submitbutton" class="btn btn-info"><i class="fa fa-envelope-o"></i> Absenden
                  </button>
                  <button onclick="firstFunction()" type="button" name="javabutton" class="btn btn-danger"><i class="fa fa-coffee "></i> Javascript
                  </button>
                </div>
          </form>
        </div>

        <div class="col-md-12">
          <div id="ergebnis" class="hidden"></div>
          <div class="container body">
            <?php
              include('classes.php');
              //wenn gesetzt
              /*if(isset($_POST['name'])){
                echo $_POST['name'];
              }else{
                echo "Bitte Namen eingeben!";
              }*/
              $fehlercheck = false;
              $fehler = "Fehler! ";
              //wen leer
              if(!empty($_POST['name'])){
                $name = trim(htmlspecialchars($_POST['name']));
              }else{
                $fehlercheck = true;
                $fehler .= "Name /";
                //echo "<h4>Bitte Namen eingeben!<h4>";
              }

              if(!empty($_POST['kraftstoff'])){
                $kraftstoff = $_POST['kraftstoff'];
              }else{
                $fehlercheck = true;
                $fehler .= "/ Kraftstoff ";
                //echo "<h4>Bitte E-Mail Adresse eingeben!<h4>";
              }
              if(isset($_POST['bauart']) && isset($_POST['color'])){
                $bauart = $_POST['bauart'];
                $color = $_POST['color'];
              }
              $fehler .= "Feld ist leer!";

              if(@$_POST && $fehlercheck){
                echo "<h4 class=\"warning\">$fehler<h4>";
              }

              if(isset($_POST['submitbutton']) && !$fehlercheck){
                $auto = new Auto();
                ?>
                <div class="autoausgabe">
                  <?php
                  $auto->setNameAuto($name);
                  echo "<h3>".$auto->getNameAuto()."</h3>";
                  $auto->setFarbeAuto($color);
                  $auto->setBauartAuto($bauart);
                  $auto->setKraftstoffAuto($kraftstoff);
                  $auto->tankDeckelOeffnen();

                  echo "Das Fahrzeug ist ".$auto->getFarbeAuto()."<br/>";
                  echo "Das Fahrzeug ist ".$auto->getBauartAuto()."<br/>";
                  echo "Das Fahrzeug tankt ".$auto->getKraftstoffAuto()."<br/>";
                  ?>
                </div><?php

              }




              /*$golf = new Auto;
              $lambo = new Auto;

              $golf->setNameAuto('Golf');
              echo "<h3>".$golf->getNameAuto()."</h3>";
              $golf->setFarbeAuto("Schwarz");
              $golf->setBauartAuto("Limousine");
              $golf->setKraftstoffAuto("Bleifrei 95");
              $golf->tankDeckelOeffnen();

              echo "Das Fahrzeug ist ".$golf->getFarbeAuto()."<br/>";
              echo "Das Fahrzeug ist ".$golf->getBauartAuto()."<br/>";
              echo "Das Fahrzeug tankt ".$golf->getKraftstoffAuto()."<br/>";

              $lambo->setNameAuto('Lamborghini');
              echo "<h3>".$lambo->getNameAuto()."</h3>";
              $lambo->setFarbeAuto("Gold");
              $lambo->setBauartAuto("Supersportwagen");
              $lambo->setKraftstoffAuto("Benzin");
              $lambo->tankDeckelOeffnen();

              echo "Das Fahrzeug ist ".$lambo->getFarbeAuto()."<br/>";
              echo "Das Fahrzeug ist ".$lambo->getBauartAuto()."<br/>";
              echo "Das Fahrzeug tankt ".$lambo->getKraftstoffAuto()."<br/>";

              echo "<br/><br/><br/>";

              echo "<h3>Primzahlen</h3>";

            $zahl = new Primzahl;
            $zahl->getPrim();*/

            ?>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
