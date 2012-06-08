<?php

namespace Tipddy\UpvFormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class InscripcionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellidos')
            ->add('rut')
            ->add('fechaNacimiento', 'birthday')
            ->add('mailPersonal')
            ->add('mailInstitucion')
            ->add('fonoFijo')
            ->add('fonoMovil')
            ->add('sede')
            ->add('facultad')
            ->add('carrera')
            ->add('tituloProfesional')
            ->add('gradoAcademico')
            ->add('sexo')
            ->add('fotoPersonal', 'file', array('required' => true))
         ;
    }

    public function getName()
    {
        return 'tipddy_upvformbundle_inscripciontype';
    }
}
