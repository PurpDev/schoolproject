<?php

    class Modele{

        private $unPdo, $uneTable;
        public function __construct($db_host, $db_db, $db_user, $db_password)
        {
            $this->unPdo = null;
            try{
                $this->unPdo = new PDO("mysql:host=".$db_host.";dbname=".$db_db, $db_user, $db_password);
            }
            catch (PDOException $exp){
                echo "Erreur de connexion:".$exp->getMessage();
            }
        }

        public function setTable($uneTable)
        {
            $this->uneTable = $uneTable;
        }

        public function getTable()
        {
            return $this->uneTable;
        }

        /*public function setProc($procedure)
        {
            $this->procedure = $procedure;
        }

        public function getProc()
        {
            return $this->procedure;
        }*/
        

        public function selectAll()
        {
            $requete = "select * from " .  $this->uneTable . ";";
            $select = $this->unPdo->prepare($requete); 
            $select->execute();
            return $select->fetchAll();
        }

        public function insert($tab)
        {
            $champs = array();
            $donnees = array();
            foreach($tab as $cle => $valeur)
            {
                $champs[] = ":".$cle;
                $donnees[":".$cle] = $valeur;

            }
            $chaineChamps = implode(",",$champs);
            $requete = "insert into ". $this->uneTable . " values(null,".$chaineChamps.");";
            $select = $this->unPdo->prepare($requete);
            $select->execute($donnees);

        }
    


        public function delete($where)
        {
            $champs = array();
            $donnees = array();
            foreach($where as $cle => $valeur)
            {
                $champs[] = ":".$cle;
                $donnees[":".$cle] = $valeur;

            }
            $chaineWhere = implode(" and ", $champs);
            $requete = "delete from ".$this->uneTable." where ". $chaineWhere;
            $delete = $this->unPdo->prepare($requete);
            $delete->execute($donnees);

        }
        
        public function selectWhere ($where)
		{
			$champs = array(); 
			$donnees = array(); 
			foreach ($where as $cle => $valeur) {
				$champs[] = $cle ." = :".$cle;
				$donnees [":".$cle] = $valeur;  
			}
			$chaineWhere = implode(" and ", $champs); 

			$requete = "select * from  ".$this->uneTable."  where ".$chaineWhere;
			 
			$select = $this->unPdo->prepare ($requete);
			$select->execute ($donnees);
			return $select->fetch(); 
		}

        public function update($tab, $where)
        {
            $champs = array();
            $donnees = array();
            foreach($where as $cle => $valeur)
            {
                $champs[] = ":".$cle;
                $donnees[":".$cle] = $valeur;

            }
            $chaineWhere = implode(" and ", $champs); 
            
            $champs2 = array();
            foreach($tab as $cle => $valeur)
            {
                $champs2[] = $cle ." =:".$cle;
                $donnees[":".$cle] = $valeur;

            }
            
            $chaineChamps = implode(", ", $champs2);
            $requete = "update ".$this->uneTable." set ".$chaineChamps." where ".$chaineWhere;
            $update = $this->unPdo->prepare($requete);
            $update->execute($donnees);

        }

        public function selectSearch($tab, $mot)
		{
			$champs = array(); 
			$donnees = array(":mot"=>"%".$mot."%"); 
			foreach ($tab as $cle) {
				$champs [] = $cle ." like :mot";
			}
			$chaineWhere = implode("  or  " , $champs); 
			$requete = "select * from ".$this->uneTable."  where ".$chaineWhere; 
			$select = $this->unPdo->prepare($requete);
			$select->execute ($donnees);
			return $select->fetchAll(); 
		}

        public function insertProc($procedure,$tab)
        {
            $champs = array(); 
            $donnees = array(); 
            foreach ($tab as $cle => $valeur) {
                $champs[] = ":".$cle;
                $donnees[":".$cle] = $valeur; 
            }
            $chaineChamps = implode(",", $champs); 

            $requete ="call ".$procedure."(".$chaineChamps.");";

            $select = $this->unPdo->prepare($requete);
            $select->execute($donnees);
        }

        public function supprime($where){
            $champs=array();
            $donnees=array();
            foreach($where as $cle=>$valeur){
                $champs[]=$cle." = :".$cle;
                $donnees[":".$cle]=$valeur;
            }
            $chaineWhere=implode(" and ", $champs);

            $requete="delete from ".$this->uneTable." where ".$chaineWhere;
            $delete=$this->unPdo->prepare($requete);
            $delete->execute($donnees);
        }
        // Modification des tables, je n'étais pas sur du probléme au début du coup j'ai également rajouter une fonction maj
        public function modifie($where)
		{
			$champs = array(); 
			$donnees = array(); 
			foreach ($where as $cle => $valeur) {
				$champs[] = $cle ." = :".$cle;
				$donnees [":".$cle] = $valeur;  
			}
			$chaineWhere = implode (" and ", $champs); 

			$requete = "select * from  ".$this->uneTable."  where ".$chaineWhere;
			 
			$select = $this->unPdo->prepare ($requete);
			$select->execute ($donnees);
			return $select->fetch (); 
		}
        // le probléme venait de la fonction update
        public function maj ($tab, $where)
		{
			$champs = array(); 
			$donnees = array(); 
			foreach ($where as $cle => $valeur) {
				$champs[] = $cle ." = :".$cle;
				$donnees [":".$cle] = $valeur;  
			}
			$chaineWhere = implode (" and ", $champs); 

			$champs2 =array();
			foreach ($tab as $cle => $valeur) {
				$champs2[] = $cle ." = :".$cle;
				$donnees [":".$cle] = $valeur;
			}
			$chaineChamps=implode(", ", $champs2);

			$requete = "update  ".$this->uneTable." set ".$chaineChamps." where ".$chaineWhere;
			 
			$update = $this->unPdo->prepare ($requete);
			$update->execute ($donnees);
		}



        




    }




?>