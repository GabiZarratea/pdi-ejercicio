<?php
$aparcial = $_POST['aparcial'];
$bparcial=$_POST['bparcial'];
$cparcial=$_POST['cparcial'];
$efinal=$_POST['efinal'];
$tfinal=$_POST['tfinal'];
$promparc= ($aparcial+$bparcial+$cparcial )/3;
$promfinal=($promparc+$efinal+$tfinal)/3;
?>

<HTML>
	<HEAD>
		<META charset="UTF-8">
		<TITLE>Promedio </TITLE>
		<link rel="stylesheet" Href="estilos.css"
	</HEAD>

  <BODY>
		<center><table bgcolor="white">
		<td><H1> Promedio Final: </H1>
		<center><H1><P><?php echo $promfinal;?> </P></H1>
<br><br>
<table border="2" bgcolor="white"><tr><td><a href="../index.html" style="color: black;">Volver al inicio</a></td> <td><a href="index.html" style="color: black;">Ingresar otros valores</a></td></tr></table> </center>
  </BODY>
	
</HTML>