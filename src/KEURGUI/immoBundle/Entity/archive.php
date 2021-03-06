<?php

namespace KEURGUI\immoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * bien.
 *
 * @ORM\Table(name="archive")
 * @ORM\Entity(repositoryClass="KEURGUI\immoBundle\Repository\archiveRepository")
 */
class archive
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;
    /**
     * @var date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="archeve", type="integer")
     */
    private $archiv3;
    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\typebien")
     */
    private $type;
    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\localite")
     */
    private $localite;
    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\Proprietaire")
     */
    private $proprietaire;

    /**
     * @var ArrayCollection image
     * @ORM\OneToMany(targetEntity="KEURGUI\immoBundle\Entity\image", mappedBy="archive",cascade={"all"})
     */
    protected $image;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->image = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return archive
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return archive
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix.
     *
     * @param int $prix
     *
     * @return archive
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set type.
     *
     * @param \KEURGUI\immoBundle\Entity\typebien $type
     *
     * @return archive
     */
    public function setType(\KEURGUI\immoBundle\Entity\typebien $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return \KEURGUI\immoBundle\Entity\typebien
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set localite.
     *
     * @param \KEURGUI\immoBundle\Entity\localite $localite
     *
     * @return archive
     */
    public function setLocalite(\KEURGUI\immoBundle\Entity\localite $localite = null)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite.
     *
     * @return \KEURGUI\immoBundle\Entity\localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set proprietaire.
     *
     * @param \KEURGUI\immoBundle\Entity\Proprietaire $proprietaire
     *
     * @return archive
     */
    public function setProprietaire(\KEURGUI\immoBundle\Entity\Proprietaire $proprietaire = null)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire.
     *
     * @return \KEURGUI\immoBundle\Entity\Proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Add image.
     *
     * @param \KEURGUI\immoBundle\Entity\image $image
     *
     * @return archive
     */
    public function addImage(\KEURGUI\immoBundle\Entity\image $image)
    {
        $this->image[] = $image;

        return $this;
    }

    /**
     * Remove image.
     *
     * @param \KEURGUI\immoBundle\Entity\image $image
     */
    public function removeImage(\KEURGUI\immoBundle\Entity\image $image)
    {
        $this->image->removeElement($image);
    }

    /**
     * Get image.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set archiv3.
     *
     * @param int $archiv3
     *
     * @return archive
     */
    public function setArchiv3($archiv3)
    {
        $this->archiv3 = $archiv3;

        return $this;
    }

    /**
     * Get archiv3.
     *
     * @return int
     */
    public function getArchiv3()
    {
        return $this->archiv3;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return archive
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    public function __toString()
    {
        return $this->date;
    }
}
