<?php

namespace App\Classes;
use App\Config\Database;
use App\Classes\Utilisateur;
use PDO;


class Client extends Utilisateur
{
    public function sInscrire(): bool
    {
        $db = Database::getConnexion();

        $sql = "INSERT INTO utilisateur (nom, email, mot_de_passe, `role`)
                VALUES (?, ?, ?, 'client')";
        $stmt = $db->prepare($sql);

        return $stmt->execute([
            $this->nom,
            $this->email,
            $this->mot_de_passe
        ]);
    }
}





