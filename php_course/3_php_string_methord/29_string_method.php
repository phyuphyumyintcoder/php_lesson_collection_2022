<?php 
$alpha = range('A', 'Z');
$k =4;
// First part
for($i=$k; $i>=0; $i--)
{
 for($j=$k; $j>=0; $j--)
 {
  if($j > $i)
   echo "<div>" . $alpha[$j] . "</div>";
  else 
   echo "<div>" . $alpha[$i] . "</div>";
 }
 for($j=1; $j<=$k; $j++)
 {
  if($j > $i)
   echo "<div>" . $alpha[$j] . "</div>";
  else
   echo "<div>" . $alpha[$a] . "</div>";   
 }
 echo "<br>";
}
// Second Part
for($i=1; $i<=$k; $i++)
{
 for($j=$k; $j>=0; $j--)
 {
  if($j > $i)
   echo "<div>" . $alpha[$j] . "</div>";
  else
   echo "<div>" . $alpha[$i] . "</div>";
 }
 echo "<br>";
}
?>