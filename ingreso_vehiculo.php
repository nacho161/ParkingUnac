<?php

require_once('header.php');
require_once('conexion.php');
?>

	<section id="twoColumnLayout" class="row grey">
				<div class="center">
					 <h1>Ingreso Veh&iacute;culo</h1>
				<div class="columns">
						<div class="half">
						
						<form action="ingreso_vehiculo.php" method="post" name="form2" id="form2">
  <table align="center"  border="0">
    <tr>
      <td nowrap="nowrap" align="right">Placa:</td>
      
      <td colspan="2"><input name="placa" id="placa" type="text" value="" size="6" maxlength="6" /></td>
    </tr>
	<tr>
      <td align="right">Tipo de Veh&iacuteculo: </td>
	  <td align="center" size="50%">Moto:  	<input type="radio" name="tipo" value="moto"  /></td>
      <td align="center" size="50%">Carro:     <input type="radio" name="tipo" value="carro"  /></td>
    </tr>
    <tr >
      <td nowrap="nowrap" align="right">Fecha de llegada:</td>
      <td colspan="2"><input name="fecha_llegada" type="text" disabled="disabled" value="<?php echo date('Y-m-d')?>" size="32" /></td>
    </tr>
    <tr >
      <td nowrap="nowrap" align="right">Hora de llegada:</td>
      <td colspan="2"><input name="hora_llegada" type="text" disabled="disabled"  value ="<?php echo date('H:i:s')?>"   size="32" /></td>
    </tr>
    <tr >
      <td nowrap="nowrap" align="right" >Usuario de llegada:</td>
      <td colspan="2"><input name="usuario_llegada" type="text" value="" size="32" /></td>
    </tr>
    <tr>
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td colspan="2">
      	<div class="formRow">
		  <button class="btnSmall btn submit right" type="submit" name="submit">
		  <span>Ingresar</span>
		  </button>
		</div>
<font Arial, Helvetica, sans-serif color="#FF0000"><?php if (isset($mensaje)) echo $mensaje; ?></font>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2" />
</form>
<?php
	//Comprovamos si se han recivido datos del formulario
    //Como vemos se lo utilizando el campo nombre
    if(isset($_POST['placa'])){
      //Insertamos los datos en SQL en mi caso la tabla se  
      //llama personas y consta de dos celdas 
      //la de nombres y la de nick
      $insertar = "INSERT INTO ingresovehiculo (placa, tipo, fecha_llegada, hora_llegada, usuario_llegada) 
          VALUES ('".$_POST['nombre']."', '".$_POST['tipo']."' , '".$_POST['fecha_llegada']."', '".$_POST['hora_llegada']."', '".$_POST['usuario_llegada']."')";
      mysql_query($insertar, $conn); 
     }
?>
</div>	
</div>	
</div>	
</section>					
					

        

<?php

require_once('footer.php');
?>