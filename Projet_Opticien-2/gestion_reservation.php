<h2> Gestion des Reservations </h2>

<?php

	/*$unControleur->setTable("Personne"); 
	$lesPersonnes = $unControleur->selectAll();*/

    $unControleur->setTable("Personne");
    $lesPersonnes = $unControleur->selectAll(); 

	$unControleur->setTable("Client"); 
	//$lesClients = $unControleur->selectAll(); 

    $unControleur->setTable("Lunette"); 
	$lesLunettes = $unControleur->selectAll(); 

	$unControleur->setTable("reservationCL"); 
	$laReservation = null; 

	if (isset($_GET['action']) and isset($_GET['idReservation']))
	{
		$action = $_GET['action']; 
		$idReservation = $_GET['idReservation'];

		switch ($action)
		{
			case "del" : 
				$where = array("idReservation"=>$idReservation);
				 
				$unControleur->delete($where); 
			break;
		
			case "edit" : 
				$where = array("idReservation"=>$idReservation);
				$laReservation = $unControleur->selectWhere($where); 
				 
			break; 
		} 
	}

	require_once("vue/vue_insert_reservation.php");
    
	if(isset($_POST['Modifier']))
	{
		$unControleur->setTable("Reservation");
		$tab = array("horaire"=>$_POST['horaire'], 
					 "idPersonne"=>$_POST['idPersonne'],
					 "idLunette"=>$_POST['idLunette']
		);
		$where = array("idReservation"=>$_GET['idReservation']);
		$unControleur->update($tab, $where); 
		header("Location: index.php?page=8"); 
	}

	if(isset($_POST['Valider']))
	{
		$unControleur->setTable("Reservation");
		$tab = array("horaire"=>$_POST['horaire'],
					"idPersonne"=>$_POST['idPersonne'],
					"idLunette"=>$_POST['idLunette'] 
					
		);
		$unControleur->insert($tab); 
	}

	$unControleur->setTable("reservationCL"); 

	/*if (isset($_POST['Rechercher']))
	{
		$tab = array("horaire", "idPersonne","heuredebut", "heurefin", "Personne", "Magasin"); 
		$mot = $_POST['mot']; 
		$lesRDVs = $unControleur->selectSearch($tab, $mot); 
	}
	else
	{
		$lesRDVs = $unControleur->selectAll();
	}*/
	
	$lesReservations = $unControleur->selectAll();

	require_once("vue/vue_les_reservations.php"); 
?>
