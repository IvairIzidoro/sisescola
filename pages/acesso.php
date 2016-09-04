<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./font/style.css">
    <title>Login</title>
</head>
<body>

   <form name="loginform" action="/functions/login.php" method="post">
       <br><br><br><br><br><br><br><br>
           <div class="login">
                <p><span class="icon-user"></span>Login: </p>
                <input type="text" maxlength="20" name="user"><br>
                <p><span class="icon-key"></span>Senha: </p>
                <input type="password" maxlength="8" name="password"><br>
                <input type="submit" value="Entrar">   
           </div>    
    </form>
    
</body>
</html>