<?php

$uri = uri_atual();

$rota = (empty($uri[1])) ? $rota = 'home' : $uri[1];

$sql = "select rota, titulo, conteudo from paginas where rota = '{$rota}'";

$pagina = query($sql, true);

$titulo = $pagina['titulo'];
$conteudo = $pagina['conteudo'];

echo $conteudo;

?>