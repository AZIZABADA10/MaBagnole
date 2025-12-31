<?php

namespace App\Classes;

use PDO;
use App\Config\Database;

class Auth
{
    public static function register(string $nom,string $email,string $mot_de_passe,string $role = 'client'): array 
    {
        $db = Database::getInstance()->getConnexion();

        $stmt = $db->prepare(
            "SELECT COUNT(*) FROM utilisateur WHERE email = ?"
        );
        $stmt->execute([$email]);

        if ($stmt->fetchColumn() > 0) {
            return [
                'success' => false,
                'message' => "Cet email est déjà utilisé"
            ];
        }

        $hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        $stmt = $db->prepare(
            "INSERT INTO utilisateur (nom, email, mot_de_passe, `role`)
             VALUES (?, ?, ?, ?)"
        );
        $stmt->execute([$nom, $email, $hash, $role]);

        return [
            'success' => true,
            'message' => "Inscription réussie"
        ];
    }

    public static function login(string $email, string $mot_de_passe): array
    {
        $db = Database::getInstance()->getConnexion();

        $stmt = $db->prepare(
            "SELECT * FROM utilisateur WHERE email = ? LIMIT 1"
        );
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            return [
                'success' => false,
                'message' => "Cet email n'existe pas"
            ];
        }

        if (!password_verify($mot_de_passe, $user['mot_de_passe'])) {
            return [
                'success' => false,
                'message' => "Mot de passe incorrect"
            ];
        }

        $_SESSION['user'] = [
            'id'   => $user['id_utilisateur'],
            'nom'  => $user['nom'],
            'role' => $user['role']
        ];

        return [
            'success' => true,
            'message' => "Connexion réussie"
        ];
    }

    public static function logout(): void
    {
        session_destroy();
    }
}
