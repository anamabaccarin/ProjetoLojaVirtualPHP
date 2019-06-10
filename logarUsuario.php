<?php

include_once "funcoes.php";

$contadorInputVazio = 0;
foreach($_POST as $item){
    $item == ""?$contadorInputVazio++:0; //(if ternario)
}

$itensPost = is_array($_POST)?count($_POST):0;

if($contadorInputVazio == $itensPost){  

echo "<h1> Você não enviou info sobre usuario</h1>";
echo '<a class="btn btn-primary" href="login.php"> Voltar para cadastro de login!</a>';
exit;
}
$Usuarios = file_exists("Usuarios.json")? file_get_contents('Usuarios.json'):"";
$Usuarios = json_decode($Usuarios, true);

$email = $_POST['emailUsuario'];
$senha = $_POST['senhaUsuario'];

foreach($Usuarios['usuarios'] as $key => $usuario){
    if($usuario['email'] == $email){
        $usuarioExiste = $Usuarios['usuarios'][$key];
        break;
    }
}

if(isset($usuarioExiste) && password_verify($senha,$usuarioExiste['senha'])){

    header("Location:index.php");   

}else{
    echo "Email ou senha inválidos";
    echo '<a class="btn btn-primary" href="login.php"> Voltar para cadastro de login!</a>';
}