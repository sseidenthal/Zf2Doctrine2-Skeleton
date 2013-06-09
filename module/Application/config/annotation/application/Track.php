<?php
/**
 * This is an example for ORM  Mapper for AnnotationDriver
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity
 *  @ORM\Table(name="Track")
 */
class Track {

    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;

    /** @ORM\Column(type="string", nullable=true) */
    protected $title;

    /** @ORM\Column(type="string", nullable=true) */
    protected $artist;

    /** @ORM\Column(type="string", nullable=true) */
    protected $duration;

}