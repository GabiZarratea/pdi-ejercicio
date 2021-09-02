<?php
$sueldo = $_POST['sueldo'];
$pventa1=$_POST['pventa1'];
$pventa2=$_POST['pventa2'];
$pventa3=$_POST['pventa3'];
$comision1= ($pventa1*10)/100;
$comision2= ($pventa2*10)/100;
$comision3= ($pventa3*10)/100;
$totalc=$comision1+$comision2+$comision3;
$total=($comision1+$comision2+$comision3)+$sueldo;

?>

<HTML>
	<HEAD>
		<META charset="UTF-8">
		<TITLE>Comisiones </TITLE>
		<link rel="stylesheet" Href="estilos.css"
	</HEAD>

  <BODY>

		<center><table bgcolor="black">
		<td><H1> Total a pagar: </H1>
		<center><H2><P>Sueldo: $<?php echo $sueldo;?> </P></H2></center>
		<center><H2><P>Total de Comisión: $<?php echo $totalc;?>  </P></H2></center>
		<center><H2><P>Total a obtener: $<?php echo $total;?> </P></H2>
	<br><br>
<table border="2" bgcolor="white"><tr><td><a href="../index.html" style="color: black;">Volver al inicio</a></td> <td><a href="index.html" style="color: black;">Ingresar otros valores</a></td></tr></table> </center>	
  </BODY>
	
</HTML>