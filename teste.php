<?php

echo "Olá" . " " .$_POST['nome'] . " " .$_POST['sobrenome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="teste.php">
    <input type="text" name="nome">  
    <input type="text" name="sobrenome">  
    <button type="submit"> Enviar </button> </form>

</body>
</html>