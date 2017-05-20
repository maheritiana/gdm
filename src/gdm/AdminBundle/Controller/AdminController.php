<?php

namespace gdm\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('gdmAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
