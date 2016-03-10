<?php
/**
 * Created by PhpStorm.
 * User: Darkweizer
 * Date: 10/03/2016
 * Time: 15:41
 */
class Controller
{
    public function controlConnexion(){
        if(!empty($_POST['id']) && !empty($_POST['passe'])) {
            $_POST['id'] = htmlspecialchars($_POST['id']);
            $_POST['passe'] = htmlspecialchars($_POST['passe']);
            $this->showMessage("identifiant correcte", "ok");
        }
        else {
            $this->showMessage("Veuillez entrer tous les champs.");
        }

    }


    public function showMessage($msg, $send = "", $redirection = "")
    {
        // Les messages d"erreurs ci-dessus s'afficheront si Javascript est désactivé
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');

        $retour['msg'] = $msg;
        $retour['send'] = $send;
        $retour['redirection'] = $redirection;
        echo json_encode($retour);
        exit;

    }
}