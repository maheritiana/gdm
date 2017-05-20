<?php

namespace gdm\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('gdmAdminBundle:reservation:index.html.twig');
    }
}
