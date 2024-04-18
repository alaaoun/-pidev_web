<?php

namespace App\Entity;

use App\Entity\Station;
use App\Repository\TrotinetteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrotinetteRepository")
 * 
 */
class Trotinette
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_trotinette", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTrotinette;

    /**
     * @var int
     *
     * @ORM\Column(name="vitesse", type="integer")
     */
    private $vitesse ;

    /**
     * @var int
     *
     * @ORM\Column(name="charge", type="integer", nullable=false)
     */
    private $charge;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=255, nullable=false)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="dispo", type="string", length=255, nullable=false)
     */
    private $dispo;

    /**
     * @var \Station
     *
     * @ORM\ManyToOne(targetEntity="Station")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_station", referencedColumnName="id_station")
     * })
     */
    private $idStation;

    public function getIdTrotinette(): ?int
    {
        return $this->idTrotinette;
    }

    public function getVitesse(): ?int
    {
        return $this->vitesse;
    }

    public function setVitesse(int $vitesse): static
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    public function getCharge(): ?int
    {
        return $this->charge;
    }

    public function setCharge(int $charge): static
    {
        $this->charge = $charge;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): static
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getDispo(): ?string
    {
        return $this->dispo;
    }

    public function setDispo(string $dispo): static
    {
        $this->dispo = $dispo;

        return $this;
    }

    public function getIdStation(): ?Station
    {
        return $this->idStation;
    }

    public function setIdStation(?Station $idStation): static
    {
        $this->idStation = $idStation;

        return $this;
    }


}
