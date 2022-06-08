<?php 
$alpha = range('A', 'z');
for($i=0; $i<=4; $i++)
{
 for($j=$i; $j>=0; $j--)
  echo $alpha[$j];
 echo "<br>";
}
?>