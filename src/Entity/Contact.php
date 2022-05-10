<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     *
     * @Assert\NotNull
     * @Assert\Length(min = 1, minMessage = "Votre nom doit comporter au moins 1 caractères")
     * @Assert\Length(max = 55, maxMessage = "Votre nom doit comporter au plus 55 caractères")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotNull
     * @Assert\Length(min = 2, minMessage = "Votre mail doit comporter au moins 2 caractères")
     * @Assert\Length(max = 255, maxMessage = "Votre mail doit comporter au plus 255 caractères")
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotNull
     * @Assert\Length(min = 2, minMessage = "L'objet de votre message doit comporter au moins 2 caractères")
     * @Assert\Length(max = 255, maxMessage = "L'objet de votre message doit comporter au plus 255 caractères")
     */
    private $objet;

    /**
     * @ORM\Column(type="string", length=1000)
     *
     * @Assert\NotNull
     * @Assert\Length(min = 2, minMessage = "Votre message doit comporter au moins 2 caractères")
     * @Assert\Length(max = 1000, maxMessage = "Votre message doit comporter au plus 1000 caractères")
     */
    private $message;

    /**
     * @ORM\Column(type="string", length=55)
     *
     * @Assert\Length(min = 1, minMessage = "Votre prénom doit comporter au moins 1 caractères")
     * @Assert\Length(max = 55, maxMessage = "Votre prénom doit comporter au plus 55 caractères")
     */
    private $prenom;

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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
}
