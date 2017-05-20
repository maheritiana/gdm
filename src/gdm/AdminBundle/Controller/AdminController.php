<?php

namespace gdm\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gdm\AdminBundle\Entity\description;
use gdm\AdminBundle\Form\descriptionType;
use gdm\AdminBundle\Entity\Maison;
use gdm\AdminBundle\Form\MaisonType;
use gdm\AdminBundle\Entity\boutique;
use gdm\AdminBundle\Form\boutiqueType;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('gdmAdminBundle:reservation:index.html.twig');
    }

   public function ajouterArticleAction()
    {
        $desc = new description();
        $form = $this->createForm(new descriptionType, $desc);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($desc);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'description bien ajouté');
                // On redirige vers la page de visualisation de l'article nouvellement créé
                return $this->redirect($this->generateUrl('gdmAdmin_voir', array('id' => $desc->getId())));
            }
        }
        return $this->render('gdmAdminBundle:reservation:ajouter.html.twig',array('form' => $form->createView()));
    }
   public function ajouterBoutiqueAction()
    {
        $bout = new boutique();
        $form = $this->createForm(new boutiqueType, $bout);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($bout);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'description bien ajouté');
                // On redirige vers la page de visualisation de l'article nouvellement créé
                return $this->redirect($this->generateUrl('gdmAdmin_voir', array('id' => $bout->getId())));
            }
        }
        return $this->render('gdmAdminBundle:reservation:ajouter.html.twig',array('form' => $form->createView(),));
    }
    public function ajouterMaisonAction()
    {
        $maison = new Maison();
        $form = $this->createForm(new MaisonType, $maison);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($maison);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Maison bien ajouté');
                // On redirige vers la page de visualisation de l'article nouvellement créé
                return $this->redirect($this->generateUrl('gdmAdmin_voir', array('id' => $maison->getId())));
            }
        }
        return $this->render('gdmAdminBundle:reservation:ajouter.html.twig',array('form' => $form->createView(),));
    }
    public function voirAction(description $desc)
    {
        return $this->render('gdmAdminBundle:reservation:voir.html.twig', array('desc' => $desc));
    }
}
