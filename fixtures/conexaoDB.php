<?php

function conexaoDB()
{
    try{
        $config = include "config.php";

        if(! isset($config['db'])){
            throw new \InvalidArgumentException("Configuracao do banco de dados nao existe!");
        }

        //se existe o host, seta para o argumento, senao recebe null
        $host = (isset($config['db']['host'])) ? $config['db']['host'] : null;
        $dbname = (isset($config['db']['dbname'])) ? $config['db']['dbname'] : null;
        $user = (isset($config['db']['user'])) ? $config['db']['user'] : null;
        $password = (isset($config['db']['password'])) ? $config['db']['password'] : null;

        //echo "HOST: ".$host." - DBNAME: ".$dbname." - USER: ".$user." - PASS: ".$password."<br>";

        return new \PDO("mysql:host={$host};dbname={$dbname}", $user, $password);

    }catch (\PDOException $e){
        echo $e->getMessage()."\n";
        echo $e->getTraceAsString()."\n";

        return false;
    }
}