<?php
$mujeres= $_POST['mujeres'];
$hombres=$_POST['hombres'];
$total= $mujeres+$hombres;
$pmujeres=($mujeres/$total)*100;
$phombres=($hombres/$total)*100;
?>

<HTML>
	<HEAD>
		<META charset="UTF-8">
		<TITLE>Porcentaje </TITLE>
		<link rel="stylesheet" Href="estilos.css"
	</HEAD>

  <BODY>
  	<center><table bgcolor="white">
		<td>
		<center><H1><P>Porcentaje de Mujeres: <?php echo $pmujeres;?> %</P></H1></center>
		<center><H1><P>Porcentaje de Hombres: <?php echo $phombres;?> %</P></H1>
 <br><br>
<table border="2" bgcolor="white"><tr><td><a href="../index.html" style="color: black;">Volver al inicio</a></td> <td><a href="index.html" style="color: black;">Ingresar otros valores</a></td></tr></table> </center>
 </BODY>
	
</HTML>