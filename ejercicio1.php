<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
    <label for="edad1">edad 1 </label>
    <input type="text" name="edad1"  >
    <label for="edad2">edad 2</label>
    <input type="text" name="edad2" >
    <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
    function difernciaDeEdad($a,$b){
        if ($a<$b) {
            $resultado=$b-$a;
        }else{
            $resultado=$a-$b;      
        }
        return $resultado;
    
    }
      $edad1=$_POST['edad1'];
    $edad2=$_POST['edad2'];
    echo " la diferencia es :".difernciaDeEdad($edad1,$edad2);

    ?>