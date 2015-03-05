<?php
require_once("fixtures/conexaoDB.php");

function query($sql, $unique = false){
    try{
        $connection = conexaoDB();
        $stmt = $connection->prepare($sql);
        $stmt->execute();

        if ($unique){
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
    } catch (\PDOException $e){
        print_r($e->getMessage());
    }
}

function uri_atual(){
    $uri  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $rota = explode('/',$uri['path'],2);

    return $rota;
}

function roteamento($param){
    try{
        $minhasRotas = array("contato","empresa","home","servicos","busca", "produtos");
        if(in_array($param[1], $minhasRotas)){
            require_once($param[1].'.php');
        } elseif ($param[1] == ""){
            require_once('home.php');
        } else {
            header("HTTP/1.0 404 Not Found");
            require_once('404.php');
        }
    } catch (\PDOException $e){
        die(print_r($e->getMessage()));
    }
}

function rotasAdm($param){
    try{
        $minhasRotas = array("admin/home", "admin/login", "admin/editar", "admin/logout");
        if(in_array($param[1], $minhasRotas)){
            require_once($param[1].'.php');
        } elseif ($param[1] == "admin/"){
            require_once('home.php');
        } else {
            header("HTTP/1.0 404 Not Found");
            require_once('404.php');
        }
    } catch (\PDOException $e){
        die(print_r($e->getMessage()));
    }
}

function login($usuario, $senha){
    try{
        $connection = conexaoDB();

        $sql = "SELECT * FROM `usuarios` WHERE `usuario`=:usuario";

        $stmt = $connection->prepare($sql);
        $stmt->bindValue(':usuario',$usuario);
        $stmt->execute();

        $resultado = $stmt->rowCount();

        if ($resultado > 0) {

            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (password_verify($senha, $user['senha'])){
                return $user;
            } else {
                return null;
            }

        } else {
            return null;
        }

    } catch (\PDOException $e){
        print_r($e->getMessage());
    }
}

function buscaConteudo($id){
    $connection = conexaoDB();

    $sql = 'SELECT * FROM `paginas` WHERE `id` = :id';

    $stmt = $connection->prepare($sql);

    $stmt->bindValue(':id',$id);

    $stmt->execute();

    $resultado = $stmt->rowCount();

    if ($resultado > 0){
        $conteudo = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $conteudo['conteudo'];
    } else {
        return "Conteudo Indisponivel!";
    }
}

function salvarAlteracao($id, $conteudo){
    $connection = conexaoDB();

    $sql = "UPDATE `paginas` SET `conteudo` = :conteudo WHERE `id` = :id";

    $stmt = $connection->prepare($sql);

    $stmt->bindValue(':id',$id);
    $stmt->bindValue(':conteudo',$conteudo);

    if ($stmt->execute()){
        return true;
    } else {
        return false;
    }
}