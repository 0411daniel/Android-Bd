<?php$hostname = 'localhost';
$database = 'tablas';
$username = 'root0411';
$password = '123';

// Crear conexión
$conexion = newmysqli($hostname, $username, $password, $database);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

echo"Conectado exitosamente";

// Cerrar conexión$conexion->close();
?>