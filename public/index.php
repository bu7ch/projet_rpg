<?php

require_once __DIR__ . '/../src/Autoloader.php';


// Inclure la classe Autoloader
$autoloader = new Autoloader();

// Page d'accueil
$pageTitle = "Accueil - Mon Application";
$contentTemplate = "accueil_content.php";
include "layout.html.php";
