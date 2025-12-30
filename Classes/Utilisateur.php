<?php

namespace App\Classes;
use App\Config\Database;
use PDO;

class Utilisateur 
{

    protected int $id_utilisateur;
    protected string $nom;
    protected string $email;	
    protected string $role;

    public function __construct($id_utilisateur,$nom,$email,$role)
    {
        $this->id_utilisateur = $id_utilisateur ;
        $this->nom = $nom ;
        $this->email = $email;
        $this->role = $role;
    }

    public function getIdItilisateur(): int
    {
        return $this->id_utilisateur;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getRole(): string
    {
        return $this->role;
    }
    public function setNom(string $newNom): void
    {
        $this->nom = $newNom;
    }
    public function setEmail(string $newEmail): void
    {
        $this->email = $newEmail;
    }
    public function setRole(stirng $newRole): void
    {
        $this->role = $newRole ;
    }

}




