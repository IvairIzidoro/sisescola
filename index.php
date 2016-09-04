<?php
    /* incluindo os scripts de conecção com o bando de dados */
    include_once ("connection.php");
    include ("crud.php");
    /* criando um objeto do tipo connection e apontando para o metodo connect() */
    $conectar = new connection;
    $conectar -> connect();

?>
<!DOCTYPE html>
<!-- ESTE SITE USA ALGUMAS FONTES DOS REPOSITÓRIOS DO GOOGLE MELHOR VISUALIZAR CONECTADO A INTERNET -->
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./font/style.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Bree+Serif|Pacifico|Titillium+Web" rel="stylesheet"> 
	
	<title>Escola Ficticia</title>
</head>
<body>
<div id="topo">   
    <div id="menu">
        <ul>
            <li><a href="index.php"><span class="icon-home"></span>Home</a></li>
            <li><a href="index.php?pages=acesso"><span class="icon-enter" ></span>Acesso</a></li>
            <li><a href="index.php?pages=contato"><span class="icon-phone" ></span>Contato</a></li>
            <li><a href="index.php?pages=sobre"><span class="icon-checkmark" ></span>Sobre o Sistema</a></li>
        </ul>
    </div>
</div>
    <div id="geral">
        
        
    </div>
    <?php
                if(isset($_GET['pages'])){
                    include("pages/" . "$_GET[pages]" . ".php");
                }else{
                    include("pages/home". ".php");
                }
      ?>

<footer>
    
    
</footer>
</body>
</html>
