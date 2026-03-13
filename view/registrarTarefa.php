<?php
    namespace Projeto\view;
    require_once('../model/Tarefas.php');
    use Projeto\model\Tarefas;
    //Instanciar uma variável da classe pessoa 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar de Tarefas</title>
</head>
<body>
    <h1>Registrar de Tarefas</h1>
    <br><br>
    <form method="POST">
    <label>Código: </label>
    <input type="text" name="codigo" id="codigo"/>
    <br>
    <label>tarefas01: </label>
    <input type="text" name="tarefas01" id="tarefas01"/>
    <br>
    <label>horario: </label>
    <input type="text" name="horario" id="horario"/>
    <br>
    <label>dia: </label>
    <input type="text" name="dia" id="dia"/>
    <br>
    <label>descricao: </label>
    <input type="text" name="descricao" id="descricao"/>
    <br>
    <label>status: </label>
    <input type="text" name="status" id="status"/>
    <br>
    <button type="submit">Salvar
        <?php
            try{
              $codigo        = $_POST['codigo'];
              $tarefas01     = $_POST['tarefas01'];
              $horario       = $_POST['horario'];
              $dia           = $_POST['dia'];
              $descricao     = $_POST['descricao'];
              $status        = $_POST['status'];
              
              //Instaciar a variável pessoa com dados
              $tarefa = new Tarefas($codigo, $tarefas01, $horario, $dia, $descricao, $status);

            }catch(Except $erro){
               echo "Algo deu errado!!! <br><br> $erro";
            }
         ?>
    </button>
    <?php
        echo $tarefa->imprimir();
    ?>
</form>
<button><a href="index.php">Voltar</a></button>   

</body>
</html>