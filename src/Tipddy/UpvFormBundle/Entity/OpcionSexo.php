<?php

namespace Tipddy\UpvFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\UpvFormBundle\Entity\OpcionSexo
 *
 * @ORM\Table(name="opcion_sexo")
 * @ORM\Entity
 */
class OpcionSexo
{
    /**
     * @var boolean $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $etiqueta
     *
     * @ORM\Column(name="etiqueta", type="string", length=50, nullable=false)
     */
    private $etiqueta;




    public function __toString()
    {
	    return $this->getEtiqueta();
    }

    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set etiqueta
     *
     * @param string $etiqueta
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;
    }

    /**
     * Get etiqueta
     *
     * @return string 
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }
}