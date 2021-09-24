<?php
echo "lecturas de sensor Para temperaturA <br>";


$codigo = $_GET['cod'];



//echo "El sensor tiene la siguiente lectura : ".$lectura."<br>";

$usuario = "root";
$contrasena = "admin";
$servidor = "localhost:3306";

$basededatos = "Proyecto3";


$enlace = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);

if (!$enlace) {
	echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
			
}

echo 'Éxito... ' . mysqli_get_host_info($enlace) . "\n";

$db = mysqli_select_db( $enlace, $basededatos ) or die ( "No se ha podido seleccionar la base de datos" );


//$consulta = "INSERT INTO tarjeta(codigo,nombre) VALUES ($codigo,'sin Asignar');";

$consulta = "SELECT nombre FROM tarjeta where codigo=$codigo;";
//$resultado = mysqli_query( $enlace, $consulta );
$resultado = mysqli_query( $enlace, $consulta );
     $exite="no";
    //echo "exixte un dato    ";
    while ($fila = $resultado->fetch_row()) {
       // printf ("%s\n", $fila[0]);
        $exite="si";
    }

    //  echo $exite;


    if($exite=="si"){


 echo "ya exixte en la base de datos";

    }
    else{
       $consulta2 = "INSERT INTO tarjeta(codigo,nombre) VALUES ($codigo,'sin Asignar');";
       $resultado = mysqli_query( $enlace, $consulta2 );

    }
mysqli_close($enlace);


?>