<?php

// PHP Klassen
// echo $_SERVER['PHP_SELF'];
class Auto{

  private $name;
  private $farbe;
  private $kraftstoff;
  private $bauart;
  private $anzahltanken;

  function __construct(){
    $this->anzahltanken=0;
    //echo "<p>Konstruktor der Klasse Auto</p>";
  }

  function __destruct(){
    //echo "<p>Destruktor von $this->name</p>";
    //unset($_SESSION['anzahltanken']);
  }


  public function tankDeckelOeffnen(){
    $this->anzahltanken++;
    echo "<br><h4>Bitte Das Fahrzeug mit $this->kraftstoff tanken</h4>";
    echo "<h6>Das Auto wurde schon $this->anzahltanken mal getankt.</h6><br/>";

    if(!isset($_SESSION['anzahltanken'])){
      $_SESSION['anzahltanken']=1;
    }else{
      $_SESSION['anzahltanken']++;
    }

    //print_r($_SESSION);echo "<br/>";
  }

  public function setNameAuto($name){
    $this->name = $name;
  }

  public function getNameAuto(){
    return $this->name;
  }

  public function setFarbeAuto($farbe){
    $this->farbe = $farbe;
  }

  public function getFarbeAuto(){
    return $this->farbe;
  }

  public function setKraftstoffAuto($kraftstoff){
    $this->kraftstoff = $kraftstoff;
  }

  public function getKraftstoffAuto(){
    return $this->kraftstoff;
  }

  public function setBauartAuto($bauart){
    $this->bauart = $bauart;
  }

  public function getBauartAuto(){
    return $this->bauart;
  }

}


class Primzahl{

function getPrim(){
  ?>

  <form method="post">
    <div class="form-group">
        <label for="primzahl">Zahl eingeben</label>
        <input class="form-control" type="number" name="primzahl" class="input">
    </div>
    <div class="form-group">
        <td><input type="submit" name="submit" class="btn btn-default"></td>
    </div>
  </form>

  <?php

  @$testzahl = $_POST['primzahl'];

  $istprim = true;

  for($zahl = 2;$zahl<$testzahl;$zahl++){
    if($testzahl % $zahl == 0){
      $istprim = false;
    }
  }
  if($istprim){
    echo "<h1>Die Zahl $testzahl ist eine Primzahl</h1>";
  }else{
    echo "<h1>Die Zahl $testzahl ist keine Primzahl</h1>";
  }
}


}
?>
