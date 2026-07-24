<?php
// Definimos los datos de Compras por mes
mysqli_query($con, "SET lc_time_names = 'es_ES'");

$query = "SELECT DATE_FORMAT(fecha, '%M') AS mes, SUM(total) as total FROM compras
WHERE MONTH(fecha) != MONTH(NOW()) AND MONTH(fecha) >= MONTH(NOW()) - 6
GROUP BY MONTH(fecha)";
$resCompra = mysqli_query($con, $query);
$datosCompra = array(
    array('Mes', 'Compras')
);

if ($resCompra) {
    while ($row = mysqli_fetch_assoc($resCompra)) {
        array_push($datosCompra, array($row['mes'], (float) $row['total']));
    }
}

// Conteo de compras totales
$query = "SELECT COUNT(DISTINCT c.codigo) AS num FROM compras c JOIN proveedores p ON c.idproveedor = p.id;";
$resNumCompras = mysqli_query($con, $query);
$rowNumCompras = $resNumCompras ? mysqli_fetch_assoc($resNumCompras) : ['num' => 0];

// Conteo de proveedores
$query = "SELECT COUNT(id) AS num FROM proveedores;";
$resNumProveedores = mysqli_query($con, $query);
$rowNumProveedores = $resNumProveedores ? mysqli_fetch_assoc($resNumProveedores) : ['num' => 0];

// Conteo de insumos
$query = "SELECT COUNT(id) AS num FROM insumos;";
$resNumInsumos = mysqli_query($con, $query);
$rowNumInsumos = $resNumInsumos ? mysqli_fetch_assoc($resNumInsumos) : ['num' => 0];

// Conteo de usuarios
$query = "SELECT COUNT(id) AS num FROM usuarios;";
$resNumUsuarios = mysqli_query($con, $query);
$rowNumUsuarios = $resNumUsuarios ? mysqli_fetch_assoc($resNumUsuarios) : ['num' => 0];

// Total compras del mes actual
$query = "SELECT SUM(total) AS total FROM compras WHERE MONTH(fecha) = MONTH(NOW()) AND YEAR(fecha) = YEAR(NOW());";
$resActual = mysqli_query($con, $query);
$rowActual = $resActual ? mysqli_fetch_assoc($resActual) : ['total' => 0];

require 'views/inicio.view.php';
