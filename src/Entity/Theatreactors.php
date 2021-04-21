<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theatreactors
 *
 * @ORM\Table(name="theatreactors", indexes={@ORM\Index(name="theatreactors_ibfk_1", columns={"TactorId"}), @ORM\Index(name="TheatreId", columns={"TheatreId"})})
 * @ORM\Entity
 */
class Theatreactors
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
     * @var \Tactor
     *
     * @ORM\ManyToOne(targetEntity="Tactor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TactorId", referencedColumnName="id")
     * })
     */
    private $tactorid;

    /**
     * @var \Theatre
     *
     * @ORM\ManyToOne(targetEntity="Theatre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TheatreId", referencedColumnName="id")
     * })
     */
    private $theatreid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTactorid(): ?Tactor
    {
        return $this->tactorid;
    }

    public function setTactorid(?Tactor $tactorid): self
    {
        $this->tactorid = $tactorid;

        return $this;
    }

    public function getTheatreid(): ?Theatre
    {
        return $this->theatreid;
    }

    public function setTheatreid(?Theatre $theatreid): self
    {
        $this->theatreid = $theatreid;

        return $this;
    }


}
