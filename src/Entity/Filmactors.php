<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filmactors
 *
 * @ORM\Table(name="filmactors", indexes={@ORM\Index(name="Faid", columns={"Faid"}), @ORM\Index(name="Fid", columns={"Fid"})})
 * @ORM\Entity
 */
class Filmactors
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
     * @var \Factor
     *
     * @ORM\ManyToOne(targetEntity="Factor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Faid", referencedColumnName="id")
     * })
     */
    private $faid;

    /**
     * @var \Film
     *
     * @ORM\ManyToOne(targetEntity="Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Fid", referencedColumnName="id")
     * })
     */
    private $fid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFaid(): ?Factor
    {
        return $this->faid;
    }

    public function setFaid(?Factor $faid): self
    {
        $this->faid = $faid;

        return $this;
    }

    public function getFid(): ?Film
    {
        return $this->fid;
    }

    public function setFid(?Film $fid): self
    {
        $this->fid = $fid;

        return $this;
    }


}
