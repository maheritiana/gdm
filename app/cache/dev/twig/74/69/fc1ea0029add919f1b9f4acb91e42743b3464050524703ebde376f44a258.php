<?php

/* gdmAdminBundle:reservation:ajouter.html.twig */
class __TwigTemplate_7469fc1ea0029add919f1b9f4acb91e42743b3464050524703ebde376f44a258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gdmAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'gdmReservation_body' => array($this, 'block_gdmReservation_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gdmAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "        Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    ";
    }

    // line 5
    public function block_gdmReservation_body($context, array $blocks = array())
    {
        // line 6
        echo "        <!-- Our Portfolio -->
        <div class=\"section section-white\">
            <div class=\"container\">
                <h2>Ajouter un article</h2>
                ";
        // line 10
        $this->env->loadTemplate("gdmAdminBundle:reservation:formulaire.html.twig")->display($context);
        // line 11
        echo "
                <p>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("gdmAdmin_voir", array("id" => 1));
        echo "\"class=\"btn\">
                        <i class=\"icon-chevron-left\"></i>
                        Retour à l'article
                    </a>
                </p>
            </div>

        </div>
        <!-- Our Portfolio -->
    ";
    }

    public function getTemplateName()
    {
        return "gdmAdminBundle:reservation:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  50 => 11,  48 => 10,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
