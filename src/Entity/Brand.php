<?php

namespace App\Entity;

use App\Repository\BrandRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BrandRepository::class)
 */
class Brand
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\OneToMany(targetEntity=Phone::class, mappedBy="Brand")
     */
    private $phones;

    /**
     * @ORM\OneToMany(targetEntity=Tablet1::class, mappedBy="Brand")
     */
    private $tablet1s;

    public function __construct()
    {
        $this->phones = new ArrayCollection();
        $this->tablet1s = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return Collection|Phone[]
     */
    public function getPhones(): Collection
    {
        return $this->phones;
    }

    public function addPhone(Phone $phone): self
    {
        if (!$this->phones->contains($phone)) {
            $this->phones[] = $phone;
            $phone->setBrand($this);
        }

        return $this;
    }

    public function removePhone(Phone $phone): self
    {
        if ($this->phones->removeElement($phone)) {
            // set the owning side to null (unless already changed)
            if ($phone->getBrand() === $this) {
                $phone->setBrand(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Tablet1[]
     */
    public function getTablet1s(): Collection
    {
        return $this->tablet1s;
    }

    public function addTablet1(Tablet1 $tablet1): self
    {
        if (!$this->tablet1s->contains($tablet1)) {
            $this->tablet1s[] = $tablet1;
            $tablet1->setBrand($this);
        }

        return $this;
    }

    public function removeTablet1(Tablet1 $tablet1): self
    {
        if ($this->tablet1s->removeElement($tablet1)) {
            // set the owning side to null (unless already changed)
            if ($tablet1->getBrand() === $this) {
                $tablet1->setBrand(null);
            }
        }

        return $this;
    }
}
