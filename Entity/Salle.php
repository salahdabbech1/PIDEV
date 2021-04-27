<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle", indexes={@ORM\Index(name="salle_ibfk_1", columns={"idCin"})})
 * @ORM\Entity
 */
class Salle
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
     * @var int
     *
     * @ORM\Column(name="NumChaise", type="integer", nullable=false)
     */
    private $numchaise;

    /**
     * @var \Cinema
     *
     * @ORM\ManyToOne(targetEntity="Cinema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCin", referencedColumnName="id")
     * })
     */
    private $idcin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumchaise(): ?int
    {
        return $this->numchaise;
    }

    public function setNumchaise(int $numchaise): self
    {
        $this->numchaise = $numchaise;

        return $this;
    }

    public function getIdcin(): ?Cinema
    {
        return $this->idcin;
    }

    public function setIdcin(?Cinema $idcin): self
    {
        $this->idcin = $idcin;

        return $this;
    }


}
