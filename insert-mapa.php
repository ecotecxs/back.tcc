<?php

$lat = $_GET['lat'];
$lon = $_GET['lon'];


include 'conexao.php';

$busca_mapa = "INSERT INTO `tb_sinalizacao` values ( NULL, $lat, $lon, NULL)";
$res_consulta = mysqli_query($conexao, $busca_mapa);

echo "Inserido com sucesso";
?>