<?php

namespace Tipddy\UpvFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\UpvFormBundle\Entity\Inscripcion
 *
 * @ORM\Table(name="inscripcion")
 * @ORM\Entity
 */
class Inscripcion
{
    /**
     * @var bigint $id
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string $apellidos
     *
     * @ORM\Column(name="apellidos", type="string", length=255, nullable=false)
     */
    private $apellidos;

    /**
     * @var string $rut
     *
     * @ORM\Column(name="rut", type="string", length=12, nullable=false)
     */
    private $rut;

    /**
     * @var date $fechaNacimiento
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=false)
     */
    private $fechaNacimiento;

    /**
     * @var string $mailPersonal
     *
     * @ORM\Column(name="mail_personal", type="string", length=255, nullable=true)
     */
    private $mailPersonal;

    /**
     * @var string $mailInstitucion
     *
     * @ORM\Column(name="mail_institucion", type="string", length=255, nullable=false)
     */
    private $mailInstitucion;

    /**
     * @var string $fonoFijo
     *
     * @ORM\Column(name="fono_fijo", type="string", length=50, nullable=true)
     */
    private $fonoFijo;

    /**
     * @var string $fonoMovil
     *
     * @ORM\Column(name="fono_movil", type="string", length=50, nullable=true)
     */
    private $fonoMovil;

    /**
     * @var boolean $sede
     *
     * @ORM\Column(name="sede", type="boolean", nullable=true)
     */
    private $sede;

    /**
     * @var string $facultad
     *
     * @ORM\Column(name="facultad", type="string", length=255, nullable=true)
     */
    private $facultad;

    /**
     * @var string $carrera
     *
     * @ORM\Column(name="carrera", type="string", length=255, nullable=true)
     */
    private $carrera;

    /**
     * @var text $tituloProfesional
     *
     * @ORM\Column(name="titulo_profesional", type="text", nullable=true)
     */
    private $tituloProfesional;

    /**
     * @var text $gradoAcademico
     *
     * @ORM\Column(name="grado_academico", type="text", nullable=true)
     */
    private $gradoAcademico;

    /**
     * @var OpcionSexo
     *
     * @ORM\ManyToOne(targetEntity="OpcionSexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sexo", referencedColumnName="id")
     * })
     */
    private $sexo;



    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set rut
     *
     * @param string $rut
     */
    public function setRut($rut)
    {
        $this->rut = $rut;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set fechaNacimiento
     *
     * @param date $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * Get fechaNacimiento
     *
     * @return date 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set mailPersonal
     *
     * @param string $mailPersonal
     */
    public function setMailPersonal($mailPersonal)
    {
        $this->mailPersonal = $mailPersonal;
    }

    /**
     * Get mailPersonal
     *
     * @return string 
     */
    public function getMailPersonal()
    {
        return $this->mailPersonal;
    }

    /**
     * Set mailInstitucion
     *
     * @param string $mailInstitucion
     */
    public function setMailInstitucion($mailInstitucion)
    {
        $this->mailInstitucion = $mailInstitucion;
    }

    /**
     * Get mailInstitucion
     *
     * @return string 
     */
    public function getMailInstitucion()
    {
        return $this->mailInstitucion;
    }

    /**
     * Set fonoFijo
     *
     * @param string $fonoFijo
     */
    public function setFonoFijo($fonoFijo)
    {
        $this->fonoFijo = $fonoFijo;
    }

    /**
     * Get fonoFijo
     *
     * @return string 
     */
    public function getFonoFijo()
    {
        return $this->fonoFijo;
    }

    /**
     * Set fonoMovil
     *
     * @param string $fonoMovil
     */
    public function setFonoMovil($fonoMovil)
    {
        $this->fonoMovil = $fonoMovil;
    }

    /**
     * Get fonoMovil
     *
     * @return string 
     */
    public function getFonoMovil()
    {
        return $this->fonoMovil;
    }

    /**
     * Set sede
     *
     * @param boolean $sede
     */
    public function setSede($sede)
    {
        $this->sede = $sede;
    }

    /**
     * Get sede
     *
     * @return boolean 
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Set facultad
     *
     * @param string $facultad
     */
    public function setFacultad($facultad)
    {
        $this->facultad = $facultad;
    }

    /**
     * Get facultad
     *
     * @return string 
     */
    public function getFacultad()
    {
        return $this->facultad;
    }

    /**
     * Set carrera
     *
     * @param string $carrera
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;
    }

    /**
     * Get carrera
     *
     * @return string 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set tituloProfesional
     *
     * @param text $tituloProfesional
     */
    public function setTituloProfesional($tituloProfesional)
    {
        $this->tituloProfesional = $tituloProfesional;
    }

    /**
     * Get tituloProfesional
     *
     * @return text 
     */
    public function getTituloProfesional()
    {
        return $this->tituloProfesional;
    }

    /**
     * Set gradoAcademico
     *
     * @param text $gradoAcademico
     */
    public function setGradoAcademico($gradoAcademico)
    {
        $this->gradoAcademico = $gradoAcademico;
    }

    /**
     * Get gradoAcademico
     *
     * @return text 
     */
    public function getGradoAcademico()
    {
        return $this->gradoAcademico;
    }

    /**
     * Set sexo
     *
     * @param Tipddy\UpvFormBundle\Entity\OpcionSexo $sexo
     */
    public function setSexo(\Tipddy\UpvFormBundle\Entity\OpcionSexo $sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * Get sexo
     *
     * @return Tipddy\UpvFormBundle\Entity\OpcionSexo 
     */
    public function getSexo()
    {
        return $this->sexo;
    }
}