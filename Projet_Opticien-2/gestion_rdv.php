<h2> Gestion des RDVs </h2>

<?php

	/*$unControleur->setTable("Personne"); 
	$lesPersonnes = $unControleur->selectAll();*/

	$unControleur->setTable("Personne"); 
	$lesPersonnes = $unControleur->selectAll(); 

    $unControleur->setTable("Magasin"); 
	$lesMagasins = $unControleur->selectAll(); 

	$unControleur->setTable("RDV"); 
	$leRDV = null; 

	if (isset($_GET['action']) and isset($_GET['idRDV']))
	{
		$action = $_GET['action']; 
		$idRDV = $_GET['idRDV'];

		switch ($action)
		{
			case "del" : 
				$where = array("idRDV"=>$idRDV);
				 
				$unControleur->supprime ($where); 
			break;
		
			case "edit" : 
				$where = array("idRDV"=>$idRDV);
				$leRDV = $unControleur->modifie($where); 
				 
			break; 
		} 
	}

	require_once("vue/vue_insert_rdv.php");
    
	if(isset($_POST['Modifier']))
	{
		$unControleur->setTable("RDV");
		$tab = array("motif"=>$_POST['motif'], 
					 "dateRDV"=>$_POST['dateRDV'],
					 "heuredebut"=>$_POST['heuredebut'], 
					 "heurefin"=>$_POST['heurefin'],
					 "idPersonne"=>$_POST['idPersonne'], 
					 "idMagasin"=>$_POST['idMagasin']
		);
		$where = array("idRDV"=>$_GET['idRDV']);
		$unControleur->maj($tab, $where); 
		//header("Location: index.php?page=7"); 
	}

	if(isset($_POST['Valider']))
	{
		$unControleur->setTable("RDV");
		$tab = array("motif"=>$_POST['motif'], 
					 "dateRDV"=>$_POST['dateRDV'], 
					 "heuredebut"=>$_POST['heuredebut'], 
					 "heurefin"=>$_POST['heurefin'],
					 "idPersonne"=>$_POST['idPersonne'], 
					 "idMagasin"=>$_POST['idMagasin']
		);
		$unControleur->insert($tab); 
	}

	$unControleur->setTable("rdvClientMagasin"); 

	/*if (isset($_POST['Rechercher']))
	{
		$tab = array("motif", "dateRDV","heuredebut", "heurefin", "Personne", "Magasin"); 
		$mot = $_POST['mot']; 
		$lesRDVs = $unControleur->selectSearch($tab, $mot); 
	}
	else
	{
		$lesRDVs = $unControleur->selectAll();
	}*/
	
	$lesRDVs = $unControleur->selectAll();

	require_once("vue/vue_les_rdvs.php"); 
?>
