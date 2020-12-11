<?php 
    require_once("connexion.php");
    class Personne extends Connexion 
    {
        public function create($_nom, $_prenom, $_dateNaissance,$_classes, $_adRue, $_adNum, $_adCp, $_adVille, $_role)
        {
            $requete = "INSERT INTO personne (nom, prenom, date_naissance, classes, ad_rue, ad_num, ad_cp, ad_ville, `role`) VALUES (:nom, :prenom, :dateNaissance, :classes, :adRue, :adNum, :adCp, :adVille, `:role`)";

            $tabChamps= array(
                ":nom" => $_nom,
                ":prenom" => $_prenom,
                ":dateNaissance" => $_dateNaissance,
                ":classes" => $_classes,
                ":adRue" => $_adRue,
                ":adNum" => $_adNum,
                "adCp" => $_adCp,
                ":adVille" => $_adVille,
                ":role" => $_role
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
    $requete = "SELECT id, `login`, mdp, `role` FROM personne WHERE `login` = :login";
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

        public function update($_id, $_nom, $_prenom, $_dateNaissance, $_classes, $_adRue, $_adNum, $_adCp, $_adVille, $_role)
        {
            $requete = "UPDATE personne SET nom = :nom, prenom = :prenom, dateNaissance = :dateNaissance, ad_rue = :adRue, ad_num = :adNum, ad_cp = :adCp, ad_ville = :adVille, classes = :classes, `role = :role` WHERE id = :id";

            $tabChamps= array(
                ":nom" => $_nom,
                ":prenom" => $_prenom,
                ":dateNaissance" => $_dateNaissance,
                ":adRue" => $_adRue,
                ":adNum" => $_adNum,
                "adCp" => $_adCp,
                ":adVille" => $_adVille,
                ":classes" => $_classes,
                ":role" => $_role,
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