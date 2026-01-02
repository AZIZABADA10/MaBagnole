<?php

namespace App\Classes;
use App\Config\Database;
use PDO;

class Vehicule
{
    public function lister($limit, $offset): array
    {
        $sql = "SELECT * FROM vehicule LIMIT ? OFFSET ?";
        $stmt = Database::getConnexion()->prepare($sql);
        $stmt->execute([$limit, $offset]);
        return $stmt->fetchAll();
    }

    public function filtrerParCategorie($id_categorie): array
    {
        $sql = "SELECT * FROM vehicule WHERE id_categorie = ?";
        $stmt = Database::getConnexion()->prepare($sql);
        $stmt->execute([$id_categorie]);
        return $stmt->fetchAll();
    }
}
