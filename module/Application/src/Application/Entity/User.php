<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 08/03/16
 * Time: 10:58
 */

namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */
class User
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="int")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}