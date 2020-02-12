<?php

 include_once("gender-prediction-class.php");

 $gender=new genderPrediction(31, 'february');
 echo $gender->predictGender();

?>
