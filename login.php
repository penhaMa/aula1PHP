<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Login</h1>

    <form method = "POST">

        <?php include 'verificarLogin.php';?>
    
        <br><br>
        <label>Login: </label>   
        <input type="text" id="login" name="login"/><br><br>

        <label>Senha: </label>   
        <input type="number" id="senha" name="senha"/><br><br>

        <button> Entrar
        <?php
            $login = $_POST['login'];
            $senha = $_POST['senha'];
        ?>
        </button>

        <br><br>
        <!--Área de Texto-->
        <textArea rows="5" cols="20" readonly>
            
            <?php 
                echo coletar();
            ?>

        </textArea>
    </form>
</body>
</html>
