<?php
    session_start();
    require_once("controleur/controleur.class.php");
    require_once("controleur/config_bdd.php");
    require_once("vue/vue_modele_site.php");

    $unControleur = new Controleur($db_host, $db_db, $db_user, $db_password);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Projet Opticien </title>
</head>
<body>
    <?php

if ( ! isset($_SESSION['email'])){
      
    require_once("vue/vue_log.php");
}
// require_once("vue/vue_log.php");
if(isset($_POST['SeConnecter']))
{
    $where = array("email"=>$_POST['email'],
                  "mdp"=>$_POST['mdp']);
    $unControleur->setTable("user");
    $unUser = $unControleur->selectWhere ($where);
    
    
    if (isset($unUser['email']))
    {
        $_SESSION['email']= $unUser['email'];
        $_SESSION['role']= $unUser['role'];
        //header("Location: index.php");
    }else{
        echo "<br/> Veuillez verifier vos identifiants";
    }
}
if (isset($_SESSION['email'])){
        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else{
            $page = 0;
        }

        switch($page)
        {
            /*case 0:require_once("home.php"); break;
            case 1:require_once("gestion_inscrit.php"); break;
            case 2:require_once("gestion_technicien.php"); break;
            case 3:require_once("gestion_client.php"); break;
            case 4:require_once("gestion_magasin.php"); break;
            case 5:require_once("gestion_monture.php"); break;
            case 6:require_once("gestion_verre.php"); break;
            case 7:require_once("gestion_lunette.php"); break;
            case 8:require_once("gestion_rdv.php"); break;
            case 9:require_once("gestion_reservation.php"); break;
            case 10:require_once("gestion_inscription.php"); break;*/

            case 0:require_once("home.php"); break;
            case 1:require_once("gestion_technicien.php"); break;
            case 2:require_once("gestion_client.php"); break;
            case 3:require_once("gestion_magasin.php"); break;
            case 4:require_once("gestion_verre.php"); break;
            case 5:require_once("gestion_monture.php"); break;
            case 6:require_once("gestion_lunette.php"); break;
            case 7:require_once("gestion_rdv.php"); break;
            case 8:require_once("gestion_reservation.php"); break;
            case 9:unset($_SESSION); session_destroy(); break;


        }
}
    ?>
    
</body>
</html>