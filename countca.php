<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count caracters</title>
</head>
<body>

<?php 
   $ch=$_POST["ch"]; 
   $ca=$_POST["ca"]; 
   $nb=0;

for ($i = 0; $i <= strlen($ch); $i++) {
  if ($ch[$i]==$ca);
   $nb++;
}
echo "the number of occurence of " . $ca . "  in ". $ch . " is: ". $nb ;
?>
<br>
</body>
</html>
