<?php

class Shows

{
    public $bdd;

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getAllShowTypes()
    {
        $query = $this->bdd->query('SELECT * FROM showtypes');
        return $query->fetchAll();
    }
}
