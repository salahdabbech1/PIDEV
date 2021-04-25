<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tactor
 *
 * @ORM\Table(name="tactor")
 * @ORM\Entity
 */
class Tactor
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
     * @var \DateTime
     *
     * @ORM\Column(name="born", type="date", nullable=false)
     */
    private $born;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=120, nullable=false)
     */
    private $image;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Theatre", mappedBy="tactor")
     */
    private $theatre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->theatre = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function getBorn(): ?\DateTimeInterface
    {
        return $this->born;
    }

    public function setBorn(\DateTimeInterface $born): self
    {
        $this->born = $born;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Theatre[]
     */
    public function getTheatre(): Collection
    {
        return $this->theatre;
    }

    public function addTheatre(Theatre $theatre): self
    {
        if (!$this->theatre->contains($theatre)) {
            $this->theatre[] = $theatre;
            $theatre->addTactor($this);
        }

        return $this;
    }

    public function removeTheatre(Theatre $theatre): self
    {
        if ($this->theatre->removeElement($theatre)) {
            $theatre->removeTactor($this);
        }

        return $this;
    }

}
