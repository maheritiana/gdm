<?php

/* gdmAdminBundle:reservation:ajouter_Boutique.html.twig */
class __TwigTemplate_6146aaf26a06d50c3130246e129689a098fcdc5797d0563b2563a16dca959b62 extends Twig_Template
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
                <h2>Ajouter un boutique</h2>
                <form method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formBoutique"]) ? $context["formBoutique"] : $this->getContext($context, "formBoutique")), 'enctype');
        echo ">
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formBoutique"]) ? $context["formBoutique"] : $this->getContext($context, "formBoutique")), 'widget');
        echo "
                    <input type=\"submit\" class=\"btn btn-primary\" />
                </form>

                <p>
                    <a href=\"";
        // line 16
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
        return "gdmAdminBundle:reservation:ajouter_Boutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  52 => 11,  48 => 10,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
