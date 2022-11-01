    <?php
$usuario = $_POST  ["user" ];
$contrasenia = $_POST ["pass" ];

$ckuser= "admin";
$ckpass= "1234";

if ($usuario==$ckuser && $contrasenia==$ckpass)

{ header("location: https://www.virginradio.it/sezioni/1184/virgin-radio-on-air?refresh_ce");
}
else{header ("location:error1.html");}

?>