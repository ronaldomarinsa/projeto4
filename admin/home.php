<?php
session_start();

if (isset($_SESSION['logado']) and $_SESSION['logado'] == 1){
    echo "<h3> Seja bem vindo <strong>".$_COOKIE['usuario']."</strong> </h3>";

    $sql = "SELECT * FROM paginas";
    $paginas = query($sql);

    echo '<div class="col-md-5">';
    echo '<h3>Páginas do Sistema:</h3>';
    if(!empty($paginas)){

        if (array_key_exists("editado",$_GET) && $_GET["editado"]== true){
            echo '<p class="alert-success">Alterações salvas com sucesso!</p>';
        }

        echo '<table class="table table-hover">';
        echo '<thead>
                  <tr>
                    <th>Página</th>
                    <th>Ação</th>
                  </tr>
              </thead>
              <tbody>';


        foreach($paginas as $pag){
            echo '<tr> <td>'.$pag['titulo'].'</td>';

            echo '<td><form action="editar" method="post">';
            echo '<input type="hidden" name="id" value="'.$pag['id'].'">';
            echo '<button class="btn btn-primary">Alterar </button>';
            echo '</form></td>';
            echo '</tr>';
        }
    } else {
        echo '<h3> Nenhuma página encontrada. </h3>';
    }

    echo '</tbody>
          </table>';

    echo '</div>';
} else {
    header('location: login');
}

?>



