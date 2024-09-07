<?php

$lat = $_GET['lat'];
$lon = $_GET['lon'];


include_once("conexao.php");

$busca_mapa = "INSERT INTO `bem` (`id`, `nome`, `ativo`, `latitude`, `longitude`, `data`, `hora`, `endereco`) VALUES (NULL, 'Jose Carlos', 'Sim', '$lat', '$lon', NULL, NULL, 'ana pires');";
$res_consulta = mysqli_query($conn, $busca_mapa);

?>