<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runners</title>
</head>
<body>
  <h1> Sportovci </h1>

<ol>    
<?php

  $runners[0] = "Jaroslav Melichar";
  $runners[1] = "Alexandr dulovec";
  $runners[2] = "Martin Kokeš";
  $runners[3] = "Matěj Pošík";
  $runners[4] = "Zuzka Kaplanová";
  $runners[5] = "Daniel Šuman";
  $runners[6] = "Filip Dupček";
  $runners[7] = "Martin Hruška";
  $runners[8] = "Nicolas Jan Sefzig";

  count($runners);
  for ($i=0; $i <9; $i++) {
    echo "<li> $runners[$i]</li> ";
}
?>
</ol>
<br>

<h2> Sudá a lichá čísla </h2>

<?php

    $end=69;
    $sude= " <b> Sudé čísla </b>: ";
    $liche="<br /> <b> Lichá čísla jsou </b> : ";

    for($i=1;$i<=$end;$i++)
    {
        if($i%2==0)
        {
            $sude.=$i.",";
        }else $liche.=$i.","; 
    }   
    echo $sude.$liche;

?>





</body>
</html>