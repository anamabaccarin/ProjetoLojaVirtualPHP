<?php

include_once "funcoes.php";
/*echo "<pre>";
var_dump($_FILES);*/

$contadorInputVazio = 0;
foreach($_POST as $item){
    $item == ""?$contadorInputVazio++:0; //(if ternario)
}

if($contadorInputVazio == count($_POST)){  

echo "<h1> Você não enviou info sobre produto</h1>";
echo '<a class="btn btn-primary" href="cadastroProduto.php"> Voltar para cadastro!</a>';
exit;
}

$imgAceitas = ["image/png", "image/jpg", "image/jpeg"];
$erroEnvio = $_FILES['arquivo']['error'];
$nomeProduto=$_POST['nomeProduto'];
$precoProduto=$_POST['precoProduto'];
$descProduto=$_POST['descProduto'];
$nomeArquivo=$_FILES['arquivo']['name'];
$arquivoTmp=$_FILES['arquivo']['tmp_name'];
$caminhoImg="img/$nomeArquivo";
$typeFile=$_FILES['arquivo']['type'];

if($erroEnvio !== 0){  

    echo "<h1> Houve um erro no envio do arquivo, verifique!</h1>";
    echo '<a class="btn btn-primary" href="cadastroProduto.php"> Voltar para cadastro!</a>';
    exit;
    }   

if(array_search($typeFile, $imgAceitas) == false){
    echo "<h1> Extensão inválida, verifique se a extensão é do tipo png, jpg, jpeg</h1>";
    echo '<a class="btn btn-primary" href="cadastroProduto.php"> Voltar para cadastro!</a>';
    exit;
}

move_uploaded_file($arquivoTmp,"img/$nomeArquivo");

addProduto($nomeProduto,$precoProduto,$descProduto,$caminhoImg);
?>
