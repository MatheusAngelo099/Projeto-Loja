<?php 
include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM produtos WHERE id_produtos= " . $id;

$result = mysqli_query($con, $sql); 

if ($linha = mysqli_fetch_array($result)) {
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
</head>
<body>
  <form method="post" action="atualizar.php">
      <input type="hidden" value = "<?php echo $linha['id_produtos']?>" name="id">
      <p>
          <label> Nome do Produto: </label>
          <input type="text" value = "<?php echo $linha['nomeprod']?>" name="nomeprod">
          </p>

          <p>
          <label> Preço: </label>
          <input type="float" value = "<?php echo $linha['preco']?>" name="preco">
          </p>

          <p>
          <label> Quantidade: </label>
          <input type="number" value = "<?php echo $linha['quantidade']?>" name="quantidade">
          </p>

          <p>
          <label> Validade: </label>
          <input type="date" value = "<?php echo $linha['validade']?>" name="validade">
          </p>
          <p>
          <input type="submit" value="Salvar Alterações">
          </p>
    
    
</form>

<?php } ?>
    </body>
</html>