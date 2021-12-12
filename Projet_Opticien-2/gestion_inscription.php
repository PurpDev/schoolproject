<?php

require_once("controleur/controleur.class.php");
require_once("controleur/config_bdd.php");
require_once("vue/vue_modele_site.php");

$unControleur = new Controleur($db_host, $db_db, $db_user, $db_password);

    // require_once("index.php");
    $unControleur->setTable("user");
    $lesUsers = $unControleur->SelectAll();
    require_once("vue/vue_inscription.php");
    
    if(isset($_POST['Valider']))
{
    $unControleur->setTable("user");
    $tab=array("nom"=>$_POST['nom'],
                "prenom"=>$_POST['prenom'],
                "email"=>$_POST['email'],
                "mdp"=>$_POST['mdp'],
                "role"=>$_POST['role']

            );
    $unControleur->insert($tab);
}
?>