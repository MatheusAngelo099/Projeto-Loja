<?php
include("conexao.php");

$sql = "SELECT *  FROM clientes";
$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Clientes</title>
</head>
<body>
    <h1> Clientes Cadastrados </h1>
<a href="formulariocliente.html">Cadastrar Clientes </a>
<br><br>

<table border="1">
    <thead>
        <tr>
            <th>ID do cliente</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>CPF</th>    
            <th>RG</th>
            <th>CEP</th>
            <th>Ações </th>
</tr>
</thead>
<br><br>
    <form method="post" action="buscacli.php">
        <input name="busca" type="text" placeholder="Digite sua pesquisa...">
        <input type="submit" value="Pesquisar">
     <tbody>
         <?php

          while ($linha = mysqli_fetch_array($result)) {
              $id = $linha['id_cliente'];

            echo "<tr>
            <td> " . $linha['id_cliente'] ." </td>
            <td> " . $linha['nome'] . " </td>
            <td> " . $linha['data_nasc'] . " </td>
            <td> " . $linha['email'] . " </td>
            <td> " . $linha['telefone'] . " </td>
            <td> " . $linha['cpf'] . " </td>
            <td> " . $linha['rg'] . " </td>
            <td> " . $linha['cep'] . " </td>

            <td> 
            <a href= " . " editarcli.php?id=$id" . "> Editar </a>
            <a href= " . " excluircli.php?id=$id" . "> Excluir </a>
            ";


          }

         ?>
         
      
</body>
</html>