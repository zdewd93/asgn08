<?php

function checkAge($data){
  //echo '<pre';
  //die(var_dump($data));
  //echo '</pre>';
  if ($data >= 21){
    echo "You are old enough, go on in.";
  }
  else  {
    echo "You're too young, go away!";
  }
}

?>