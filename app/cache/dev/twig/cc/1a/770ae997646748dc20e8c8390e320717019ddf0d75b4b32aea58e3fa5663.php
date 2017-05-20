<?php

/* gdmAdminBundle::layout.html.twig */
class __TwigTemplate_cc1a770ae997646748dc20e8c8390e320717019ddf0d75b4b32aea58e3fa5663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'gdmReservation_body' => array($this, 'block_gdmReservation_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "        Animal - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
        ";
        // line 7
        $this->displayBlock('gdmReservation_body', $context, $blocks);
    }

    public function block_gdmReservation_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
    }

    public function getTemplateName()
    {
        return "gdmAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  54 => 13,  50 => 11,  48 => 10,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
