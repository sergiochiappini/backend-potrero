<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>1. Crear una variable n y validar que sea un número positivo.</h1>
 <?php 
 $numero=5;  
   if($numero>0){echo"$numero es un numero positivo";} 
    
    ?>
    <br> 
    <hr>
    <h1>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h1>
 <?php
 if ($numero>1 & $numero<10);
echo "el numero $numero es mayor a 1 y menor a 10"

    ?>
    <hr>
     <h1>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2. </h1>

    <?php
   $numero=11;
   if ($numero>10 & $numero<20); 

   echo "$numero"
    ?>
    <hr>
    <h1>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2.
        Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. 
        Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, 
        la división entera y el resto de la división. Si numero1 y numero2 son iguales, 
        mostrar el siguiente mensaje “Los números ingresados son iguales”. </h1>

        <?php
        $numero1 = 50;
        $numero2 = 40;
if($numero1>$numero2)
{echo"".($numero1+$numero2);}?>

<br>
<hr>
<?php
{echo "".($numero1-$numero2);}?>
<br>
<hr>


<?php 
        $numero1 = 20;
        $numero2 = 80;

if($numero2>$numero1)

{echo "".($numero2*$numero1);}?>
<br>
<hr>
<?php 

{echo "".($numero2/$numero1);}?>
<br>
<hr>
<?php 


{echo "".($numero2%$numero1);}?>