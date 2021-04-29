<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="idCinema", columns={"idCinema"}), @ORM\Index(name="idEvent", columns={"idEvent"}), @ORM\Index(name="idSalle", columns={"idSalle"})})
 * @ORM\Entity
 */
class Ticket
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
     * @ORM\Column(name="idUser", type="string", length=11, nullable=false)
     */
    private $iduser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="idCinema", type="string", length=30, nullable=false)
     */
    private $idcinema;

    /**
     * @var int
     *
     * @ORM\Column(name="idSalle", type="integer", nullable=false)
     */
    private $idsalle;

    /**
     * @var string
     *
     * @ORM\Column(name="chaise", type="string", length=20, nullable=false)
     */
    private $chaise;

    /**
     * @var string
     *
     * @ORM\Column(name="idEvent", type="string", length=30, nullable=false)
     */
    private $idevent;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIduser(): ?string
    {
        return $this->iduser;
    }

    public function setIduser(string $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIdcinema(): ?string
    {
        return $this->idcinema;
    }

    public function setIdcinema(string $idcinema): self
    {
        $this->idcinema = $idcinema;

        return $this;
    }

    public function getIdsalle(): ?int
    {
        return $this->idsalle;
    }

    public function setIdsalle(int $idsalle): self
    {
        $this->idsalle = $idsalle;

        return $this;
    }

    public function getChaise(): ?string
    {
        return $this->chaise;
    }

    public function setChaise(string $chaise): self
    {
        $this->chaise = $chaise;

        return $this;
    }

    public function getIdevent(): ?string
    {
        return $this->idevent;
    }

    public function setIdevent(string $idevent): self
    {
        $this->idevent = $idevent;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }


}
