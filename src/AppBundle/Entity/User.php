<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\TimestampableCreatedTrait;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @UniqueEntity("username")
 * @UniqueEntity("email")
 */
class User extends BaseUser
{

    use TimestampableCreatedTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     */
    protected $username;

    /**
     * @var string
     *
     */
    protected $email;


    public function __construct()
    {
        parent::__construct();
        //Setting ROLE_ADMIN for already created user:
        $this->addRole('ROLE_ADMIN');
    }


}