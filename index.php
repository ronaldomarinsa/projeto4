<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

require_once('functions.php'); 

require_once('header.ini.php'); 

?>

    <div>
        <?php
            $uri = uri_atual();
            
            roteamento($uri);
        ?>
    </div>

<?php require_once('footer.php');?>