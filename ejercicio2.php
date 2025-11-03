<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="numero">numero a cambiar</label>
    <input type="text" name="numero">
    <input type="submit" value="Convertir">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
   

function numRomano($n){
   $romanos=[
    1=>"I",
    2=>"II",
    3=>"III",
    4=>"IV",
    5=>"V",
    6=>"VI",
    7=>"VII",
    8=>"VIII",
    9=>"IX",
    10=>"X"
   ];
   
    return $romanos[$n];
   }
   $numero=$_POST["numero"];
   echo numRomano($numero);

}





?>