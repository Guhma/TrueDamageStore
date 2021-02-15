<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/jpeg" href="img/icone.jpg">
    <title>True Damage Store</title>
  </head>
  <body>
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

#headerPopup{
  width:75%;
  margin:0 auto;
}

#headerPopup iframe{
  width:100%;
  margin:0 auto;
}

      @media (max-width: 768px) {
     .card-img-top{
       display: none;
     }
     .card{
       text-align: center
     }
        }



    </style>
    
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Sobre</h4>
          <p class="text-muted">Uma nova maneira de adquirir suas skins no League of Legends. Ao realizar uma compra, você recebe um código gerado que contém todos os itens, para habilitá-los de uma só vez. Experimente!</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Sites Oficiais:</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Twitter</a></li>
            <li><a href="#" class="text-white">Facebook</a></li>
            <li><a href="https://br.leagueoflegends.com" class="text-white">Site Oficial</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="home.php" class="navbar-brand d-flex align-items-center">
        <img src="img/icone.jpg" width="30px" height="30px">
        <strong style="padding-left:10px">TRUE DAMAGE STORE</strong>
      </a>
      <?php
      session_start();
    if(isset($_SESSION['usu_sessao'])){
      echo "<p style='color:white'>Olá, bem-vindo ", $_SESSION["usu_sessao"],".","</p>";
      echo "<a class='btn btn-danger' href='logout.php'>Sair</a>";
    }
    else{
      echo"<p style='color:white;'>Olá, faça login.</p>";
      echo"<a class='btn btn-warning' href='login.php'>Login</a>";
    }
      ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main role="main">

  <section class="text-center bg-dark" style="height:auto">
    <div class="container">
      <h1 class="jumbotron-heading text-white">True Damage</h1>
      <p class="lead text-white">Uma nova banda virtual surge assim que Akali, rapper principal de K/DA, reúne grandes nomes musicais para um show de hip-hop.</p>
      <p>
        <a href="https://www.youtube.com/watch?v=UOxkGD8qRB4" class="btn btn-secondary my-2">GIANTS</a>
      </p>
    </div>
  </section>

  <div id="centro" class="album py-5 bg-light">
    <div  class="container">

<div class="card-deck">
    <div class="card" style="width: 18rem;">
  <img src="img/Qiyana_2.jpg" class="card-img-top" alt="Qiyana True Damage">
  <div class="card-body">
    <a href="Qiyana1.php"><h5 class="card-title">Qiyana True Damage</h5></a>
    <p class="card-text">Um novo visual para a Imperatriz dos Elementos!</p>
    <a href="Qiyana1.php" class="btn btn-primary">1350 RP (R$25)</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="img/Akali_13.jpg" class="card-img-top" alt="Qiyana True Damage">
  <div class="card-body">
    <a href="akali.php"><h5 class="card-title">Akali True Damage</h5></a>
    <p class="card-text">Um novo visual para a Assassina Renegada!</p>
    <a href="akali.php" class="btn btn-primary">1350 RP (R$25)</a>
  </div>
  </div>
    </div>
    <br>
    <div class="card-deck">

    <div class="card" style="width: 18rem;">
  <img src="img/Qiyana2.jpg" class="card-img-top" alt="Qiyana True Damage Prestigiosa">
  <div class="card-body">
    <a href="Qiyana2.php"><h5 class="card-title">Qiyana True Damage Edição de Prestígio</h5></a>
    <p class="card-text">Um novo visual prestigioso para a Imperatriz dos Elementos!</p>
    <a href="Qiyana2.php" class="btn btn-primary">2000 Emblemas do Mundial (R$375)</a>
  </div>
  </div>
    
  <div class="card" style="width: 18rem;">
  <img src="img/Ekko_4.jpg" class="card-img-top" alt="Ekko True Damage">
  <div class="card-body">
    <a href="Ekko.php"><h5 class="card-title">Ekko True Damage</h5></a>
    <p class="card-text">Um novo visual lendário para o Garoto que Estilhaçou o Tempo!</p>
    <a href="Ekko.php" class="btn btn-primary">1820 RP (R$35)</a>
  </div>
  </div>

</div>
<br>
<div class="card-deck">

<div class="card" style="width: 18rem;">
  <img src="img/Senna_1.jpg" class="card-img-top" alt="Senna True Damage">
  <div class="card-body">
    <a href="Senna.php"><h5 class="card-title">Senna True Damage</h5></a>
    <p class="card-text">Um novo visual para a Redentora!</p>
    <a href="Senna.php" class="btn btn-primary">1350 RP (R$25)</a>
  </div>
  </div>

  <div class="card" style="width: 18rem;">
  <img src="img/Yasuo_10.jpg" class="card-img-top" alt="Yasuo True Damage">
  <div class="card-body">
    <a href="Yasuo.php"><h5 class="card-title">Yasuo True Damage</h5></a>
    <p class="card-text">Um novo visual para o Exilado!</p>
    <a href="Yasuo.php" class="btn btn-primary">1350 RP (R$25)</a>
  </div>
  </div>


</div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
    <h5>Site tercerizado, não relacionado diretamente à Riot Games. Todos os personagens e skins citados no site são de autoria e direito da Riot Games.</h5>
    <h5>Eduardo &amp; Gustavo Henrique, 2ºD, 2019.</h5>
  </div>
</footer>

    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>