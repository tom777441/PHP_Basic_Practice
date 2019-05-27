<?php
echo '<table border=0>';
  for($i=2;$i<=9;$i++) {
      echo '<tr>';
      for($j=2;$j<=5;$j++) {
          //echo "$i x $j =".($i*$j)." <br>";
          echo "<td> $j x $i = ".($i*$j)."&nbsp;&nbsp;</td>";
      }
      echo '</tr>';
  }
  echo '<tr><td> </td></tr>';
  echo '<tr><td> </td></tr>';

echo '</table>';
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

