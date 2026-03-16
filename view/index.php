<?php
    namespace Projeto\view;
    require_once("../model/Cadastrar.php");
    use Projeto\model\Cadastrar;
    
    session_start();
    $codigo = $_SESSION['codigo'];
    $nome   = $_SESSION['nome'];
    $email  = $_SESSION['email'];
    $senha  = $_SESSION['senha'];
    //Instaciar a variável pessoa com dados
    $cadastrar = new Cadastrar($codigo, $nome, $email, $senha);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Página Inicial</h1> 
    <body>
    <form method="POST">
    <label>email: </label>
    <input type="text" name="email" id="email"/>
    <br>
    <label>senha: </label>
    <input type="text" name="senha" id="senha"/>
    <br>
    <button>Login
    <?php
        $usuario = $_POST['email'];
        $senhaDi = $_POST['senha'];


        $resultado = $cadastrar->validarSenha($usuario, $senha);
    ?>
    </button>
    </form> 
    <?php
        if($resultado == true){
            echo "Bem-Vindo!";
        }else{
            echo "Senha e/ou usuário inválidos";
        }
    ?>
    <button><a href="cadastrarAcesso.php">Cadastro</a></button>
        

</body>
</html>
</body>
</html>