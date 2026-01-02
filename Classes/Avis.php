<?php

namespace App\Classes;

use App\Config\Database;
use PDO;

class Avis
{
    private int $id_utilisateur;
    private int $id_vehicule;
    private string $commentaire;

    public function __construct(int $id_utilisateur, int $id_vehicule, string $commentaire)
    {
        $this->id_utilisateur = $id_utilisateur;
        $this->id_vehicule = $id_vehicule;
        $this->commentaire = $commentaire;
    }


    public function ajouterAvis(): bool
    {
        $sql = "INSERT INTO avis (id_utilisateur, id_vehicule, commentaire, date_avis)
                VALUES (?, ?, ?, NOW())";

        return Database::getConnexion()->prepare($sql)->execute([$this->id_utilisateur,$this->id_vehicule,$this->commentaire]);
    }


    public function supprimerAvis(): bool
    {
        $sql = "UPDATE avis 
                SET commentaire = '[supprimé]' 
                WHERE id_utilisateur = ? AND id_vehicule = ?";

        return Database::getConnexion()->prepare($sql)->execute([$this->id_utilisateur,$this->id_vehicule]);
    }


    public function modifierAvis(string $newCommentaire): bool
    {
        $sql = "UPDATE avis 
                SET commentaire = ? 
                WHERE id_utilisateur = ? AND id_vehicule = ?";

        return Database::getConnexion()->prepare($sql)->execute([$newCommentaire,$this->id_utilisateur,$this->id_vehicule]);
    }
}
