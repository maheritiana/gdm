<?php

/* gdmAdminBundle:reservation:voir.html.twig */
class __TwigTemplate_9f83fae8010695fd3ef64c9482e6e4918843f244033349c563895f13331dc48f extends Twig_Template
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
        echo "\t\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 5
    public function block_gdmReservation_body($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<!-- Our Portfolio -->
\t\t<div class=\"section section-white\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 10
        $this->env->loadTemplate("gdmAdminBundle:reservation:description.html.twig")->display($context);
        // line 11
        echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("gdmAdmin_accueil");
        echo "\" class=\"btn\">
\t\t\t\t\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\t\t\t\t\tRetour à la liste
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gdmAdmin_modifier", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\"
\t\t\t\t\t\t   class=\"btn\">
\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\tModifier l'article
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gdmAdmin_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\"
\t\t\t\t\t\t   class=\"btn\">
\t\t\t\t\t\t\t<i class=\"icon-trash\"></i>
\t\t\t\t\t\t\tSupprimer l'article
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gdmAdmin_commentaire", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\"
\t\t\t\t\t\t   class=\"btn\">
\t\t\t\t\t\t\t<i class=\"icon-trash\"></i>
\t\t\t\t\t\t\tcommenter l'article
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Our Portfolio -->
\t";
    }

    public function getTemplateName()
    {
        return "gdmAdminBundle:reservation:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  68 => 21,  60 => 16,  53 => 12,  50 => 11,  48 => 10,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
