<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\TimestampableCreatedTrait;
use Doctrine\ORM\Mapping as ORM;


/**
 * ShowcaseStep
 *
 * @ORM\Table(name="text")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TextRepository")
 */
class Text
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
     * @ORM\Column(name="language", type="text")
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Beacon", inversedBy="texts")
     */
    private $beacon;

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
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getBeacon()
    {
        return $this->beacon;
    }

    /**
     * @param mixed $beacon
     */
    public function setBeacon($beacon)
    {
        $this->beacon = $beacon;
    }


}

