<?php
$nome = $_POST['nome'];
$senha = $_POST['senha'];

include 'conexao.php';

$select = "SELECT * FROM tb_user WHERE login = '$nome'";

$query = mysqli_query($conexao, $select);

$result = mysqli_fetch_array($query);

$name_banco = $result ['nome'];
$senha_banco = $result ['senha'];

if ($nome == $name_banco && $senha == $senha_banco){
    header('location: home.html');
}
else {
    echo "<script>alert('Usuário ou Senha incorretos'); history.back();</script>";
}

?>