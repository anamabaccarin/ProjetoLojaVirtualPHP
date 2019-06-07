<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
    <?php include_once "header.php";?>

    <main class="container">
        <section class="row">
            <div class="col md-6">
            <form action="salvarProduto.php " method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nomeProduto">Nome do Produto</label>
                        <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto" name="nomeProduto">
                    </div>
                    <div class="form-group">
                        <label for="precoProduto">Preço do Produto</label>
                        <input type="number" step="any" class="form-control" id="precoProduto" name="precoProduto" placeholder="Preço do Produto">
                    </div>
                    <div class="form-group">
                        <label for="nomeProduto">Descrição do Produto</label>
                        <textarea class="form-control" name= "descProduto"  id="descProduto" name="descProduto"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="imgProduto"> Imagem do Produto</label>
                        <input type="file" name="arquivo"  id="imgProduto"> </input>
                    </div>
                        
                        <button class="btn btn-success" type="submit"> Finalizar cadastro </button>
                    </form>            
            </div>
        </section>
    </main>

</body>
</html>