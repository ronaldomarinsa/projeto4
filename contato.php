
<div class="container">
    <h4>FALE CONOSCO! QUEREMOS SABER COMO PODEMOS AJUDAR</h4>

    <?php
        $nome = null;
        $email = null;
        $assunto = null;
        $mensagem = null;

        if(isset($_POST['enviar'])){

            $nome = (isset($_POST['nome'])) ? $_POST['nome'] : null;
            $email = (isset($_POST['email'])) ? $_POST['email'] : null;
            $assunto = (isset($_POST['assunto'])) ? $_POST['assunto'] : null;
            $mensagem = (isset($_POST['mensagem'])) ? $_POST['mensagem'] : null;

            echo "<h4 class='text-success'>Dados enviados com sucesso, abaixo seguem os dados que você enviou</h4>";
        }

    ?>

    <form class="form-horizontal" role="form" method="post" action="contato">
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"
                       required="true" value="<?php echo $nome; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                       required="true" value="<?php echo $email; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="assunto" class="col-sm-2 control-label">Assunto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto"
                       required="true" value="<?php echo $assunto; ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="mensagem" class="col-sm-2 control-label">Mensagem</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="mensagem" name="mensagem" rows="3"
                          required="true"><?php echo $mensagem; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary btn-lg" name="enviar">Enviar</button>
                <button type="reset" class="btn btn-default btn-lg">Limpar</button>
            </div>
        </div>
    </form>
</div>