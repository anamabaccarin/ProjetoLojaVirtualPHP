<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
    <?php include_once "header.php";?>

    <main class="container">
        <section class="row">
            <div class="col md-6">
            <form action="logarUsuario.php" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="emailUsuario">Email do Usuário</label>
                        <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="Email do Usuário">
                    </div>
                    <div class="form-group">
                        <label for="senhaUsuario">Senha</label>
                        <input type="password" class="form-control" name="senhaUsuario" id="senhaUsuario" name="senhaUsuario"> </input>
                    </div> 
                        <button class="btn btn-success" type="submit"> Logar </button>                                         
                        <a class="btn btn-primary" href="cadastroUsuario.php"> Cadastre-se!</a>   
            </form>            
            </div>
        </section>
    </main>

</body>
</html>