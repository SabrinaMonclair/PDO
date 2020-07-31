<?php

class Clients

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

    public function getAllClients()
    {
        $query = $this->bdd->query('SELECT * FROM clients');
        return $query->fetchAll();
    }

    public function getAllClientsObj()
    {
        $query = $this->bdd->query('SELECT * FROM clients');
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


    public function getSomeClients($number)
    {
        $requete = 'SELECT * FROM clients LIMIT ' . $number;
        $query = $this->bdd->query($requete);
        return $query->fetchAll();
    }
}
