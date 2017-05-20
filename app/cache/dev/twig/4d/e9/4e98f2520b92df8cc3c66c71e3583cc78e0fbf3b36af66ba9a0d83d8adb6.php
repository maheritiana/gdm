<?php

/* gdmReservationBundle::layout.html.twig */
class __TwigTemplate_4de94e98f2520b92df8cc3c66c71e3583cc78e0fbf3b36af66ba9a0d83d8adb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'gdmAnimal_body' => array($this, 'block_gdmAnimal_body'),
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
        $this->displayBlock('gdmAnimal_body', $context, $blocks);
    }

    public function block_gdmAnimal_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
    }

    public function getTemplateName()
    {
        return "gdmReservationBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
