<?php
	session_start();
	if(isset($_SESSION['administrador'])){
		include "../modelo/include.php";
		$query = Administrador::getAllForId($_SESSION['administrador']);
		$resultado = Conexion::getQuery($query);
		$admin = mysqli_fetch_assoc($resultado);
		$query1 = Viaje::getAllForId($_SESSION['modificar']);
		$resultado1 = Conexion::getQuery($query1);
	}
	else{		
		header("Location: ../index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>MS Logistica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="col-sm-12">
    <div class="navbar-header col-sm-1">
     <img src="../image/logo.png">
    </div>
     <ul class="nav navbar-nav col-sm-6">
        <li class="active"><a href="<?php echo "adminLogeado.php";?>">Home</a></li>
	    <li><a href="<?php echo "abmCliente.php";?>">Cliente</a></li>
	  	<li><a href="<?php echo "abmEmpresa.php";?>">Empresa</a></li>
      	<li><a href="<?php echo "abmChofer.php";?>">Chofer</a></li>
      	<li><a href="<?php echo "abmMecanico.php";?>">Mecanico</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href=""  data-toggle="modal" data-target="#logout"><span class="glyphicon glyphicon-new-window" ></span> Logout</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href=" <?php echo 'abmEmpresa.php'; ?>"><span class="glyphicon glyphicon-list-alt" ></span> Empresa</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href=" <?php echo 'abmChofer.php'; ?>"><span class="glyphicon glyphicon-list-alt" ></span> Chofer</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href=" <?php echo 'abmMecanico.php'; ?>"><span class="glyphicon glyphicon-list-alt" ></span> Mecanico</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href=""><span class="glyphicon glyphicon-user" ></span> Bienvenido <?php echo $admin['nombre'] ?></a></li>
	</ul>
	</div>
</nav>
  

<div class="col-sm-10 col-sm-offset-1">
  <h2>Actualizar viaje</h2>
   	<?php
	while($viaje = mysqli_fetch_assoc($resultado1)){
		echo "<form method='POST' action='../modelo/ejecutarAbmViajes.php' class='col-sm-12'>
		<div class='form-group col-sm-offset-3 col-sm-6'>
		 <input type='text' name='id' class='hidden' value='".$viaje['id']."'><br>
		 
		 <input type='text' name='id_administrador' class='hidden' value='".$viaje['id_administrador']."'><br>
		<label>origen:</label>
		<input type='text' name='origen' class='form-control' value='".$viaje['origen']."'><br>
		<label>destino:</label>
		<input type='text' name='destino' class='form-control' value='".$viaje['destino']."'><br>
		<label>tipo_de_carga:</label>
		<input type='text' name='tipo_de_carga' class='form-control' value='".$viaje['tipo_de_carga']."'><br>
		<label>fecha_de_salida_prevista:</label>
		<input type='text' name='fecha_de_salida_prevista' class='form-control' value='".$viaje['fecha_de_salida_prevista']."'><br>
		<label>fecha_de_llegada_prevista:</label>
		<input type='text' name='fecha_de_llegada_prevista' class='form-control' value='".$viaje['fecha_de_llegada_prevista']."'>
		<label>tiempo_estimado:</label>
		<input type='text' name='tiempo_estimado' class='form-control' value='".$viaje['tiempo_estimado']."'><br>
		<label>fecha_de_salida_real:</label>
		<input type='text' name='fecha_de_salida_real' class='form-control' value='".$viaje['fecha_de_salida_real']."'><br>
		<label>fecha_de_llegada_real:</label>
		<input type='text' name='fecha_de_llegada_real' class='form-control' value='".$viaje['fecha_de_llegada_real']."'><br>
		<label>tiempo_real:</label>
		<input type='text' name='tiempo_real' class='form-control' value='".$viaje['tiempo_real']."'><br>
		<label>km_recorridos_previstos:</label>
		<input type='text' name='km_recorridos_previstos' class='form-control' value='".$viaje['km_recorridos_previstos']."'>
		<label>desviacion_km:</label>
		<input type='text' name='desviacion_km' class='form-control' value='".$viaje['desviacion_km']."'><br>
		<label>combustible_consumido_estimado:</label>
		<input type='text' name='combustible_consumido_estimado' class='form-control' value='".$viaje['combustible_consumido_estimado']."'><br>
		<label>combustible_consumido_real:</label>
		<input type='text' name='combustible_consumido_real' class='form-control' value='".$viaje['combustible_consumido_real']."'>
		
		
		 <input type='text' name='alterar' class='hidden' value='a'>
		 </div>
		 <div class='form-group col-sm-offset-3 col-sm-6''>
		 <button type='submit' class='btn btn-primary'>Modificar</button>
		 <a href='abmCliente.php'><button type='submit' class='btn btn-danger'>Regresar</button></a>
		 </div>
  		 </form>";
	}
   	?>
</div>