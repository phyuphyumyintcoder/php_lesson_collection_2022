<?php 
$alpha = range('A', 'z');
for($i=4; $i>=0; $i--)
{
 for($J=$i; $j<=4; $j++)
  echo $alpha[$j];
 echo "<br>";
}
?>