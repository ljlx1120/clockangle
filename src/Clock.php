<?php
  class Clock {

    function angleCheck($hour, $min) {
      if (($min == 5*$hour) || ($min == 0 && $hour == 12)){
        echo '0';
      } elseif (($min - $hour*5 == 15) || ($min - $hour*5 == -45)) {
        echo '90';
      } elseif (($min - $hour*5 == 30) || ($min - $hour*5 == -30)) {
        echo '180';
      } elseif ($hour == 12) {
        $hour = 0;
        $angle = ($min-5*$hour)*6;
        echo $angle;
        } else {
        if ((5*$hour-$min)>0) {
          $angle = (5*$hour-$min)*6;
          echo $angle;
        } elseif ((5*$hour-$min)<0) {
          $angle = ($min-5*$hour)*6;
          echo $angle;
        }
      }
    }
  }
?>
