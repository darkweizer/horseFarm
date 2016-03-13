<?php
/**
 * Created by PhpStorm.
 * User: Darkweizer
 * Date: 10/03/2016
 * Time: 15:08
 */

include_once('pageview.php');

$pageView = new PageView();
?>

<!DOCTYPE html>
<html>
    <?php
        $pageView->showHead("Connexion - HorseFarm");
    ?>

    <body>
        <?php
            $pageView->showConnexion();
        ?>

        <footer>
            <?php
                $pageView->showJavaLinks();
            ?>
            <script>showmessage('formula');</script>
        </footer>

    </body>
</html>