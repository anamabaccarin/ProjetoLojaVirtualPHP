<?php 

include_once "funcoes.php";

$contadorInputVazio = 0;
foreach($_POST as $item){
    $item == ""?$contadorInputVazio++:0; //(if ternario)
}

$itensPost = is_array($_POST)?count($_POST):0;

if($contadorInputVazio == $itensPost){  

echo "<h1> Você não enviou info sobre usuario</h1>";
echo '<a class="btn btn-primary" href="cadastroUsuario.php"> Voltar para cadastro de usuario!</a>';
exit;
}

$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = password_hash($_POST['senhaUsuario'], PASSWORD_DEFAULT);
$nivelUsuario = $_POST['nivelUsuario'];

if(addUsuario($nomeUsuario,$emailUsuario,$senhaUsuario,$nivelUsuario)){
    echo '<h1> Usuario cadastrado com sucesso </h1>';
    echo '<a class="btn btn-primary" href="login.php"> Ir para pagina de login!</a>';
}else{
    echo '<h1> Erro ao salvar. Tente novamente </h1>';
    echo '<a class="btn btn-primary" href="cadastroUsuario.php"> Voltar para cadastro de usuario!</a>';
}
