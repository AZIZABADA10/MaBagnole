<?php

namespace App\Classes;

use App\Config\Database;
use PDO;

class Categorie
{
    private ?int $id_categorie;
    private string $titre;
    private string $description;

    public function __construct(string $titre, string $description, ?int $id = null)
    {
        $this->id_categorie = $id;
        $this->titre = $titre;
        $this->description = $description;
    }

    public function ajouter(): bool
    {
        $sql = "INSERT INTO categorie (titre, description)
                VALUES (:titre, :description)";

        return Database::getConnexion()
            ->prepare($sql)
            ->execute([
                ':titre' => $this->titre,
                ':description' => $this->description
            ]);
    }

    public function modifier(): bool
    {
        $sql = "UPDATE categorie SET titre=:titre, description=:description
                WHERE id_categorie=:id";

        return Database::getConnexion()
            ->prepare($sql)
            ->execute([
                ':titre' => $this->titre,
                ':description' => $this->description,
                ':id' => $this->id_categorie
            ]);
    }

    public function supprimer(): bool
    {
        return Database::getConnexion()
            ->prepare("DELETE FROM categorie WHERE id_categorie=:id")
            ->execute([':id' => $this->id_categorie]);
    }

    public static function lister(): array
    {
        return Database::getConnexion()
            ->query("SELECT * FROM categorie ORDER BY titre")
            ->fetchAll(PDO::FETCH_ASSOC);
    }
}
