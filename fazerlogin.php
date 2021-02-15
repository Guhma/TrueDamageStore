<?php
include("conexao.php");

$sql = mysqli_query($con,"select * from usuario where usuario='".$_POST['usuario']."' and senha='".$_POST['senha']."' limit 1");
$linhas = mysqli_num_rows($sql);

if($linhas == ''){
    echo "<script>alert('Usuário não encontrado ou usuário e senha incorretos.')
      ;history.back()</script>";
}
else{
    while($dados=mysqli_fetch_assoc($sql)){
    session_start();
    $_SESSION['usu_sessao'] = $dados['usuario'];
    header("location: home.php");
    }
}
?>