<?php

class Conexion 
{
        
    private $con;
    public function __construct()
    {
        $this->con = new mysqli('localhost','root','','desarrollo');
    }
    
    public function Getdatos()
    {
        $query = $this->con->query('SELECT * FROM personas');
        $retorno = [];
        $i=0;   

        while($fila = $query->fetch_assoc())
        {
            $retorno [$i] = $fila;
            $i++; 
        }
        return $retorno; 
    }
}
?>


