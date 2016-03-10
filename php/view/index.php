<?php
/**
 * Created by PhpStorm.
 * User: Darkweizer
 * Date: 10/03/2016
 * Time: 15:08
 */

include_once('./pageview.php');

$pageView = new PageView();
?>

<!DOCTYPE html>
  <html>
    <body>

    <?php
        $pageView->showHead("Connexion");
        $pageView->showConnexion();
    ?>

<!-- FIN CONTAINER -->

</body>
</html>