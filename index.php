<?php
	//php es un lenguaje d expresiones
	$cantidad=0;
	$nombres="";

	if($nombres)
	{

		/*echo "Este mensaje es si la expresion devuelve true";*/


	} //expresiones


?>

<table>
	<tr>
		<td>Nombres</td>
		<td>Apellidos</td>
		<td>DNI</td>
	</tr>
	<?php if(1):?>
		<style type="text/css">
			td{
				background: green;
				color:white;
			}

		</style>
		<tr>
			<td>luis</td>
			<td>Cabrera</td>
			<td>12345678</td>
		</tr>

		<tr>
			<td>Juan</td>
			<td>Huaroto</td>
			<td>87654321</td>

		</tr>
<?php endif;?>


</table>