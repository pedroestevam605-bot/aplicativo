<?php
require_once('../model/Cadastrar.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <label>email: </label>
    <input type="text" name="email" id="email"/>
    <br>
    <label>senha: </label>
    <input type="text" name="senha" id="senha"/>
    <br>
    <?php
    public function validarSenha(string $senha):string
    {if($this->senhaBD == $senha)}{
          return "Bem-Vindo!";
      }else{
          return "Senha Invalida!";
      }
      ?>
    </form> 
</body>
</html>