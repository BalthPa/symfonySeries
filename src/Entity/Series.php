<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeriesRepository")
 */
class Series
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $nom;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank
     */
    private $anneeDebut;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $anneeFin;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     */
    private $saisons;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categories", inversedBy="series")
     */
    private $categorie;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\File(mimeTypes={"image/png", "image/jpeg"})
     */
    private $affiche;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAnneeDebut(): ?\DateTimeInterface
    {
        return $this->anneeDebut;
    }

    public function setAnneeDebut(\DateTimeInterface $anneeDebut): self
    {
        $this->anneeDebut = $anneeDebut;

        return $this;
    }

    public function getAnneeFin(): ?\DateTimeInterface
    {
        return $this->anneeFin;
    }

    public function setAnneeFin(\DateTimeInterface $anneeFin): self
    {
        $this->anneeFin = $anneeFin;

        return $this;
    }

    public function getSaisons(): ?int
    {
        return $this->saisons;
    }

    public function setSaisons(int $saisons): self
    {
        $this->saisons = $saisons;

        return $this;
    }

    public function getCategorie(): ?Categories
    {
        return $this->categorie;
    }

    public function setCategorie(?Categories $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getAffiche()
    {
        return $this->affiche;
    }

    public function setAffiche($affiche)
    {
        $this->affiche = $affiche;

        return $this;
    }
}
