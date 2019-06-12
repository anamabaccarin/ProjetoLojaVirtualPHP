<?php
session_start();
function logarUsuario($nome, $nivelDeAcesso){
    $usuario = ["logado"=> true, "nome"=> $nome, "nivelAcesso"=>$nivelDeAcesso];
    $_SESSION['usuario'] = $usuario;//sessao void: nao retorna nada, mas gera resulato
   // return $usuario;// nao precisa mais do return
}

function addProduto($nome, $descricao, $preco, $img){
    $jsonProdutos = file_get_contents('Produtos.json');
    $produtos = json_decode ($jsonProdutos, true);
    //$produtos = $produtos['Produtos'];

    $itensUsuarios = is_array($Usuarios['usuarios'])?count($usuarios['usuarios']):0;
    $chave = $itensUsuarios + 1;
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

 function addUsuario($nomeUsuario, $emailUsuario, $senhaUsuario, $nivelUsuario){
    $jsonUsuarios=file_exists("Usuarios.json")? file_get_contents('Usuarios.json'):"";
    $Usuarios=json_decode ($jsonUsuarios, true);//(json_decode/true) transforma em array associativo, pois pp nao le jason diretamente
    //$produtos = $produtos['Produtos'];

    $chave=count($Usuarios['usuarios']) + 1;// contar quantos usuarios exstem e adicionando mais um
    $novoUsuario = ["id"=>"usuario$chave", 'nome'=>$nomeUsuario, 'email'=>$emailUsuario, 'senha'=> $senhaUsuario, 'nivelUsuario'=> $nivelUsuario];
    
    $Usuarios['usuarios'][] = $novoUsuario; //gerando array dentro de array.

    $jsonUsuarios = json_encode($Usuarios); 

    
    return file_put_contents('Usuarios.json', $jsonUsuarios);
}