<?php

namespace App\Classes;
use App\Config\Database;
use PDO;

class Categorie
{
    public function ajouter($titre, $description): bool
    {
        $db = Database::getConnexion();
        $sql = "INSERT INTO categorie (titre, description) VALUES (?, ?)";
        return $db->prepare($sql)->execute([$titre, $description]);
    }

    public function lister(): array
    {
        return Database::getConnexion()
            ->query("SELECT * FROM categorie")
            ->fetchAll();
    }
}
