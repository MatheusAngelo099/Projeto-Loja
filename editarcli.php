<?php 
include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id_cliente= " . $id;

$result = mysqli_query($con, $sql); 

if ($linha = mysqli_fetch_array($result)) {
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Clientes</title>
</head>
<body>
  <form method="post" action="atualizarcli.php">
      <input type="hidden" value = "<?php echo $linha['id_cliente']?>" name="id">
      <p>
          <label> Nome do Cliente: </label>
          <input type="text" value = "<?php echo $linha['nome']?>" name="nome">
          </p><br>

          <p>
          <label> Data de Nascimento: </label>
          <input type="date" value = "<?php echo $linha['data_nasc']?>" name="data_nasc">
          </p><br>

          <p>
          <label> Email: </label>
          <input type="text" value = "<?php echo $linha['email']?>" name="email">
          </p><br>

          <p>
          <label> Telefone: </label>
          <input type="number" value = "<?php echo $linha['telefone']?>" name="telefone">
          </p><br>

          <p>
          <label> CPF: </label>
          <input type="number" value = "<?php echo $linha['cpf']?>" name="cpf">
          </p><br>

          <p>
          <label> RG: </label>
          <input type="number" value = "<?php echo $linha['rg']?>" name="rg">
          </p><br>

          <p>
          <label> CEP: </label>
          <input type="number" value = "<?php echo $linha['cep']?>" name="cep">
          </p><br>

          <p>
          <input type="submit" value="Salvar Alterações">
          </p>
    
    
</form>

<?php } ?>
</body>
</html>