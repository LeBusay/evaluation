<?php
date_default_timezone_set("Europe/Paris");
require_once "./functions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');

$chat1 = new Chat();

$chat1->set_Prenom("Licorne");
$chat1->set_Age(1337);
$chat1->set_Couleur("ArcEnCiel");
$chat1->set_Sexe("male");
$chat1->set_Race("Inconnu");
$chat1->get_Infos();

$chat2 = new Chat();

$chat2->set_Prenom("Garfield");
$chat2->set_Age(40);
$chat2->set_Couleur("Roux");
$chat2->set_Sexe("male");
$chat2->set_Race("Chat trop gros");
$chat2->get_Infos();

$chat3 = new Chat();

$chat3->set_Prenom("Catwoman");
$chat3->set_Age(88);
$chat3->set_Couleur("Noire");
$chat3->set_Sexe("femelle");
$chat3->set_Race("Humaine");
$chat3->get_Infos();
