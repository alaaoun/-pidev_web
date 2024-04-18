<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $model = null;

    #[ORM\Column(nullable: true)]
    private ?int $qte = null;

    #[ORM\Column(nullable: true)]
    private ?int $prix = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $datersv = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $heurersv = null;

    #[ORM\Column(nullable: true)]
    private ?int $periode = null;

    #[ORM\Column(nullable: true)]
    private ?float $impot = null;

    #[ORM\Column(nullable: true)]
    private ?float $total = null;

    #[ORM\Column(nullable: true)]
    private ?float $mtotal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(?int $qte): static
    {
        $this->qte = $qte;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDatersv(): ?string
    {
        return $this->datersv;
    }

    public function setDatersv(?string $datersv): static
    {
        $this->datersv = $datersv;

        return $this;
    }

    public function getHeurersv(): ?string
    {
        return $this->heurersv;
    }

    public function setHeurersv(?string $heurersv): static
    {
        $this->heurersv = $heurersv;

        return $this;
    }

    public function getPeriode(): ?int
    {
        return $this->periode;
    }

    public function setPeriode(?int $periode): static
    {
        $this->periode = $periode;

        return $this;
    }

    public function getImpot(): ?float
    {
        return $this->impot;
    }

    public function setImpot(?float $impot): static
    {
        $this->impot = $impot;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): static
    {
        $this->total = $total;

        return $this;
    }

    public function getMtotal(): ?float
    {
        return $this->mtotal;
    }

    public function setMtotal(?float $mtotal): static
    {
        $this->mtotal = $mtotal;

        return $this;
    }
}
