<?php
    //Conexao com o Banco de dados
    include_once("../connection.php");
    include("../crud.php");
    $conexao = new connection;
    $conexao -> connect();
?>
<html>
    <head>
        <title>User Autentication</title>
        <script type="text/javascript">
        
        function loginFailed(){
            window.location = '../index.php?pages=acesso';
        }
            
        function diretor(){
            window.location = '../index.php?pages=painel-diretor';
        }
            
        function professor(){
            window.location = '../index.php?pages=painel-professor';
        }
        
        function aluno(){
            window.location = '../index.php?pages=painel-aluno';
        }
        </script>
    </head>
    <body>  
<?php
        
    $usuario = $_POST['user'];
    $senha = $_POST['password'];
    $sql = mysql_query("SELECT * FROM db_usuarios WHERE login = '$usuario' and senha = '$senha'") or die (mysql_error());
    $row = mysql_num_rows($sql) or die (mysql_error());
    $array = mysql_fetch_assoc($sql) or die (mysql_error());
    $nivel = $array['nivel'];
    if($row > 0 ){
        session_start();
        $_SESSION['login'] = $_POST['user'];
        $_SESSION['senha'] = $_POST['password'];
        switch($nivel){
            case 1:
                echo "<script>diretor()</script>";
            break;
            case 2:
                echo "<script>professor()</script>";
            break;
            case 3:
                echo "<script>aluno()</script>";
            break;
            default:
                echo "<center>Login ou senha invalidos aguarde um instante para tentar novamente!</center>";
                echo "<script>loginFailed()</script>";
            
        }
      
                
    }else{
        
        echo "<center>Login ou senha invalidos aguarde um instante para tentar novamente!</center>";
        echo "<script>loginFailed()</script>";
    }
    
?>

</body>
</html>

