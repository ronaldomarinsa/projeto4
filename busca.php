<?php
if (isset($_POST["busca"])){

    $busca = $_POST["busca"];

    $sql = "select * from paginas where conteudo like '%{$busca}%'";
    $pagina = query($sql);
    echo "<div class='container'> <h1>Resultados para sua pesquisa:</h1>";
    if (!empty($pagina)){
        foreach ($pagina as $pag){
            echo '<p><a href="'.$pag['rota'].'">'.$pag["titulo"].'</a></p>';
        }
    } else {
        echo "<strong>Nenhum resultado encontrado</strong>";
    }
    echo "</div>";
}



