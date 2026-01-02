<?php

namespace App\Classes;
use App\Config\Database;
use PDO;

class Reservation
{
    public function ajouter($id_user, $id_vehicule, $date_debut, $date_fin): bool
    {
        $db = Database::getConnexion();
        $sql = "CALL AjouterReservation(?,?,?,?)";
        return $db->prepare($sql)->execute([
            $id_user,
            $id_vehicule,
            $date_debut,
            $date_fin
        ]);
    }
}
