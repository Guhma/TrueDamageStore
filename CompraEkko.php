
<html lang="pt-br">
<head>
<title>Cadastro</title>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-repeat: no-repeat; background-size: cover; background-image: url('img/Ekko_4.jpg')">
<div class="container card" style="opacity:0.9; width:80%; margin-right:auto; margin-left:auto; margin-top: 5%">
  <center><img class="px-0" style="margin-top:1%" src="img/TD.jpg" width="315px"></center>
<h4 class="text-secondary text-center" style="padding-top:10px; vertical-align: middle;">Comprando: Ekko True Damage (R$35)</h4>
<form method="post">
<div class="row">
    <div class="col">
    <label>Nome</label>
      <input type="text" class="form-control" placeholder="Luxanna" name="nome" required>
    </div>
    <div class="col-4">
    <label>Sobrenome</label>
      <input type="text" class="form-control" placeholder="Stemmaguarda" name="sobrenome" required>
    </div>
    <div class="col">
    <label>Data de Nascimento</label>
      <input type="date" class="form-control" placeholder="Data de Nascimento" name="datanasc" required>
    </div>
    <div class="col-2">
    <label>CPF</label>
      <input type="text" maxlength="11" class="form-control" placeholder="12345678901" name="CPF" required>
    </div>
  </div>
  <br>
  <div class="row">
  <div class="col">
  <label>Nº do cartão</label>
  <input type="text" maxlength="12" class="form-control" placeholder="123456789123" name="ncartao" required>
  </div>
  <div class="col">
  <label>Data de Vencimento</label>
  <input type="month" class="form-control" name="vencimento" required>
  </div>
  <div class="col-2">
  <label>CVV</label>
  <input type="password" maxlength="3" name="cvv" class="form-control" placeholder="***" required>
  </div>
  <div class="col-2">
  <label>DDD</label>
  <input type="text" name="ddd" class="form-control" maxlength="2" placeholder="11" required>
  </div>
  <div class="col">
  <label>Número</label>
  <input type="text" maxlength="9" class="form-control" name="tel" placeholder="934378211" required>
  </div>
  </div>
  <br>
  <div class="text-center">
  <button type="submit" class="btn btn-success" name="acao" value="Comprar">Comprar</button>
  </div>
</form>
</div>
<br>
<div class="container-fluid text-white bg-secondary fixed-bottom text-right">
Eduardo &amp; Gustavo Almeida, 2019
</div>


<?php
  session_start();
  if(isset($_SESSION['usu_sessao'])){
    echo "<a class='btn btn-danger' href='logout.php' style='color:white; position: relative; left: 48%;'>Sair</a>";
  }
  else{
    header("location: login.php");
  }

include("conexao.php");
@$usuario=$_SESSION['usu_sessao'];
@$nome=$_POST['nome'];
@$sobrenome=$_POST['sobrenome'];
@$datanasc=$_POST['datanasc'];
@$CPF=$_POST['CPF'];
@$ncartao=$_POST['ncartao'];
@$datavenc=$_POST['vencimento'];
@$cvv=$_POST['cvv'];
@$ddd=$_POST['ddd'];
@$numero=$_POST['tel'];
@$acao=$_POST['acao'];


switch ($acao) {
  case 'Comprar':
    mysqli_query($con, "UPDATE usuario SET nome='$nome' WHERE usuario='$usuario'");
mysqli_query($con, "UPDATE usuario SET sobrenome='$sobrenome' WHERE usuario='$usuario'");
mysqli_query($con, "UPDATE usuario SET datanasc='$datanasc' WHERE usuario='$usuario'");
mysqli_query($con, "UPDATE usuario SET cpf='$CPF' WHERE usuario='$usuario'");
mysqli_query($con, "UPDATE usuario SET ncartao='$ncartao' WHERE nome='$usuario'");
mysqli_query($con, "UPDATE usuario SET cvv='$cvv' WHERE usuario='$usuario'");
mysqli_query($con, "UPDATE usuario SET dataval='$datavenc' WHERE usuario='$usuario'");
mysqli_query($con, "UPDATE usuario SET ddd='$ddd' WHERE usuario='$usuario'");
mysqli_query($con, "UPDATE usuario SET telefone='$numero' WHERE usuario='$usuario'");

    header("location: gerarkey.php");
    break;
  
}

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>