<?php

namespace App\Classes;

use App\Config\Database;
use PDO;

class Avis 
{
    public static function ajouterAvis($vehicule, $client, $note, $commentaire) {
        $sql = "INSERT INTO avis VALUES (NULL, :v, :c, :n, :com, NOW())";
        return Database::getInstance()->getConnexion()->prepare($sql)
            ->execute([
                ':v' => $vehicule,
                ':c' => $client,
                ':n' => $note,
                ':com' => $commentaire
            ]);
    }

    public static function parVehicule($id): array {
        return Database::getInstance()->getConnexion()
            ->prepare("SELECT * FROM avis WHERE id_vehicule=?")
            ->execute([$id])
            ->fetchAll(PDO::FETCH_ASSOC);
    }
}

