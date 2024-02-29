<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de login</title>
</head>
<body>
    <h1>Formulario de login</h1>
    <form method="post" action="autenticar.php">
        <p>
          <label> Nome de Usuario </label>
          <input type="text" name="nomeuser"> 
         </p>

         <p>
         <label> Senha </label>
          <input type="password" name="senha"> 
         </p>

         <p>
             <button type="submit"> Entrar </button>
            
         </p> 
</form>
        <p> 
            Você não tem uma conta? 
            <a href link="formulariocadastro.html"> Cadastre-se</a>
        </p>   
</body>
</html>