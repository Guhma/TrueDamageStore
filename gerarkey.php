<html lang="pt-br">
<head>
<title>Login</title>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-repeat: no-repeat; background-size: cover">
<div class="container card" style="opacity:0.9; width:350px; margin-right:auto; margin-left:auto; margin-top: 10%">
  <center><img class="px-0" style="margin-top: 3%" src="img/TD.jpg" width="315px"></center>
<h3 class="text-secondary text-center" style="padding-top:10px; vertical-align: middle;">Obrigado por comprar conosco!</h3>
<h4 class="text-secondary text-center" style="padding-top:10px; vertical-align: middle;">Use a key abaixo para ativação:</h4>
<h2 id="key" class="text-center"></h2>
<script>
    var cod = 'JGKM-MJBN' + Math.floor(Math.random() * 1000-9999);

    document.getElementById('key').innerHTML = cod;
    </script>

</div>
<br>
<?php
session_start();
if(isset($_SESSION['usu_sessao'])){
  echo "<a class='btn btn-success' href='home.php' style='color:white; position: relative; left: 48%;'>Voltar</a>";
}
else{
  header("location: login.php");
}
?>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>