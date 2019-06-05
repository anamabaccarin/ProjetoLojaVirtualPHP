<?php 
include_once "funcoes.php";

function validarCompra($dadosCompras){
    $erros = [];
    if(!$dadosCompras){
        $erros[] = "Não foi recebido nenhum dado para realizar a compra!";
    }
    if(!validarNome($dadosCompras['nomeCliente'])){
        $erros[] = "Nome incorreto, verifique!";
    }
    if(!validarCPF($dadosCompras['cpfCliente'])){
        $erros[] = "CPF inválido!";
    }
    if(!validarCartao($dadosCompras['cartaoCliente'])){
        $erros[] = "Número de cartão incorreto";
    }
    if(!validarDataValidade($dadosCompras['dataValidadeCartao'])){
        $erros[] = "Validade incorreto";
    }
    if(!validarCVV($dadosCompras['cvvCartao'])){
        $erros[] = "Número de CVV inválido";
    }

    return $erros;
}
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "head.php";?>

<body>
    <?php include "header.php";?>
  
    <main class="container">
        <section class="row">
        <?php 
        $errosValidacao = validarCompra($_POST); // $erros = [];(da linha 6) é atribuído a $errosValidacao
        ?>
        <?php if(count($errosValidacao) > 0) : ?> 

        <div class="col-md-12">
        <!-- Exibir erros de cadastro-->
            <ul>
            <?php foreach($errosValidacao as $erro):?>
                <li> <?php echo $erro; ?></li>
            <?php endforeach;?>
            
            </ul>        
        </div>
            <?php else: ?>
            <div class="col-md-12"></div>
                <div class="alert alert-success" role="alert">
                    Olá <?php echo $_POST['nomeCliente']; ?> Parabéns pela compra do produto <?php echo $_POST['nomeProduto']; ?>
                </div>
            </div>
            <?php endif;?>
            <div class="col-md-12">
                <a href="index.php" class="btn btn-primary"> Voltar para home! </a>
            </div>  
        </section>
    </main>
</body>
</html>