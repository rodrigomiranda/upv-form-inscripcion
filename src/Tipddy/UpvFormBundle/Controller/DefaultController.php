<?php

namespace Tipddy\UpvFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('TipddyUpvFormBundle:Default:index.html.twig', array('name' => $name));
    }
}
