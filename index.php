<?php
$usuario = ["logado"=> true, "nome" => "Ana Baccarin", "nivelAcesso" => 0]; 
//$usuario = "";

$produtos = [
    "produto1" => ["nome" => "Curso Fullstack", "descricao" => "Para aprender programação", "preco" => 1200, "img" => "./img/imagem1.jpg"],
    "produto2" => ["nome" => "Curso Mobile", "descricao" => "Para aprender a fazer apps", "preco" => 1400, "img" => "./img/imagem1.jpg"],
    "produto3" => ["nome" => "Curso ABC", "descricao" => "Para aprender a fazer ABC", "preco" => 1400, "img" => "./img/imagem1.jpg"],
    "produto4" => ["nome" => "Curso EFG", "descricao" => "Para aprender a fazer EFG", "preco" => 1400, "img" => "./img/imagem2.jpg"]
     ];

    $categorias = ["Cursos", "Categorias", "Artigos", "Foruns", "Códigos"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cursos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <?php if(isset($usuario) && $usuario != "" && $usuario ['logado']): ?>

        <?php if($usuario['nivelAcesso'] == 0): ?>
            <li class="nav-item active">
               <a class="nav-link" href="#"> Ações <span class="sr-only">(current)</span></a>
            </li>
        <?php else: ?>
            <li class="nav-item active">
               <a class="nav-link" href="#"> Perfil <span class="sr-only">(current)</span></a>
            </li>
        <?php endif; ?>
            <li class="nav-item">
               <a class="nav-link" href="#"> Olá <?php echo $usuario['nome'];?></a>
            </li>
        <?php else: ?>
            <li class="nav-item">
               <a class="nav-link" href="#"> Login </a>
            </li>
        <?php endif; ?>
    </ul>
  </div>
</nav>
<nav>
<ul class="row mt-3 justify-content-center"> 
<?php foreach ($categorias as $categoria):?>
<li class="col-md-2"><?=$categoria?> </li>
    <?php endforeach; ?>

<ul/>
</nav>
</header>

<main class="container mt-5">
    <section class="row">
    <!--Coluna para segurar Card-->
        <?php   foreach($produtos as $chave=>$value) : ?>
        <div class="col-md-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $value ["img"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo $value ["nome"]; ?></h5>
                  <p class="card-text"> <?php echo $value ["descricao"]; ?></p>
                  <h4  class="text-success">R$ <?php echo $value ["preco"]; ?></h4>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $chave; ?>"> Comprar </button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
</main>
<!-- Modal -->
<?php   foreach($produtos as $chave=>$produto):?> 
<div class="modal fade" id="<?php echo $chave; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Produto: ,?php echo $produto("nome"); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <form>
        <div class="form-group">
            <input type="text" name="nomeCliente" placeholder="Nome Completo">
        </div>
        <div class="form-group">
            <input type="number" name="cpfCliente" placeholder="CPF">
        </div>
        <div class="form-group">
            <input type="number" name="cartaoCliente" placeholder="Cartão de Crédito">
        </div>   
        <div class="form-group">
            <input type="date" name="dataValidadeCartao" placeholder="Data de Validade do Cartão de Crédito">
        </div>  
        <div class="form-group">
            <input type="number" maxlength="3" name="cvvCartao" placeholder="CVV do Cartão">
        </div> 
            </form>
        </div>
        <div class="modal-footer"> </div>
        <div class="text-primary"> Preço Total: R$ <?php echo $produto["preco"];?>
            <button type="button" class="btn btn-success">Finalizar compra</button>
        </div>
      </div>
    </div>
</div>
<?php endforeach; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>