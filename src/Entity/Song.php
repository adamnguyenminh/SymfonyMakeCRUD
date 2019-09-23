<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SongRepository")
 */
class Song
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
    private $SongName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Single;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSongName(): ?string
    {
        return $this->SongName;
    }

    public function setSongName(string $SongName): self
    {
        $this->SongName = $SongName;

        return $this;
    }

    public function getSingle(): ?string
    {
        return $this->Single;
    }

    public function setSingle(string $Single): self
    {
        $this->Single = $Single;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
