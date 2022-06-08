<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style type="text/css">
  body {
   font-size:12px;
  }
  
  td {
   height: 24px;
   text-align: center;
   width: 24px;
  }
  
  td.gray {
   background-color: #ccc;
  }
  
  td.white {
   background-color: #fff;
  }
  
  td a {
   display: block;
   text-decoration: none;
  }
  
  td a:hover {
   background-color: #faa;
  }
  </style>
</head>
<body>
 <table border="1">
  
  <?php 
  for( $r = 1; $r < 6; $r++)
  {
  echo "<tr>";
   for( $c=1; $c<6; $c++)
   {
   ($c==$r) ? $bg = "gray" : $bg = "white";
   echo "<td class='$bg'><a href='#' title='$r x $c = ". $r * $c . " ' >" . $r*$c . "</a></td>" ;
   }  
  echo  "</tr>";
  }        
  ?>
  </table>
</body>
</html>