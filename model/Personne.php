<?php 
    require_once("connexion.php");
    class Personne extends Connexion 
    {
        public function create($_nom, $_prenom,  $_adRue, $_adNum, $_adCp, $_adVille, $_dateNaissance, $_classes,$_nomEnfant)
        {
            $requete = "INSERT INTO personne (nom, prenom, ad_rue, ad_num, ad_cp, ad_ville, date_naissance, classes, nom_enfant) VALUES (:nom, :prenom, :adRue, :adNum, :adCp, :adVille, :dateNaissance, :classes, :nomEnfant)";

            $tabChamps= array(
                ":nom" => $_nom,
                ":prenom" => $_prenom,
                ":adRue" => $_adRue,
                ":adNum" => $_adNum,
                ":adCp" => $_adCp,
                ":adVille" => $_adVille, 
                ":dateNaissance" => $_dateNaissance,
                ":classes" => $_classes,
                ":nom_enfant" => $_nomEnfant,
            );

            $this->execute($requete, $tabChamps);
        }

        public function read()
        {
            $requete = "SELECT * FROM personne";
            return $this->execute($requete);
        }
public function readConnexion($_login){
    //SELECT + nom de tes colonnes dans la base de données
    $requete = "SELECT id, `login`, mdp, nom, prenom, nom_enfant, classes FROM personne WHERE `login` = :login";
    $tabChamps = array(
        ":login" => $_login);
        return $this->execute($requete,$tabChamps);
}
        public function readById($_id)
        {
            $requete = "SELECT * FROM personne WHERE id = :id";
            $tabChamps = array(
                ":id" => $_id
            );
            return $this->execute($requete, $tabChamps);
        }

        public function update($_id, $_nom, $_prenom, $_adRue, $_adNum, $_adCp, $_adVille, $_dateNaissance, $_classes, $_nomEnfant)
        {
            $requete = "UPDATE personne SET nom = :nom, prenom = :prenom, ad_rue = :adRue, ad_num = :adNum, ad_cp = :adCp, ad_ville = :adVille, date_naissance = :dateNaissance, classes = :classes, nom_enfant = :nomEnfant WHERE id = :id";

            $tabChamps= array(
                ":nom" => $_nom,
                ":prenom" => $_prenom,
                ":adRue" => $_adRue,
                ":adNum" => $_adNum,
                ":adCp" => $_adCp,
                ":adVille" => $_adVille,
                ":dateNaissance" => $_dateNaissance,
                ":classes" => $_classes,
                ":nom_enfant" => $_nomEnfant,
                ":id" => $_id
            );

            return $this->execute($requete, $tabChamps);
        }

        public function delete($_id)
        {
            $requete = "DELETE FROM personne WHERE id = :id";
            $tabChamps = array(
                ":id" => $_id
            );
            $this->execute($requete, $tabChamps);
        }
    }
?>