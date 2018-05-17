<?php 	
extract($_POST);
//declaracion de variables
$costo_evento=100;
$costo_curso=80;
$costo_taller=10;

$lista_tipo[1]="Docente";
$lista_tipo[2]="Estudiante";
$lista_tipo[3]="Otro";

$lista_tipo[$tipo];

$costo_total;

$suma_taller=0;

$tipo;

	switch ($lista_tipo[$tipo]) {
		case 'Docente':
				echo sumaTalleres;
			break;

		case 'Estudiante':
			# code...
			break;
			
		case 'Otro':
			# code...
			break;
	}

function sumaTalleres() {

//empty permite verificar si se a seleccionado un valor
  	if ($html==1) {
			echo $suma_taller+=1;
	}

	if (isset($css)) {
			$suma_taller+=1;
	}

	if (isset($visual)) {
			$suma_taller+=1;
	}

	if (isset($cocina)) {
			$suma_taller+=1;
	}

	echo $suma_taller;
	return $suma_taller;
}

 ?>