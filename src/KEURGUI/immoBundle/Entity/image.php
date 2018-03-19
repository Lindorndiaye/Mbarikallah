<?php

namespace KEURGUI\immoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * image.
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="KEURGUI\immoBundle\Repository\imageRepository")
 */
class image
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
     * @ORM\Column(name="image", type="string", length=50 ,nullable=true)
     */
    private $image;
    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\bien", inversedBy="image")
     * @ORM\JoinColumn(name="bien_id", referencedColumnName="id")
     */
    private $bien;
    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\archive", inversedBy="image")
     * @ORM\JoinColumn(name="archive_id", referencedColumnName="id")
     */
    private $archive;

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
     * Set image.
     *
     * @param string $image
     *
     * @return image
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    public function __toString()
    {
        return $this->image;
    }

    /**
     * Set bien.
     *
     * @param \KEURGUI\immoBundle\Entity\bien $bien
     *
     * @return image
     */
    public function setBien(\KEURGUI\immoBundle\Entity\bien $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien.
     *
     * @return \KEURGUI\immoBundle\Entity\bien
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set archive.
     *
     * @param \KEURGUI\immoBundle\Entity\archive $archive
     *
     * @return image
     */
    public function setArchive(\KEURGUI\immoBundle\Entity\archive $archive = null)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive.
     *
     * @return \KEURGUI\immoBundle\Entity\archive
     */
    public function getArchive()
    {
        return $this->archive;
    }
}
