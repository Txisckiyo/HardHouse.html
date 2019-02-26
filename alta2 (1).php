<<!DOCTYPE html>
<html>
<head><title>alta2</title></head>
<body>

<?php
$f_nombre = $_POST['nombre'];
$f_apellidos = $_POST['apellidos'];
$f_cumple = $_POST['cumple'];
$f_genero = $_POST['genero'];
$f_mail = $_POST['mail'];
$f_telef = $_POST['telef'];
$linea1="INSERT INTO usuarios (nombre, apellidos, cumple, genero, mail, telef) ";
$linea2=" VALUES ('$f_nombre','$f_apellidos', '$f_mail', '$f_cumple', '$f_genero', '$f_telef') ";
$orden=$linea1.$linea2;
/* print $orden; */

if ( ! $link=mysqli_connect('localhost','id8619334_hhadmin','zZv5r8eGPmCaNWB'))      //OJO!!!!    mysqli_connect
{
    print "<a> href=index.html>Error al conectar</a>";
    exit ;
}
if ( ! mysqli_select_db($link,"id8619334_users"))     // mysqli_select_db($link,"basedatos1"))    
{
    print "<a> href=index.html Error al seleccionar basededatos1</a>";
    exit;   
}
if ( ! $result=mysqli_query($link,$orden))   //  mysqli_query($link,$orden))   
{
print "<a> href=index.html>Parece que ha habido un error al conectar con nuestra base de datos principal, si quieresa puedes volver a intentarlo haciendo clic aquí o puedes subirlo a nuestra base de datos de refuerzo clicando abajo</a>";
print "<a href= http://hardhaouse.byethost14.com/>Base de datos secundaria</a>";
exit;
}
    
mysqli_close($link); 
    
print "<br>Alta correcta";
print "<br><br><a href='alta.html'>Otra alta</a>";
print "<br><br><a href='index.html'>Inicio</a>";
?>
</body>
</html>