<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Film
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
     * @ORM\Column(name="trailer", type="text", length=65535, nullable=false)
     */
    private $trailer;

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
     * @ORM\Column(name="image", type="string", length=70, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="director", type="text", length=65535, nullable=false)
     */
    private $director;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;




    /**
     * @ORM\ManyToMany(targetEntity="Factor")
     * @ORM\JoinTable(name="film_actors")
     */
        private $filmActors;

    public function __toString() {
        return $this->name;
    }
    public function __construct()
    {
        $this->filmActors = new ArrayCollection();
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

    public function getTrailer(): ?string
    {
        return $this->trailer;
    }

    public function setTrailer(string $trailer): self
    {
        $this->trailer = $trailer;

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

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(string $director): self
    {
        $this->director = $director;

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

    /**
     * @return Collection|factor[]
     */
    public function getFilmActors(): Collection
    {
        return $this->filmActors;
    }

    public function addFilmActor(factor $filmActor): self
    {
        if (!$this->filmActors->contains($filmActor)) {
            $this->filmActors[] = $filmActor;
        }

        return $this;
    }

    public function removeFilmActor(factor $filmActor): self
    {
        $this->filmActors->removeElement($filmActor);

        return $this;
    }


}
