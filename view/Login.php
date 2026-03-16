<?php
    namespace Projeto\view;
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <h2>6. Verifique se uma senha digitada é válida.</h2>
    <?php include('funcoes.php'); ?>
<form method="POST">
      <label>Informe a sua senha: </label>
      <input type="number" name="senhaBD" id="senhaBD"/>
      <button type="submit">Calcular
         <?php
              $senha   = $_POST['senhaBD'];
              $resultado = validarSenha($senha);
         ?>
        </button>
        
</form>
<h1>
    <?php echo $resultado;?>
</h1>
</body>
</html>
</body>
</html>