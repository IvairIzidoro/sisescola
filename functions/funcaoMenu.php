<?php

    function menuPrincipal(){
        
        $menu = array(
            "Home" => "index.php",
            "Acesso" => "index.php?pages=acesso",
            "Contato" => "index.php?pages=contato",
            "Sobre" => "index.php?pages=login"
        );
        
        menu($menu);   
        
    }

    function menu($menu){
        foreach($menu as $titulo => $link){
            echo"<li><a href=$link>$titulo</a></li>";
        }
    }

?>