<?php

namespace gdm\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('gdmUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
