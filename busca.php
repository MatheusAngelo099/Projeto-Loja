<?php

include("conexao.php");

$sql = "SELECT * FROM produtos";
$result = mysqli_query($con,$sql);

$busca = $_POST["busca"];

$sql1 = "SELECT * FROM produtos WHERE nomeprod LIKE '%$busca%'";
$result2 = mysqli_query($con,$sql1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca</title>
</head>
<body>
<table border="1">
    <thead> 
        <tr> 
            <th> ID do Produto </th>
            <th> Nome do Produto</th>
            <th> Preco</th>
            <th> Quantidade </th>
            <th> Data de validade</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            while ($linha = mysqli_fetch_array($result2)) {
                echo "
                <tr>
                    <td> " . $linha['id_produtos'] . " </td>
                    <td> " . $linha['nomeprod'] . " </td>
                    <td> " . $linha['preco'] . " </td>
                    <td> " . $linha['quantidade'] . " </td>
                    <td> " . $linha['validade'] . " </td>

                </tr> ";
}
        ?>
</tbody> 
</table>
</body>
</html>