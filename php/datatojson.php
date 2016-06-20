<?php

error_reporting(E_ALL);

require_once '../inc/dbconfig.php';
$conexion = new Database();
$db = $conexion->dbConnection();
$sqlArticulo = "select id,titulo,texto_intro,fecha from blog";
$stmtArticulo = $db->prepare($sqlArticulo);
$stmtArticulo->execute();
$datos = array();

while ($fila = $stmtArticulo->fetch(PDO::FETCH_ASSOC)) {
    $sqlCategoria = "select id_categoria, categoria from articulo inner join categorias_blog on articulo.id_categoria = categorias_blog.id where id_articulo=" . $fila['id'];
    $stmtCategoria = $db->prepare($sqlCategoria);
    $stmtCategoria->execute();
    while ($categoria = $stmtCategoria->fetch(PDO::FETCH_ASSOC)) {
        $fila['categoria'][] = $categoria['categoria'];
    }
    $datos["articulos"][] = $fila;
}

$sqlCategoria = "select id, categoria from categorias_blog";
$stmtCategoria = $db->prepare($sqlCategoria);
$stmtCategoria->execute();

while ($fila = $stmtCategoria->fetch(PDO::FETCH_ASSOC)) {
    $datos['categorias'][] = $fila;
}
echo json_encode($datos);
?>
