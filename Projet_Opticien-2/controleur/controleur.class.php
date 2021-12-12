<?php

    require_once("modele/modele.class.php");
    class Controleur
    {
        private $unModele;

        public function __construct($db_host, $db_db, $db_user, $db_password)
        {
            $this->unModele = new Modele($db_host, $db_db, $db_user, $db_password);
        }


        public function setTable($uneTable)
        {
            $this->unModele->setTable($uneTable);
        }

        public function getTable()
        {
            return $this->unModele->getTable();
        }

        /*public function setProc($procedure)
        {
            $this->unModele->setProc($procedure);
        }

        public function getProc()
        {
            return $this->unModele->getProc();
        }*/


        public function selectAll()
        {
            return $this->unModele->selectAll();
        }

        public function insert($tab)
        {
            $this->unModele->insert($tab);
        }

       

        public function delete($where)
        {
            $this->unModele->delete($where);
        }

        public function selectWhere($where)
        {
            return $this->unModele->selectWhere($where);
        }

        public function update($tab, $where)
        {
            $this->unModele->update($tab, $where);
        }

        public function selectSearch($tab, $mot)
        {
            return $this->unModele->selectSearch($tab, $mot);
        }

        public function insertProc($procedure, $tab)
        {
            $this->unModele->insertProc($procedure, $tab);
        }

        public function supprime($where){
            $this->unModele->supprime($where);
        }

        public function modifie($where)
		{
			return $this->unModele->modifie($where); 
		}

        public function maj($tab, $where)
		{
			 $this->unModele->maj($tab, $where); 
		}
    }


?>