<h2> Gestion des Verres </h2>

<?php


    $unControleur->setTable("Verre");//pas Technicien mais vue table personneTech
    $leVerre = null;

    if(isset($_GET['action']) and isset($_GET['idVerre']))
    {
        $action = $_GET['action'];
        $idVerre = $_GET['idVerre'];

        switch($action)
        {
            case 'del':
                $where = array("idVerre"=>$idVerre);
                $unControleur->supprime($where);
            break;

            case 'edit':
                $where = array("idVerre"=>$idVerre);
                $leVerre = $unControleur->modifie($where);
            break;

        }
    }

    require_once("vue/vue_insert_verre.php");

    if(isset($_POST['Modifier']))
    {
        $unControleur->setTable("Verre");
        $tab = array('vision'=>$_POST['vision'],
                    'couleur'=>$_POST['couleur'],
                    'matiere'=>$_POST['matiere'],
                    'laboratoire'=>$_POST['laboratoire']);
        
        $where = array('idVerre'=>$_GET['idVerre']);
        $unControleur->maj($tab, $where);
        header("Location: index.php?page=4");
    }

    if(isset($_POST['Valider']))
    {
        $unControleur->setTable("Verre");//pas Technicin mais vue personneTech
        $tab = array('vision'=>$_POST['vision'],
                    'couleur'=>$_POST['couleur'],
                    'matiere'=>$_POST['matiere'], 
                    'laboratoire'=>$_POST['laboratoire']
        );
        
        $unControleur->insert($tab);
    }
    

    //require_once("vue/vue_insert_Verre.php");

    //$unControleur->setTable("Verre");
    
    /*if(isset($_POST["Rechercher"]))
    {
        $tab = array("vision","couleur","matiere","laboratoire");
        $mot = $_POST["mot"];
        $lesVerres =$unControleur->selectSearch($tab, $mot);
    }
    else
    {
        $lesVerres =$unControleur->selectAll();
        
    }*/
    $lesVerres =$unControleur->selectAll();


    require_once("vue/vue_les_verres.php");


?>