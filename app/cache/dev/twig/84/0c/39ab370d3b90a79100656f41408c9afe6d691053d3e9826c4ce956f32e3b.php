<?php

/* gdmAdminBundle:reservation:ajouter_Article.html.twig */
class __TwigTemplate_840c39ab370d3b90a79100656f41408c9afe6d691053d3e9826c4ce956f32e3b extends Twig_Template
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
                <div class=\"well\">
                    <form method=\"post\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formArticle"]) ? $context["formArticle"] : $this->getContext($context, "formArticle")), 'enctype');
        echo ">
                        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formArticle"]) ? $context["formArticle"] : $this->getContext($context, "formArticle")), 'widget');
        echo "
                        <input type=\"submit\" class=\"btn btn-primary\" />
                    </form>
                </div>

                <p>
                    <a href=\"";
        // line 18
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
        return "gdmAdminBundle:reservation:ajouter_Article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  49 => 11,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
