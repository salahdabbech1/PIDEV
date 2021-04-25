<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Theatre
 *
 * @ORM\Table(name="theatre")
 * @ORM\Entity
 */
class Theatre
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
     * @ORM\Column(name="genre", type="string", length=30, nullable=false)
     */
    private $genre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rdate", type="date", nullable=false)
     */
    private $rdate;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=150, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="trailer", type="string", length=10000, nullable=false)
     */
    private $trailer;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=600, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="poster", type="text", length=0, nullable=false)
     */
    private $poster;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tactor", inversedBy="theatre")
     * @ORM\JoinTable(name="theatre_actors",
     *   joinColumns={
     *     @ORM\JoinColumn(name="theatre_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tactor_id", referencedColumnName="id")
     *   }
     * )
     */
    
    private $tactor;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tactor = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getRdate(): ?\DateTimeInterface
    {
        return $this->rdate;
    }

    public function setRdate(\DateTimeInterface $rdate): self
    {
        $this->rdate = $rdate;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->poster;
    }

    public function setPoster(string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * @return Collection|Tactor[]
     */
    public function gettheatreActors(): Collection
    {
        return $this->tactor;
    }

    public function addtheatreActors(Tactor $tactor): self
    {
        if (!$this->tactor->contains($tactor)) {
            $this->tactor[] = $tactor;
        }

        return $this;
    }

    public function removetheatreActors(Tactor $tactor): self
    {
        $this->tactor->removeElement($tactor);

        return $this;
    }

}
