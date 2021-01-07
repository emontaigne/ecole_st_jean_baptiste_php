<?php 
    require_once("connexion.php");
    class Event extends Connexion 
    {
        public function create($_dateEvent, $_titreEvent, $_contenuEvent)
        {
            $requete = "INSERT INTO agenda (date_event,titre_event,contenu_event) VALUES (:dateEvent, :titreEvent, :contenuEvent)";

            $tabChamps= array(
                ":dateEvent" => $_dateEvent,
                ":titreEvent" => $_titreEvent,
                ":contenuEvent" => $_contenuEvent,
            );

            $this->execute($requete, $tabChamps);
           
        }

        public function read()
        {
            $requete = "SELECT *, DATE_FORMAT(date_event, '%d-%m') as 'format_date' FROM agenda";
            return $this->execute($requete);
        }

        public function readById($_id)
        {
            $requete = "SELECT * FROM agenda WHERE id = :id";
            $tabChamps = array(
                ":id" => $_id
            );
            return $this->execute($requete, $tabChamps);
           
        }

        public function update($_id, $_dateEvent, $_titreEvent, $_contenuEvent)
        {
            $requete = "UPDATE agenda SET date_event = :dateEvent, titre_event = :titreEvent, contenu_event = :contenuEvent WHERE id = :id";

            $tabChamps= array(
                ":dateEvent" => $_dateEvent,
                ":titreEvent" => $_titreEvent,
                ":contenuEvent" => $_contenuEvent,
                ":id" => $_id,
            );

            return $this->execute($requete, $tabChamps);
           
        }

        public function delete($_id)
        {
            $requete = "DELETE FROM agenda WHERE id = :id";
            $tabChamps = array(
                ":id" => $_id
            );
            $this->execute($requete, $tabChamps);
           
        }
    }
?>