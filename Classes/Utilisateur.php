<?php

namespace App\Classes;
use App\Config\Database;
use PDO;

abstract class Utilisateur
{
    protected int $id_utilisateur;
    protected string $nom;
    protected string $email;
    protected string $mot_de_passe;
    protected string $role;

    public function __construct($nom, $email, $mot_de_passe, $role = 'client')
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->mot_de_passe = password_hash($mot_de_passe, PASSWORD_DEFAULT);
        $this->role = $role;
    }

    public function seConnecter($email, $mot_de_passe): bool
    {
        $db = Database::getConnexion();
        $sql = "SELECT * FROM utilisateur WHERE email = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$email]);

        $user = $stmt->fetch();

        return $user && password_verify($mot_de_passe, $user['mot_de_passe']);
    }
}
