<?php
  $mark = 55;

  if ($mark >= 80 && $mark <= 100){
      echo "Grab = 4";
  }else if ($mark >= 70 && $mark <= 80){
      echo "Grab = 3";
  }else if ($mark >= 60 && $mark <= 70){
      echo "Grab = 2";
    }else if ($mark >= 50 && $mark <= 60){
        echo "Grab = 1";
    }else if ($mark >= 0 && $mark <= 50){
        echo "Grab = 0";
    }else {
        echo "คะแนนไม่ได้อยู่ในช่วง 0 - 100 ";

      }
?>