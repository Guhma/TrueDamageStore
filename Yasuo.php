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
  hr{
    border-color: black;
  }

  #descricao1{
    margin-bottom: -15px;
  }

  iframe{
          width: 560px;
          height: 315px;
        }

      @media (min-width: 769px) {
        
        #compra{
          font-size: 30px;
        }
        #descricao {
          font-size: 25px;
        }
        #descricao1 {
          font-size: 20px;
        }
      }

      @media (max-width: 768px) {
        iframe{
          width: 100%;
          height:300px;
        }

        #inv{
          display: none;
        }

       #compra{
         position: fixed;
         bottom: 5%;
         right: 5%;
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
            <li><a href="sobre.php" class="text-white">Sobre</a></li>
            <li><a href="#" class="text-white">Twitter</a></li>
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
        <a target="_blank" href="https://www.youtube.com/watch?v=sVZpHFXcFJw" class="btn btn-secondary my-2">GIANTS</a>
      </p>
    </div>
  </section>

  <div class="album py-2 bg-light">
    <div class="container">
    <p><u><h2 class="text-center">Yasuo True Damage</u></h2></p>
  <hr>
      <img class="img-fluid" src="img/Yasuo_10.jpg">
 <hr>
     <div class="text-justify">
      <p id="descricao"> Tão enigmático quanto talentoso, Yasuo é o produtor veterano que todos procuram para encontrar inspiração. Suas batidas transcendem os gêneros, pintando universos inteiros com fantásticas texturas de som. Notoriamente seletivo em relação às suas colaborações, Yasuo vê o True Damage como sua plataforma para revolucionar como a sociedade vivência a música.
</p> 
  <hr>
      <div class="text-center">
      <h4>Demonstração:</h4>
      <iframe src="https://www.youtube.com/embed/kjba6GI5inw?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div class="text-center">
      <hr id="inv">
        <p>
      <a id="compra" href="CompraYasuo.php" class="btn btn-dark">Comprar (1350 RP)</a>
    </p>
    </div>
    </div>

</main>

<div class="text-muted">
  
    <p id="descricao1">Eduardo &amp; Gustavo Henrique, 2ºD, 2019.</p>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>