<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concert
 *
 * @ORM\Table(name="concert")
 * @ORM\Entity
 */
class Concert
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
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="idmusician", type="string", length=30, nullable=false)
     */
    private $idmusician;

    /**
     * @var string
     *
     * @ORM\Column(name="musics", type="text", length=65535, nullable=false)
     */
    private $musics;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="trailer", type="string", length=111, nullable=false)
     */
    private $trailer;

    /**
     * @return mixed
     */
    public function getMusician()
    {
        return $this->musician;
    }

    /**
     * @param mixed $musician
     */
    public function setMusician($musician): void
    {
        $this->musician = $musician;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIdmusician(): ?string
    {
        return $this->idmusician;
    }

    public function setIdmusician(string $idmusician): self
    {
        $this->idmusician = $idmusician;

        return $this;
    }

    public function getMusics(): ?string
    {
        return $this->musics;
    }

    public function setMusics(string $musics): self
    {
        $this->musics = $musics;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getTrailer(): ?string
    {
        return $this->trailer;
    }

    public function setTrailer(string $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }


}
