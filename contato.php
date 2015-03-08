<?php
//require_once('verificapagina.php');
//require_once "conexao.php";
?>
<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
</head>

<body>
    <form name="contato" class="form-horizontal" role="form" method="post" action="enviarfaleconosco.php">

        <div class="form-group">
            <label for="nome" class="col-sm-1 control-label">Nome:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nome" name="nome" width=""  placeholder="Digite seu Nome...">
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-1 control-label">E-Mail:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="email" name="email" width=""  placeholder="Digite seu e-mail...">
            </div>
        </div>

        <div class="form-group">
            <label for="assunto" class="col-sm-1 control-label">Assunto:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="assunto" name="assunto" width=""  placeholder="Digite o assunto...">
            </div>
        </div>
        
        <div class="form-group">
            <label for="mensagem" class="col-sm-1 control-label">Mensagem:</label>
            <div class="col-sm-8">
              <textarea class="form-control" rows="5" name="mensagem" placeholder="Digite aqui sua mensagem..."></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-8">
                <button type="submit" class="btn btn-primary btn-lg" name="enviar">Enviar</button>
                <button type="reset"  class="btn btn-default btn-lg" <a href="contato">Limpar</a></button>
            </div>
        </div>

    </form>
</body>

</html>