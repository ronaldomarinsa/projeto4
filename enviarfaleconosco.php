<?php
//require_once "conexao.php";
?>

<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<?php
//pega as variaveis por POST
$nome      = $_POST["nome"];
$email     = $_POST["email"];
$assunto   = $_POST["assunto"];
$mensagem  = $_POST["mensagem"];

//Pego os dados da página corrente.
/*
$conexao = conecta();
$id = 6;
$sql = "Select * from tbl_menu where id_menu= :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("id", $id);
$stmt->execute();
$pagina = $stmt->fetch(PDO::FETCH_ASSOC);
*/
$pag_site = 'contato';

global $email; //função para validar a variável $email no script

if($nome == ''){
    echo "<script>alert('Campo nome deve ser preenchido')</script>";
    echo "<script>window.location.href=(". $pag_site .")</script>";
}

if($email == ''){
    echo "<script>alert('Campo email deve ser preenchido')</script>";
    echo "<script>window.location.href=(". $pag_site .")</script>";
}
/*
if(!eregi("^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$", $email)){
    echo "<script>alert ('E-mail incorreto');</script>";
    echo "<script>location.href='contato.php';</script>";
}
*/

if($assunto == ''){
    echo "<script>alert('Campo assunto deve ser preenchido')</script>";
    //echo "<script>window.location.href=('index.php?pagina=contato.php')</script>";
    echo "<script>window.location.href=(". $pag_site .")</script>";
}
if($mensagem == ''){
    echo "<script>alert('Campo mensagem deve ser preenchido')</script>";
    //echo "<script>window.location.href=('index.php?pagina=contato.php')</script>";
    echo "<script>window.location.href=(". $pag_site .")</script>";
}else{


    $data      = date("d/m/y");                     //função para pegar a data de envio do e-mail
    $hora      = date("H:i");                       //para pegar a hora com a função date

    $emaildestinatario = "ronaldo@rmasolutions.com.br";
//$mensagemHTML = "Nome: $nome\n Data: $data\n Hora: $hora\n  E-mail: $email\n\n Mensagem: $mensagem";
    $mensagemHTML = "";
    $mensagemHTML.= "<b>Nome: </b>". $nome."<br />";
    $mensagemHTML.= "<b>E-mail: </b>". $email."<br />";
    $mensagemHTML.= "<b>Assunto: </b>". $assunto."<br />";
    $mensagemHTML.= "<b>Mensagem: </b>". $mensagem."<br />";

//$headers = "From: $email";
    $headers = 'From: $email' . "\n";
    $headers .= 'MIME-Version: 1.0' . "\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $emailsender = "ronaldo@rmasolutions.com.br";

    if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r" . $emailsender)){ // Se for Postfix
        $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
        mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
    }

//aqui são as configurações para enviar o e-mail para o visitante
    $site   = "ronaldo@rmasolutions.com.br";                    //o e-mail que aparecerá na caixa postal do visitante
    $titulo = ":::::::::::.Fale Conosco.:::::::::::";                  //titulo da mensagem enviada para o visitante
    $msg    = "$nome, Dados enviados com sucesso, abaixo seguem os dados que você enviou: <br />";

    $header = "From: $site";
    $header .= 'MIME-Version: 1.0' . "\n";
//$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $quebra_linha = "\n";

//aqui envia o e-mail de auto-resposta para o visitante
/*
    if(!mail($email, $titulo, $msg, $header ,"-r".$emailsender)){ // Se for Postfix
        $header .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
        mail($email, $titulo, $msg, $header );
    }
*/
    //echo "<script>alert('$nome, Dados enviados com sucesso, abaixo seguem os dados que você enviou:')</script>";
    //echo "<script>window.location.href=('dadosenviados.php')</script>";


    //Exibe o resultado na tela:
    $mensagemTitulo = "<b>Dados enviados com sucesso, abaixo seguem os dados que você enviou: </b>". "<br />";

    echo $mensagemTitulo."<br />";
    echo $mensagemHTML;

    //require_once("rodape.php"); ?>
    <br />

    <div id="link"><a href="javascript:history.back(1)">Voltar</a></div>
    
    <!--<div class="form-group">
        <div class="col-sm-8">
            <button type="reset"  class="btn btn-default btn-lg" <a href="javascript:history.back(1)">Voltar</a></button>
        </div>
    </div> -->


<?php
}
?>
