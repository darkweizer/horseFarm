<?php
/**
 * Created by PhpStorm.
 * User: Darkweizer
 * Date: 10/03/2016
 * Time: 15:05
 */
session_start();

include_once( '../model/db.php');
include_once('../controller/controller.php');
//include_once('../model/accountmodel.php');
//include_once('accountview.php');
$controller = new Controller();
$controller->controlConnexion();
