<?php 
    abstract class Connexion {
        private static $connexion;

        public function __construct(){
            $this->dbconnexion();
        }

        public function dbconnexion()
        {
            if(self::$connexion !== null)
            {
                return self::$connexion;
            }

            self::$connexion = new PDO("mysql:host=localhost;dbname=messagerie;charset=utf8", 'root', '');
            return self::$connexion;
        }

        protected function execute($query, $params = array())
        {
            $stmt = self::$connexion->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        }


    }
?>