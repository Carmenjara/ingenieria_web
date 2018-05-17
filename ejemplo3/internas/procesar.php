<!--en codigo PHP no hace falta cerrar etiquera php-->	

<?php 
//extract($_POST) //para enviar todo el contenido de las variables
//para crear variable de hace con signo $ion de variables
extract($_POST);
//Declaracion de variables; en php no hay problema al momenti de multiplicar string o numeros se centra en el contenido
//$var1=2;
//$var2="3";
//$res=$var1*$var2;

$fecha_actual="10/05/2018";
		//algoritmo para calcular la edad
		$tiempo=strtotime($fecha_nacimiento);
		//toma tiempo del sistema
		$ahora=time();
		$edad=($ahora-$tiempo)/(60*60*24*365.25);
		//floor permite redondear decimales
		$edad= floor($edad);

print "<br>Ud tiene: ".$edad." años de edad <br><br>";
echo "Su edad es de: ".$edad." años <br><br>";

//Algoritmo para determinar si es o no mayor de edad
if($edad>=18){
	echo "Usted es mayor de edad <br><br>";
}else{
	echo "Usted es menor de edad <br><br>";
}

//echo "El resultado de la multiplicacion es:".$res."<br>";
echo "Hola es este e smi primer ejemplo con PHP <br> Bienvenida: ".$nombres." ".$apellidos."<br><br>";

//TRabajar con listas
$lista1[0]="Docente";
$lista1[1]="Estudiante";
$lista1[2]="Abogado";
$lista1[3]="Ingeniero";
$lista1[4]="Doctor";
$lista1[5]="Policia";

//Bucle
for ($i=0; $i < count($lista1); $i++) { 
	print "Lista:".$i." ".$lista1[$i]."<br><br>";
}

?>