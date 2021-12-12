<h2> Gestion des Inscrits </h2>

<?php
    $unControleur->setTable("personneP");
    $laPersonne = null;


    if(isset($_GET['action']) and isset($_GET['p_idPersonne']))
    {
        $action = $_GET['action'];
        $p_idPersonne = $_GET['p_idPersonne'];

        switch($action)
        {
            case "del":
                $where = array("p_idPersonne"=>$p_idPersonne);
                $unControleur->delete($where);
            break;

            case 'edit':
                $where = array("p_idPersonne"=>$p_idPersonne);
                $leClient = $unControleur->selectWhere($where);
            break;

        }

        require_once("vue/vue_insert_inscrit.php");

        if(isset($_POST['Modifier']))
        {
            $unControleur->setTable("Personne");
            $tab = array('p_nom'=>$_POST['p_nom'],
                        'p_prenom'=>$_POST['p_prenom'],
                        'p_adresse'=>$_POST['p_adresse'],
                        'p_email'=>$_POST['p_email'],
                        'p_typerole'=>$_POST['p_typerole']
            );
            
            $where = array('p_idPersonne'=>$_GET['p_idPersonne']);
            $unControleur->update($tab, $where);
            header("Location: index.php?page=1");
        }

        if(isset($_POST['Valider']))
        {
            $unControleur->setTable("Personne");
            //pas Technicin mais vue personneTech
            $tab = array('p_nom'=>$_POST['p_nom'],
                        'p_prenom'=>$_POST['p_prenom'],
                        'p_adresse'=>$_POST['p_adresse'],
                        'p_email'=>$_POST['p_email'],
                        'p_typerole'=>$_POST['p_typerole']
            );
            
            $unControleur->insert($tab);
        }
    }

    //$unControleur->setTable("Personne");

    //require_once("vue/vue_insert_inscrit.php");


   /* if(isset($_POST["Rechercher"]))
    {
        $tab = array("nom", "prenom", "adresse", "email", "typerole");
        $mot = $_POST["mot"];
        $lesPersonnes = $unControleur->selectSearch($tab, $mot);
    }
    else
    {
        $lesPersonnes = $unControleur->selectAll();
        
    }*/

    $lesPersonnes = $unControleur->selectAll();
    

    //require_once("vue/vue_insert_inscrit.php");

    require_once("vue/vue_les_inscrits.php");


?>