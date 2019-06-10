<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
    <?php include_once "header.php";?>

    <main class="container">
        <section class="row">
            <div class="col md-6">
                <form action="salvarUsuario.php " method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nomeUsuario">Nome do Usuário</label>
                        <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome do Usuário" name="nomeUsuario">
                    </div>
                    <div class="form-group">
                        <label for="emailUsuario">Email do Usuário</label>
                        <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="Email do Usuário">
                    </div>
                    <div class="form-group">
                        <label for="senhaUsuario">Senha</label>
                        <input type="password" class="form-control" name="senhaUsuario" id="senhaUsuario" name="senhaUsuario"> </input>
                    </div>
                    <div class="form-group">
                        <label for="nivelUsuario"> </label>
                        <select class="form-control" type="number" name="nivelUsuario" id="nivelUsuario"> 
                        <option value="0"> Administrador </option>
                        <option value="1"> Usuário </option>
                        </select>
                    </div>
                        <button class="btn btn-success" type="submit"> Finalizar cadastro </button>
                </form>            
            </div>
        </section>
    </main>

</body>
</html>