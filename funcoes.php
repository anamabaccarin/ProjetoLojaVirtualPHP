<?php

function logarUsuario($nome, $nivelDeAcesso){
    $usuario = ["logado"=> true, "nome"=> $nome, "nivelAcesso"=>$nivelDeAcesso];
    return $usuario;
}

function addProduto($nome, $descricao, $preco, $img){
    $jsonProdutos = file_get_contents('Produtos.json');
    $produtos = json_decode ($jsonProdutos, true);
    //$produtos = $produtos['Produtos'];

    $chave = count($produtos['Produtos']) + 1;
    $novoProduto = ["id"=>"produto$chave", 'nome'=>$nome, 'descricao'=>$descricao, 'preco'=> $preco, 'img'=> $img];
    
    $produtos["Produtos"][]=$novoProduto;

    $jsonProdutos = json_encode($produtos); 

    file_put_contents('Produtos.json', $jsonProdutos);
    return true;
}

function validarNome($nome){
    return $nome != "" && strlen($nome) >= 3;
 }

 function validarCPF($cpf){
     return is_integer($cpf) && count($cpf) == 11; 
 } 

 function validarCartao($nrnCartao){
     return is_integer($nrnCartao) && count($nrnCartao) == 16;
 }

 function validarDataValidade ($dataValidade){
     return $dataValidade > date('y-m-d');
 }

 function validarCVV($cvv){
     return is_integer($cvv) && count($cvv) == 3;
 }