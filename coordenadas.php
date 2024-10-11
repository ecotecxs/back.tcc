<?php

include 'conexao.php';
mysqli_set_charset($conn, 'utf8');
header('Content-type: application/json');

$busca_mapa = "SELECT * FROM tb_sinalizacao";
$res_consulta = mysqli_query($conexao, $busca_mapa);
$data = array();

while ($row = mysqli_fetch_assoc($res_consulta)) {
	$data[] = $row;
}

echo json_encode($data, JSON_PRETTY_PRINT);
mysqli_close($conexao);
