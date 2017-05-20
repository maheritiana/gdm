<?php

/* gdmAdminBundle:reservation:index.html.twig */
class __TwigTemplate_d000165252f3a602ee4da0232bb1f3806db277ee5c07f0c1b06e2c14dc0386e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gdmReservationBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'gdmReservation_body' => array($this, 'block_gdmReservation_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gdmReservationBundle::layout.html.twig";
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
                <div class=\"row\">


                </div>
            </div>
        </div>
        <!-- Our Portfolio -->
    ";
    }

    public function getTemplateName()
    {
        return "gdmAdminBundle:reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
