<h2> Gestion des Montures </h2>

<?php


    $unControleur->setTable("Monture");//pas Technicien mais vue table personneTech
    $laMonture = null;

    if(isset($_GET['action']) and isset($_GET['idMonture']))
    {
        $action = $_GET['action'];
        $idMonture = $_GET['idMonture'];

        switch($action)
        {
            case 'del':
                $where = array("idMonture"=>$idMonture);
                $unControleur->supprime($where);
            break;

            case 'edit':
                $where = array("idMonture"=>$idMonture);
                $laMonture = $unControleur->modifie($where);
            break;

        }
    }

    require_once("vue/vue_insert_monture.php");

    if(isset($_POST['Modifier']))
    {
        $unControleur->setTable("Monture");
        $tab = array('forme'=>$_POST['forme'],
                    'matiere'=>$_POST['matiere']);
        
        $where = array('idMonture'=>$_GET['idMonture']);
        $unControleur->maj($tab, $where);
        //header("Location: index.php?page=5");
    }

    if(isset($_POST['Valider']))
    {
        $unControleur->setTable("Monture");//pas Technicin mais vue personneTech
        $tab = array('forme'=>$_POST['forme'],
                    'matiere'=>$_POST['matiere']
        );
        
        $unControleur->insert($tab);
    }
    

    //require_once("vue/vue_insert_Monture.php");

    /*$unControleur->setTable("Monture");
    if(isset($_POST["Rechercher"]))
    {
        $tab = array("couleur","forme", "matiere");
        $mot = $_POST["mot"];
        $lesMontures =$unControleur->selectSearch($tab, $mot);
    }
    else
    {
        $lesMontures =$unControleur->selectAll();
        
    }*/
    $lesMontures =$unControleur->selectAll();


    require_once("vue/vue_les_montures.php");


?>