<?php
    include("conexao.php");

    $sql = "SELECT * FROM produtos";
    $result = mysqli_query($con,$sql);

        
    
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
     <h1> Estoque de Produtos da Loja </h1>
     <a href="cadastroproduto.html"> Cadastrar Produtos </a>
     <br><br>       
    <table border = "1">
        <thead>
        <tr>
            <th> ID do Produto </th>
            <th>Nome do Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Data De Validade</th>
            <th>Ações </th>
        </tr>
        </thead>

        
        <tbody>
               <?php
               while ($linha = mysqli_fetch_array($result)) {
                   $id = $linha['id_produtos'];
            echo "<tr>
                <td> " . $linha['id_produtos'] ." </td>
                <td> " . $linha['nomeprod'] ." </td>
                <td> " . $linha['preco'] ." </td>
                <td> " . $linha['quantidade'] ." </td>
                <td> " . $linha['validade'] ." </td>
                    <td>
                    <a href=" . "editar.php?id=$id" . ">Editar</a>
                    <a href=" . "excluir.php?id=$id" . ">Excluir</a>
                    </td>
            </tr>";
            }
            ?>
        </tbody>
            
        <br><br>
    <form method="post" action="busca.php">
        <input name="busca" type="text" placeholder="Digite sua pesquisa...">
        <input type="submit" value="Pesquisar">
</body>

</html>