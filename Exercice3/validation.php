<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 09/05/2018
 * Time: 14:47
 */

include "./classes/Log.php";

$marque = $_REQUEST['marque'] ?? "";
$modèle = $_REQUEST['modèle'] ?? "";
$année = $_REQUEST['année'] ?? "";
$couleur = $_REQUEST['couleur'] ?? "";

Log::logWrite("Bonjour $marque $modèle dont l'année est $année et la couleur est $couleur");
