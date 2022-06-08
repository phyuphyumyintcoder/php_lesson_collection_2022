<?php
$alpha = range('A', 'Z');
for($i=0; $i<=4; $i++)
{
 for($j=4; $j>=$i; $j--)
  echo $alpha[$i];
 echo "<br>";
}
?>