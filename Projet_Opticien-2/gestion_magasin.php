<h2> Gestion des Magasins </h2>

<?php


    $unControleur->setTable("Magasin");//pas Technicien mais vue table personneTech
    $leMagasin = null;

    if(isset($_GET['action']) and isset($_GET['idMagasin']))
    {
        $action = $_GET['action'];
        $idMagasin = $_GET['idMagasin'];

        switch($action)
        {
            case "del":
                $where = array("idMagasin"=>$idMagasin);
                $unControleur->supprime($where);
                break;

            case 'edit':
                $where = array("idMagasin"=>$idMagasin);
                $leMagasin = $unControleur->modifie($where);
            break;

        }
    }

    require_once("vue/vue_insert_magasin.php");

    if(isset($_POST['Modifier']))
    {
        $unControleur->setTable("Magasin");
        $tab = array('nom'=>$_POST['nom'],
                    'adresse'=>$_POST['adresse'],
                    'email'=>$_POST['email'],
                    'telephone'=>$_POST['telephone']);
        
        $where = array('idMagasin'=>$_GET['idMagasin']);
        $unControleur->maj($tab, $where);
        //header("Location: index.php?page=3");
        //exit;
    }

    if(isset($_POST['Valider']))
    {
        $unControleur->setTable("Magasin");//pas Technicin mais vue personneTech
        $tab = array('nom'=>$_POST['nom'],
                    'adresse'=>$_POST['adresse'],
                    'email'=>$_POST['email'],
                    'telephone'=>$_POST['telephone']);
        
        $unControleur->insert($tab);
    }
    

    //require_once("vue/vue_insert_magasin.php");

    $unControleur->setTable("Magasin");
    
    /*if(isset($_POST["Rechercher"]))
    {
        $tab = array("nom","adresse",  "telephone", "email");
        $mot = $_POST["mot"];
        $lesMagasins =$unControleur->selectSearch($tab, $mot);
    }
    else
    {
        $lesMagasins =$unControleur->selectAll();
        
    }*/

    $lesMagasins =$unControleur->selectAll();

    require_once("vue/vue_les_magasins.php");


?>