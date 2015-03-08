<?php

$uri = uri_atual();

if (empty($uri)){
	$rota = 'home';
}else{
	$rota = $uri;
}

$sql = "select rota, titulo, conteudo from paginas where rota = '{$rota}'";

$pagina = query($sql, true);

$titulo = $pagina['titulo'];
$conteudo = $pagina['conteudo'];

echo $conteudo;

?>