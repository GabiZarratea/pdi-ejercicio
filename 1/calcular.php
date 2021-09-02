<?php
$sueldo = $_POST['sueldo'];
$incremento= $sueldo*2/100;
$total= $sueldo+$incremento;
?>

<HTML>
	<HEAD>
		<META charset="UTF-8">
		<TITLE>inversión </TITLE>
		<link rel="stylesheet" Href="estilos.css"
	</HEAD>

  <BODY>

		<center><table bgcolor="white">
		<td><H1> Datos de la inversión: </H1>
		<H2><center><P>Sueldo: $<?php echo $sueldo;?> </P></center></H2>
		<H2><center><P>Incremento mensual: $<?php echo $incremento;?> </P></center></H2>
		<H2><center><P>Total a pagar: $<?php echo $total;?> </P></center></H2></td>
		</table>
<br><br>
<table border="2" bgcolor="white"><tr><td><a href="../index.html" style="color: black;">Volver al inicio</a></td> 
<td><a href="index.html" style="color: black;">Ingresar otros valores</a></td></tr></table> </center>
  </BODY>

</HTML>