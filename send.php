<?php
include("conexion.php");
if(isset($_POST['send'])){
	if(
		strlen(_POST['name']) >= 1 &&
		strlen(_POST['edad']) >= 1 &&
		strlen(_POST['email']) >= 1 &&
		strlen(_POST['phone']) >= 1
	) {
		$name= trim($_POST['name']);
		$edad= trim($_POST['edad']);
		$email= trim($_POST['email']);
		$phone= trim($_POST['phone']);
		$fecha= date("d/m/y");
		$consulta= "INSERT INTO datos(nombre, edad, email, telefono, fecha) 
		VALUES ('$name', '$edad', '$email', '$phone', '$fecha')";
		$resultado= mysqli_query($conex, $consulta);
		if($resultado){
			 ?>
			 <h3 class="success">Tu registro se a completado</h3>
			 <?php
		} else {
			 ?>
			 <h3 class="error">Tu registro se a complicado intente de nuevo</h3>
		     <?php
		}
	}else{
		?>
		<h3 class="error">Llena todos los campos</h3>
		<?php
	}
}
?>