<?php

/**
 * Created by PhpStorm.
 * User: Darkweizer
 * Date: 10/03/2016
 * Time: 15:11
 */
class Pageview {
    public function showConnexion() {
        ?>
        <!-- Debut card -->
        <div class="card-panel inscription col m4 push-m4 s12 center-align">
            <!-- Formulaire -->
            <form id="formula" class="col formulaire s10 push-s1" action="connexion.php" method="POST">

                <!-- Titre de la carte -->
                <div class="card-header"> <h2>Inscription</h2></div>
                <!-- Fin titre -->

                <!-- Contenu card -->
                <div class="card-content">

                    <!-- Identifiant -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="id" type="text" class="validate" name="id" required="required">
                            <label for="id">Identifiant <em>*</em></label>
                        </div>
                    </div><!-- Identifiant -->

                    <!-- mot de passe -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="passe" type="password" class="validate" name="passe" required="required">
                            <label for="passe">Mot de passe <em>*</em></label>
                        </div>
                    </div><!-- fin mot de passe -->
                    <div id="result"></div><!-- Retour de l'erreur en json -->
                </div><!-- Fin contenu card -->


                <!-- bouton s'inscrire -->
                <div class="card-action bouton-connection">
                    <input class="btn center-align" type="submit" value="Se connecter"/>
                </div>

            </form><!-- Fin formulaire -->
        </div><!-- Fin card -->
        <?php
    } // showConnexion()

    /**
     * Includes the head needed by pages
     * @param string $title title of page
     **/
    public function showHead($title) {
        ?>
        <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <title><?php echo $title;?></title>

            <!--Import Roboto Font-->
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
            <!--Import Google Icon Font-->
            <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="../../vendor/css/materialize.min.css"  media="screen,projection"/>

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        </head>
        <?php
    } // showHead()

} // class Pageview