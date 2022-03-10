<?php

namespace App\Entity;

use App\Repository\PokemonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]
class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'integer')]
    private $pv;

    #[ORM\Column(type: 'integer')]
    private $attaque;

    #[ORM\Column(type: 'integer')]
    private $attaque_spe;

    #[ORM\Column(type: 'integer')]
    private $defense;

    #[ORM\Column(type: 'integer')]
    private $defense_spe;

    #[ORM\Column(type: 'integer')]
    private $vitesse;

    #[ORM\Column(type: 'integer')]
    private $numero;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPv(): ?int
    {
        return $this->pv;
    }

    public function setPv(int $pv): self
    {
        $this->pv = $pv;

        return $this;
    }

    public function getAttaque(): ?int
    {
        return $this->attaque;
    }

    public function setAttaque(int $attaque): self
    {
        $this->attaque = $attaque;

        return $this;
    }

    public function getAttaqueSpe(): ?int
    {
        return $this->attaque_spe;
    }

    public function setAttaqueSpe(int $attaque_spe): self
    {
        $this->attaque_spe = $attaque_spe;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getDefenseSpe(): ?int
    {
        return $this->defense_spe;
    }

    public function setDefenseSpe(int $defense_spe): self
    {
        $this->defense_spe = $defense_spe;

        return $this;
    }

    public function getVitesse(): ?int
    {
        return $this->vitesse;
    }

    public function setVitesse(int $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }
}
