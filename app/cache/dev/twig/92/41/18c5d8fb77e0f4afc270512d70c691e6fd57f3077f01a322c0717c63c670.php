<?php

/* ::layout.html.twig */
class __TwigTemplate_924118c5d8fb77e0f4afc270512d70c691e6fd57f3077f01a322c0717c63c670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>GDM! Web CUP 2017</title>
    
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "
</head>

<body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

    <header class=\"navbar navbar-inverse navbar-fixed-top\" role=\"banner\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Basica\"></a>
            </div>
            <div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\"><a href=\"index.html\">Home</a></li>
                    <li><a href=\"about-us.html\">About Us</a></li>
                    <li><a href=\"services.html\">Services</a></li>
                    <li><a href=\"portfolio.html\">Portfolio</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Pages <i class=\"icon-angle-down\"></i></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Dropdown Menu 1</a></li>
                            <li><a href=\"#\">Dropdown Menu 2</a></li>
                            <li><a href=\"#\">Dropdown Menu 3</a></li>
                            <li><a href=\"#\">Dropdown Menu 4</a></li>
                            <li><a href=\"#\">Dropdown Menu 5</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Terms of Use</a></li>
                        </ul>
                    </li>
                    <li><a href=\"blog.html\">Blog</a></li> 
                    <li><a href=\"contact-us.html\">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
        ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "
\t    <!-- Footer -->
\t    <div class=\"footer\">
\t    \t<div class=\"container\">
\t\t\t
\t\t    \t<div class=\"row\">
\t\t\t\t
\t\t    \t\t<div class=\"col-footer col-md-4 col-xs-6\">
\t\t    \t\t\t<h3>Contact Us</h3>
\t\t    \t\t\t<p class=\"contact-us-details\">
\t        \t\t\t\t<b>Address:</b> 123 Downtown Avenue, Manhattan, New York, United States of America<br/>
\t        \t\t\t\t<b>Phone:</b> +1 123 45678910<br/>
\t        \t\t\t\t<b>Fax:</b> +1 123 45678910<br/>
\t        \t\t\t\t<b>Email:</b> <a href=\"mailto:info@yourcompanydomain.com\">info@yourcompanydomain.com</a>
\t        \t\t\t</p>
\t\t    \t\t</div>\t\t\t\t
\t\t    \t\t<div class=\"col-footer col-md-4 col-xs-6\">
\t\t    \t\t\t<h3>Our Social Networks</h3>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
\t\t    \t\t\t<div>
\t\t    \t\t\t\t<img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/facebook.png"), "html", null, true);
        echo "\" width=\"32\" alt=\"Facebook\">
\t\t    \t\t\t\t<img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/twitter.png"), "html", null, true);
        echo "\" width=\"32\" alt=\"Twitter\">
\t\t    \t\t\t\t<img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/linkedin.png"), "html", null, true);
        echo "\" width=\"32\" alt=\"LinkedIn\">
\t\t\t\t\t\t\t<img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icons/rss.png"), "html", null, true);
        echo "\" width=\"32\" alt=\"RSS Feed\">
\t\t\t\t\t\t</div>
\t\t    \t\t</div>
\t\t    \t\t<div class=\"col-footer col-md-4 col-xs-6\">
\t\t    \t\t\t<h3>About Our Company</h3>
\t\t    \t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
\t\t    \t\t</div>

\t\t    \t</div>
\t\t    \t<div class=\"row\">
\t\t    \t\t<div class=\"col-md-12\">
\t\t    \t\t\t<div class=\"footer-copyright\">&copy; 2014 <a href=\"http://www.vactualart.com/portfolio-item/basica-a-free-html5-template/\">Basica</a> Bootstrap HTML Template. By <a href=\"http://www.vactualart.com\">Vactual Art</a>.</div>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </div>
\t    </div>
        ";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "</body>
</html>";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "\t\t<!-- Bootstrap Core CSS -->
\t\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Custom Fonts & Icons -->
\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icomoon-social.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t";
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        // line 77
        echo "        ";
    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        // line 118
        echo "        <!-- Javascripts -->
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//use.edgefonts.net/bebas-neue.js"), "html", null, true);
        echo "\"></script>
            <script>window.jQuery || document.write('<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
            <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Scrolling Nav JavaScript -->
            <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/scrolling-nav.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 126,  219 => 125,  213 => 122,  209 => 121,  205 => 120,  201 => 119,  198 => 118,  195 => 117,  191 => 77,  188 => 76,  182 => 29,  178 => 28,  171 => 24,  167 => 23,  161 => 20,  158 => 19,  155 => 18,  150 => 128,  148 => 117,  129 => 101,  125 => 100,  121 => 99,  117 => 98,  95 => 78,  93 => 76,  63 => 49,  41 => 18,  22 => 1,  52 => 8,  46 => 7,  43 => 31,  40 => 5,  33 => 3,  30 => 2,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
