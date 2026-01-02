<?php

namespace App\Classes;
use App\Config\Database;
use PDO;

class Avis
{
    public function ajouter($id_user, $id_vehicule, $commentaire): bool
    {
        $sql = "INSERT INTO avis VALUES (?, ?, ?, NOW())";
        return Database::getConnexion()
            ->prepare($sql)
            ->execute([$id_user, $id_vehicule, $commentaire]);
    }

    public function supprimer($id_user, $id_vehicule): bool
    {
        $sql = "UPDATE avis SET commentaire='[supprimé]' 
                WHERE id_utilisateur=? AND id_vehicule=?";
        return Database::getConnexion()
            ->prepare($sql)
            ->execute([$id_user, $id_vehicule]);
    }
}
