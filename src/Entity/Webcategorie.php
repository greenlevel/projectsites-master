<?php

namespace App\Entity;


use App\Repository\WebcategorieRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=WebcategorieRepository::class)
 */
class Webcategorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


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
    private $color;


    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * Indicate if the product is enabled (available in store).
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $enabled = false;


    /**
     * @var integer
     *
     * @ORM\Column(name="cposition", type="integer", options={"default" : 0})
     */
    private $cposition;


    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $ftitle;


    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $furl;


    /**
     * @var Weblink[]|Collection
     *
     * @ORM\OneToMany(
     *      targetEntity="Weblink",
     *      mappedBy="webcategorie",
     *      orphanRemoval=true,
     *      cascade={"persist"}
     * )
     @ORM\OrderBy({"position" = "ASC"})
     */
    private $weblinks;


    public function __construct()
    {

        $this->weblinks = new ArrayCollection();

    }



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


    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): void
    {
        $this->color = $color;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(User $author): void
    {
        $this->author = $author;
    }


    /**
     * Set if the product is enable.
     *
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Is the product enabled?
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Alias of getEnabled.
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getEnabled();
    }



    public function getFtitle(): ?string
    {
        return $this->ftitle;
    }

    public function setFtitle(?string $ftitle): void
    {
        $this->ftitle = $ftitle;
    }




    public function getFurl(): ?string
    {
        return $this->furl;
    }

    public function setFurl(?string $furl): void
    {
        $this->furl = $furl;
    }



    public function getCposition(): ?int
    {
        return $this->cposition;
    }

    public function setCposition(int $cposition): void
    {
        $this->cposition = $cposition;
    }




    public function getWeblinks(): Collection
    {
        return $this->weblinks;
    }

    public function addWeblink(Weblink $weblink): void
    {
        $weblink->setWebcategorie($this);
        if (!$this->weblinks->contains($weblink)) {
            $this->weblinks->add($weblink);
        }
    }

    public function removeWeblink(Weblink $weblink): void
    {
        $this->weblinks->removeElement($weblink);
    }


}
