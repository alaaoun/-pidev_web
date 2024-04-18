<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=50, nullable=false)
     */
    private $model;

    /**
     * @var int
     *
     * @ORM\Column(name="qte", type="integer", nullable=false)
     */
    private $qte;

    /**
     * @var string
     *
     * @ORM\Column(name="datersv", type="string", length=50, nullable=false)
     */
    private $datersv;

    /**
     * @var string
     *
     * @ORM\Column(name="heurersv", type="string", length=20, nullable=false)
     */
    private $heurersv;

    /**
     * @var int
     *
     * @ORM\Column(name="periode", type="integer", nullable=false)
     */
    private $periode;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="impot", type="float", precision=10, scale=0, nullable=false)
     */
    private $impot;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=false)
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="mtotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $mtotal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(int $qte): static
    {
        $this->qte = $qte;

        return $this;
    }

    public function getDatersv(): ?string
    {
        return $this->datersv;
    }

    public function setDatersv(string $datersv): static
    {
        $this->datersv = $datersv;

        return $this;
    }

    public function getHeurersv(): ?string
    {
        return $this->heurersv;
    }

    public function setHeurersv(string $heurersv): static
    {
        $this->heurersv = $heurersv;

        return $this;
    }

    public function getPeriode(): ?int
    {
        return $this->periode;
    }

    public function setPeriode(int $periode): static
    {
        $this->periode = $periode;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImpot(): ?float
    {
        return $this->impot;
    }

    public function setImpot(float $impot): static
    {
        $this->impot = $impot;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): static
    {
        $this->total = $total;

        return $this;
    }

    public function getMtotal(): ?float
    {
        return $this->mtotal;
    }

    public function setMtotal(float $mtotal): static
    {
        $this->mtotal = $mtotal;

        return $this;
    }


}
