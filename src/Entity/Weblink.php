<?php

namespace App\Entity;

use App\Repository\WeblinkRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=WeblinkRepository::class)
 */
class Weblink
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var Webcategorie
     *
     * @ORM\ManyToOne(targetEntity="Webcategorie", inversedBy="weblinks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $webcategorie;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $title;



    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $url;


    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", options={"default" : 0})
     */
    private $position;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }


    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }


    public function getWebcategorie(): ?Webcategorie
    {
        return $this->webcategorie;
    }

    public function setWebcategorie(Webcategorie $webcategorie): void
    {
        $this->webcategorie = $webcategorie;
    }


    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }



}
