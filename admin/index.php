<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);
?>

<?php require_once '../functions.php'; ?>

<?php require_once('header.php'); ?>

    <div>
        <?php
        $uri = uri_admin();

        //var_dump($uri); die;

        //echo $uri[1];

        rotasAdm($uri);
        //rotasAdm('admin/login');

        ?>
    </div>


<?php require_once('footer.php');?>