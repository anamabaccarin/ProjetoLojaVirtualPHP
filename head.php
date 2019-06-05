<?php

include_once "funcoes.php";

$usuario= logarUsuario("Ana Baccarin", 1);
$usuario = ["logado"=> true, "nome" => "Ana Baccarin", "nivelAcesso" => 0]; 
//$usuario = "";

$jsonProdutos = file_get_contents('Produtos.json');
$produtos = json_decode ($jsonProdutos, true);
$produtos = $produtos['Produtos'];

addProduto("Curso Mobile Android", "Curso para criar app", 2200, "img/imagem1.jpg");
$categorias = ["Cursos", "Categorias", "Artigos", "Foruns", "Códigos"];

/* ANTES DE TER JSON(linha 9 até 12) , USAMOS ESSA ESTRUTURA:
$produtos = [
    "produto1" => ["nome" => "Curso Fullstack", "descricao" => "Para aprender programação", "preco" => 1200, "img" => "./img/imagem1.jpg"],
    "produto2" => ["nome" => "Curso Mobile", "descricao" => "Para aprender a fazer apps", "preco" => 1400, "img" => "./img/imagem1.jpg"],
    "produto3" => ["nome" => "Curso ABC", "descricao" => "Para aprender a fazer ABC", "preco" => 1400, "img" => "./img/imagem1.jpg"],
    "produto4" => ["nome" => "Curso EFG", "descricao" => "Para aprender a fazer EFG", "preco" => 1400, "img" => "./img/imagem2.jpg"]
     ];

$produtos = addProduto("Curso X", "Curso inédito", 2000, 'img/imagem2.jpg',$produtos);
*/
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>