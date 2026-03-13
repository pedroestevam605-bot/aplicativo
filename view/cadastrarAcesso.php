<?php
    namespace Projeto\view;
    require_once('../model/Tarefas.php');
    require_once('../model/Cadastrar.php');
    use Projeto\model\Cadastrar;
    //Instanciar uma variável da classe pessoa 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Acesso</title>
</head>
<body>
    <h1>Cadastrar Acesso</h1>
    <br><br>
    <form method="POST">
    <label>Código: </label>
    <input type="text" name="codigo" id="codigo"/>
    <br>
    <label>nome: </label>
    <input type="text" name="nome" id="nome"/>
    <br>
    <label>email: </label>
    <input type="text" name="email" id="email"/>
    <br>
    <label>senha: </label>
    <input type="text" name="senha" id="senha"/>
    <br>
    <button>
        <?php
            try{
              $codigo        = $_POST['codigo'];
              $nome          = $_POST['nome'];
              $email         = $_POST['email'];
              $senha         = $_POST['senha'];
              
              
              //Instaciar a variável pessoa com dados
              $cadastrar = new Cadastrar($codigo, $nome, $email, $senha);

            }catch(Except $erro){
               echo "Algo deu errado!!! <br><br> $erro";
            }
         ?>
    </button>
    <?php
        echo $cadastrar->imprimir();
    ?>
</form>
<button><a href="index.php">Voltar</a></button>   

</body>
</html>