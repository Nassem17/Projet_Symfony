<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProspectRepository")
 */
class Prospect
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $ID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Société;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Téléphone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Mails;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Clients;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setID(string $ID): self
    {
        $this->ID = $ID;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getSociété(): ?string
    {
        return $this->Société;
    }

    public function setSociété(string $Société): self
    {
        $this->Société = $Société;

        return $this;
    }

    public function getTéléphone(): ?string
    {
        return $this->Téléphone;
    }

    public function setTéléphone(string $Téléphone): self
    {
        $this->Téléphone = $Téléphone;

        return $this;
    }

    public function getMails(): ?string
    {
        return $this->Mails;
    }

    public function setMails(string $Mails): self
    {
        $this->Mails = $Mails;

        return $this;
    }

    public function getClients(): ?string
    {
        return $this->Clients;
    }

    public function setClients(string $Clients): self
    {
        $this->Clients = $Clients;

        return $this;
    }
}
