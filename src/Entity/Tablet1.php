<?php

namespace App\Entity;

use App\Repository\Tablet1Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Tablet1Repository::class)
 */
class Tablet1
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Brand::class, inversedBy="tablet1s")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Brand;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @Assert\File(
     * maxSide = "10M" ,
     * mimeTypes = 
     * )
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Image;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?Brand
    {
        return $this->Brand;
    }

    public function setBrand(?Brand $Brand): self
    {
        $this->Brand = $Brand;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getImage()
    {
        return $this->Image;
    }

    public function setImage( $Image)
    {
        $this->Image = $Image;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(?\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }
}
