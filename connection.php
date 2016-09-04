<?php

class connection
{

    /*
        Altere as variaveis a seguir caso necessario
    */

    private $dbHost = "localhost"; // servidor
    private $dbUser = "root"; // usuario do banco
    private $dbPassword = ""; // senha do usuario do banco
    private $dbName = "mapa"; // nome do banco

    private $con = false;

 
    public function connect() // estabelece conexao
    {
        if(!$this->con)
        { 
            $myHost= @mysql_connect($this->dbHost,$this->dbUser,$this->dbPassword);
            if($myHost)
            { 
                $selectdb = @mysql_select_db($this->dbName,$myHost);
                if($selectdb)
                {
                    $this->con = true;
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return true;
        }
        echo "c=". $this->con;
    }
    
    public function disconnect() // fecha conexao
    {
        if($this->con)
        {
            if(@mysql_close())
            {
                            $this->con = false;
                return true;
            }
            else
            {
                return false;
            }
        }
    }    
}
?>