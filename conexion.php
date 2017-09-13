<?php
$servername= "unacweb.database.windows.net";
$conectioninfo= array("Database"=>"unacweb", "UID"=>"adminjhohan", "PWD"=>"19922017Educ@cion");
$conn= sqlsrv_connect($servername, $conectioninfo);

if($conn){
	echo "Conexion Establecida.<br />";
}else{
	echo "No se establecio la Conexion <br />";
	die(print_r(sqlsrv_errors(), true));
}
?>