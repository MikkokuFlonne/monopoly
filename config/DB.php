<?php
class DB{

    /**
     * Représente la connexion avec PDO.
     */
    public static $pdo;

    /**
     * Retourne la connexion PDO existante
     * ou la créer si elle n'a pas été faite
    */
    public static function getPdo() {
        // On s'assure que la connexion à la BDD ne se fait qu'une seule fois
        if (self::$pdo === null) {
            self::$pdo = new PDO('mysql:host=localhost;dbname=monopoly;charset=UTF8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]);
        }

        return self::$pdo;
    }

    /**
     * Permet de lancer une requête SQL
     * qui ne retourne pas de résultat (INSERT, UPDATE, DELETE)
     */
    public static function postQuery($sql, $bindings = []) {
        $db = self::getPdo();
  
        $query = $db->prepare($sql);
        $query->execute($bindings);
  
        // On retourne la requête pour l'utiliser dans la méthode query()
        return $query;
    }

    /**
     * Permet de lancer une requête SQL
     * et retourne les résultats.
     */
    public static function query($sql, $bindings = []) {
        $query = self::postQuery($sql, $bindings);

        return $query->fetchAll();
    }

    public static function lastInsertId(){
        return self::$pdo->lastInsertId();
    }




}