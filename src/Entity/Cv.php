<?php

namespace App\Entity;

use App\Repository\CvRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CvRepository::class)]
class Cv
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Prenom = null;

    #[ORM\Column(nullable: true)]
    private ?int $Age = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Adresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Email = null;

    #[ORM\Column(nullable: true)]
    private ?int $Telephone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Specialite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Niveau = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Experience = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(?string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(?string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(?int $Age): self
    {
        $this->Age = $Age;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(?string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->Telephone;
    }

    public function setTelephone(?int $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->Specialite;
    }

    public function setSpecialite(?string $Specialite): self
    {
        $this->Specialite = $Specialite;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->Niveau;
    }

    public function setNiveau(?string $Niveau): self
    {
        $this->Niveau = $Niveau;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->Experience;
    }

    public function setExperience(?string $Experience): self
    {
        $this->Experience = $Experience;

        return $this;
    }
}
