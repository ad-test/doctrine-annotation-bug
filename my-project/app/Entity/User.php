<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use MyLib\Annotation as MA;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @MA\Example
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $name;

}
