<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Song", mappedBy="category")
     */
    private $song;

    public function __construct()
    {
        $this->song = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return Collection|Song[]
     */
    public function getSong(): Collection
    {
        return $this->song;
    }

    public function addSong(Song $song): self
    {
        if (!$this->song->contains($song)) {
            $this->song[] = $song;
            $song->setCategory($this);
        }

        return $this;
    }

    public function removeSong(Song $song): self
    {
        if ($this->song->contains($song)) {
            $this->song->removeElement($song);
            // set the owning side to null (unless already changed)
            if ($song->getCategory() === $this) {
                $song->setCategory(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->Title;
    }
}
