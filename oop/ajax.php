<?php
  $name = @$_POST['name'];
  $farbe = @$_POST['color'];
  $bauart = @$_POST['bauart'];
  $kraftstoff = @$_POST['kraftstoff'];

  if(!empty($name) && !empty($bauart) && !empty($kraftstoff)){
    echo true;
  }else{
    echo false;
  }
 ?>
