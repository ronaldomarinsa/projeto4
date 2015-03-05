<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
?>

<?php require_once '../functions.php'; ?>

<?php require_once('header.php'); ?>

    <div>
        <?php
        $uri = uri_atual();

        //echo $uri[1];

        rotasAdm($uri);
        ?>
    </div>


<?php require_once('footer.php');?>