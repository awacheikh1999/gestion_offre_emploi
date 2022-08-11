<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $TitreOffre = null;



    #[ORM\Column(nullable: true)]
    private ?int $Salaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CategorieOffre = null;



    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Entreprise = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Poste = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Disponiblite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreOffre(): ?string
    {
        return $this->TitreOffre;
    }

    public function setTitreOffre(?string $TitreOffre): self
    {
        $this->TitreOffre = $TitreOffre;

        return $this;
    }



    public function getSalaire(): ?int
    {
        return $this->Salaire;
    }

    public function setSalaire(?int $Salaire): self
    {
        $this->Salaire = $Salaire;

        return $this;
    }



    public function getEntreprise(): ?string
    {
        return $this->Entreprise;
    }

    public function setEntreprise(?string $Entreprise): self
    {
        $this->Entreprise = $Entreprise;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->Poste;
    }

    public function setPoste(?string $Poste): self
    {
        $this->Poste = $Poste;

        return $this;
    }

    public function getDisponiblite(): ?string
    {
        return $this->Disponiblite;
    }

    public function setDisponiblite(?string $Disponiblite): self
    {
        $this->Disponiblite = $Disponiblite;

        return $this;
    }
}
