<!doctype html>
<html>
    <link rel="stylesheet" href="./css/style.css">
    <head>
        <meta charset="utf-8">
 
        <title>Login | Sistema Seguro PHP</title>
    </head>
 
    <body>
         
        <h1> Login</h1>
 
        <form action="login.php" method="post">
            <label for="email">Email: </label>
            <br>
            <input type="text" name="email" id="email">
 
            <br><br>
 
            <label for="password">Senha: </label>
            <br>
            <input type="password" name="password" id="password">
 
            <br><br>
 
            <input class="botao" type="submit" value="Entrar">
        </form>
 
    </body>
</html>
