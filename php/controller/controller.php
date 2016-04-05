<?php
/**
 * Created by PhpStorm.
 * User: Darkweizer
 * Date: 10/03/2016
 * Time: 15:41
 */

include_once( '../model/dblogin.php');

class Controller
{
    public function controlConnexion(){
        if(!empty($_POST['id']) && !empty($_POST['passe'])) {
            //$this->showMessage("test");
            $username = htmlspecialchars($_POST['id']);
            $password = htmlspecialchars($_POST['passe']);
            if(loginConnection($username, $password))
            {
                $this->showMessage("identifiant correcte", "ok");
            }
            $this->showMessage("identifiant incorrecte");
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