
<html lang="pt-br">
<head>
<title>Cadastro</title>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-repeat: no-repeat; background-size: cover">
<div class="container card" style="opacity:0.9; width:350px; margin-right:auto; margin-left:auto; margin-top: 10%">
  <center><img class="px-0" style="margin-top: 3%" src="img/TD.jpg" width="315px"></center>
<h3 class="text-secondary text-center" style="padding-top:10px; vertical-align: middle;">True Damage Store</h3>
<form method="post">
  <div class="form-group">
    <label>Usuário</label>
    <input type="text" class="form-control" id="user" style="width: 300px" name="usuario" placeholder="Digite aqui seu nome de usuário." required>
  </div>
  <div class="form-group">
    <label>Senha</label>
    <input type="password" class="form-control" id="password" name="senha" style="width: 300px" placeholder="Digite aqui sua senha" required>
    <small><a href="login.php">Já é cadastrado?</a></small><br>
  </div>
  <button type="submit" name="acao" value="Cadastrar" class="btn btn-primary">Cadastrar</button>
</form>
<a class="btn btn-success text-center" name="acao" value="Sem login" href="login.php" style="width:97px">Login</a>
<br>
</div>
<div class="container-fluid text-white bg-secondary fixed-bottom text-right">
Eduardo &amp; Gustavo Almeida, 2019
</div>
<script>
var modelo = [
  "url(img/Qiyana_2.jpg)",
  "url(img/Qiyana2.jpg)",
  "url(img/Ekko_4.jpg)",
  "url(img/Akali_13.jpg)",
  "url(img/Yasuo_10.jpg)"
];

var size = modelo.length;
var x = Math.floor(size*Math.random());
document.body.style.backgroundImage=modelo[x];
</script>

<?php
include("conexao.php");
@$usuario=$_POST['usuario'];
@$senha=$_POST['senha'];
@$acao=$_POST['acao'];

switch($acao){
    case"Cadastrar":
      echo "<script>alert('Dados enviados com sucesso')
      ;history.back()</script>";
      mysqli_query($con,"INSERT INTO usuario (usuario,senha) values ('$usuario','$senha')");
    break;

    case"Login":
        header("location: Login.php");
    }
  
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>