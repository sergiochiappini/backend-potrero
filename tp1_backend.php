<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1> 1. Imprima por pantalla: “Hola mundo” </h1>

<?php $mensaje = "Hola Mundo";
 echo $mensaje;
 ?>

<br>
<hr>



<h1> 3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera.
 </h1>

 <?php $manzana = 120;
 $naranja = 90;

$total = $manzana + $naranja;


echo $total; ?>
<br>
<hr>
<?php echo $manzana + $naranja;
  ?>
  <br>
  <hr>
<?php echo $manzana - $naranja; ?>
<br>
<hr>
<?php echo $manzana * $naranja; ?>

<br>
<hr>
<?php echo $manzana / $naranja; ?>
<br>
<hr>
<?php echo $manzana % $naranja; ?>
<br>
<hr>
<h1>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla.</h1>

<?php $celsius = 20;

$Farenheid = ($celsius * 9/5)+32;

echo $Farenheid;?>

<br>
<hr>

<h1>5. Implementar algoritmos que permitan:
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</h1>

<?php
$base = 18;
$altura = 12;

$area = $altura*$base;
$perimetro = $altura + $base + $altura + $base;
?>
<?php echo $perimetro;?>

<br>
<hr>

<?php echo $area;?>

<h1>b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</h1>

<?php $Pi=3.1416;
$radio = 30;
$Radio =30;
$area = $Pi * ($Radio* $Radio);

$circunferencia=2.0*M_PI*$radio;
   $perimetro=$circunferencia;
   ?>
   <?php
   echo $perimetro;
?>
<br>
<hr>

<?php echo $area;
		 ?>




</html>
