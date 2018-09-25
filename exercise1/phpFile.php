<?php
/*
phpFile.php
Author: Clare Meyer
Lab: 04; Exercise: 01
function that populates table from html with the values for a tens times table
 */
    for($i=1; $i<11; $i++){
      echo "<tr>";
      for($j=1; $j<11; $j++){
        echo "<td>";
        echo $j*$i;
        echo "</td>";
      }
    echo "</tr>";
    }
  ?>
