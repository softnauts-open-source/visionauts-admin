<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\TimestampableCreatedTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Hateoas\Configuration\Annotation as Hateoas;
use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Place
 *
 * @ORM\Table(name="beacon")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BeaconRepository")
 */
class Beacon
{

    use TimestampableCreatedTrait;


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
     * @ORM\Column(name="uuid", type="string", length=255)
     */
    private $uuid;

    /**
     * @var string
     *
     * @ORM\Column(name="minor", type="string")
     */
    private $minor;

    /**
     * @var string
     *
     * @ORM\Column(name="major", type="string")
     */
    private $major;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled = true;

    /**
     * @ORM\OneToMany(
     *     targetEntity="AppBundle\Entity\Text",
     *     mappedBy="beacon",
     *     cascade={"persist", "remove"},
     *     fetch="EXTRA_LAZY",
     *     orphanRemoval=true,
     * )
     */
    private $texts;

    public function __construct()
    {
        $this->texts = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return string
     */
    public function getMinor()
    {
        return $this->minor;
    }

    /**
     * @param string $minor
     */
    public function setMinor($minor)
    {
        $this->minor = $minor;
    }

    /**
     * @return string
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * @param string $major
     */
    public function setMajor($major)
    {
        $this->major = $major;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    public function addText(Text $text)
    {
        if ($this->texts->contains($text)) {
            return;
        }

        $this->texts[] = $text;
        // needed to update the owning side of the relationship!
        $text->setBeacon($this);
    }

    public function removeText(Text $text)
    {
        if (!$this->texts->contains($text)) {
            return;
        }

        $this->texts->removeElement($text);
        // needed to update the owning side of the relationship!
        $text->setBeacon(null);
    }

    /**
     * @return Collection|Text[]
     */
    public function getText()
    {
        return $this->texts;
    }

}

