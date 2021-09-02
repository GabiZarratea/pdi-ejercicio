<?php
$pdecompra = $_POST['pdecompra'];
$des= ($pdecompra*15)/100;
$total= $pdecompra-$des;
?>

<HTML>
	<HEAD>
		<META charset="UTF-8">
		<TITLE>Descuento </TITLE>
		<link rel="stylesheet" Href="estilos.css"
	</HEAD>

  <BODY>

		<center><table bgcolor="white">
		<td><H1><center><P>Total a pagar: $ <?php echo $total;?> </P></center></H1>
		<H2><center><P>¡¡Gracias por su compra!!</P></center></H2>
	<br><br>
	<center>
<table border="2" bgcolor="white"><tr><td><a href="../index.html" style="color: black;">Volver al inicio</a></td> <td><a href="index.html" style="color: black;">Ingresar otros valores</a></td></tr></table> </center>		
  </BODY>

</HTML>