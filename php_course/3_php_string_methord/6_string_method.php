<?php 
$alpha = range('A', 'Z');
for($i=0; $i<=4; $i++)
{
 for($j=$i; $j<=4; $j++)
  echo $alpha[$j];
 echo "<br>";
}
?>