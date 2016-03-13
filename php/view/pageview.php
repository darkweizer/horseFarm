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
        <div class="container row">
            <!-- Debut card -->
            <div id="content" class="card-panel col s12 m8 l6 offset-m2 offset-l3 center-align">
                <!-- Titre de la carte -->
                <div class="card-header center-align"> <h2>Connexion</h2></div>

                <!-- Formulaire -->
                    <form id="formula" class="col s10 push-s1" action="connexion.php" method="POST">

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
                    <div class="card-action waves-effect waves-color">
                        <input class="btn blue-grey center-align" type="submit" value="Se connecter"/>
                    </div>

                </form><!-- Fin formulaire -->
            </div><!-- Fin card -->
        </div>
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

            <!-- Import favicon -->
            <link rel="icon" type="image/png" href="../../img/logo.png" />

            <!--Import Roboto Font-->
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'/>
            <!--Import Google Icon Font-->
            <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="../../vendor/materialize/css/materialize.min.css"  media="screen,projection"/>
            <!--Import style.css-->
            <link type="text/css" rel="stylesheet" href="../../css/style.css"  media="screen,projection"/>

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        </head>
        <?php
    } // showHead()


    /**
     * Includes all javascript's links needed by the pages.
     **/
    public function showJavaLinks() {
        ?>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../../vendor/jquery/jquery-2.2.1.min.js"></script>
        <script type="text/javascript" src="../../vendor/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="../../js/showmessage.js"></script>
        <?php
    }

} // class Pageview
