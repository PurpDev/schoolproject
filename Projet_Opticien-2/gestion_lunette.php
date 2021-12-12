<h2> Gestion des lunettes </h2>

<?php

	/*$unControleur->setTable("Personne"); 
	$lesPersonnes = $unControleur->selectAll();*/

	$unControleur->setTable("Verre"); 
	$lesVerres = $unControleur->selectAll(); 

    $unControleur->setTable("Monture"); 
	$lesMontures = $unControleur->selectAll(); 

	$unControleur->setTable("Lunette"); 
	$laLunette = null; 

	

	if (isset($_GET['action']) and isset($_GET['idLunette']))
	{
		$action = $_GET['action']; 
		$idLunette = $_GET['idLunette'];

		switch ($action)
		{
			case "del" : 
				$where = array("idLunette"=>$idLunette);
				$unControleur->supprime($where); 
				break;
		
			case "edit" : 
				$where = array("idLunette"=>$idLunette);
				$laLunette = $unControleur->modifie($where); 
				 
			break; 
		} 
	}

	require_once("vue/vue_insert_lunette.php");
    
	if(isset($_POST['Modifier']))
	{
		$unControleur->setTable("Lunette");
		$tab = array("libelle"=>$_POST['libelle'], 
					"couleur"=>$_POST['couleur'],
					 "genre"=>$_POST['genre'],
					 "marque"=>$_POST['marque'], 
					 "prix"=>$_POST['prix'],
					 "quantite"=>$_POST['quantite'], 
					 "disponibilite"=>$_POST['disponibilite'], 
                     "idVerre"=>$_POST['idVerre'], 
					 "idMonture"=>$_POST['idMonture']
		);
		$where = array("idLunette"=>$_GET['idLunette']);
		$unControleur->maj($tab, $where); 
		//header("Location: index.php?page=6"); 
	}

	if(isset($_POST['Valider']))
	{
		$unControleur->setTable("Lunette");
		$tab = array("libelle"=>$_POST['libelle'], 
					"couleur"=>$_POST['couleur'],
					 "genre"=>$_POST['genre'], 
					 "marque"=>$_POST['marque'], 
					 "prix"=>$_POST['prix'],
					 "quantite"=>$_POST['quantite'], 
					 "disponibilite"=>$_POST['disponibilite'], 
                     "idVerre"=>$_POST['idVerre'],
                     "idMonture"=>$_POST['idMonture']
 
		);
		$unControleur->insert($tab); 
	}

	$unControleur->setTable("lunetteVM"); 

	/*if (isset($_POST['Rechercher']))
	{
		$tab = array("libelle", "genre","marque", "prix", "quantite", "disponibilite", "Personne", "Verre", "Monture"); 
		$mot = $_POST['mot']; 
		$lesLunettes = $unControleur->selectSearch($tab, $mot); 
	}
	else
	{
		$lesLunettes = $unControleur->selectAll();
	}*/
	
	$lesLunettes = $unControleur->selectAll();

	require_once("vue/vue_les_lunettes.php"); 
?>
