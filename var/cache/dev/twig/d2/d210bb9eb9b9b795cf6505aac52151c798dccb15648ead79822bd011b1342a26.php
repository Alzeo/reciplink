<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/about.html.twig */
class __TwigTemplate_bc732fb2178d1a37b60dc431b4102b14c46ee8ce96a7863ba5ebf60b6384d0ef extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ContacController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { ; padding: 2px 6px; }
    </style>
    <div class=\"container mb-5\">
       <div class=\"row\">
           <div class=\"col-xs-12 col-md-6\">
               <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/background-about.png"), "html", null, true);
        echo "\" width=\"500px\"/>
           </div>
           <div class=\"col-xs-12 col-md-6 mt-5\">
               <h2>Des recettes saines</h2>
               <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget venenatis purus, at euismod quam. Aenean volutpat leo eu mi vestibulum, non tempus neque tincidunt. Pellentesque a sodales mauris, a tincidunt diam. Nunc sagittis, neque et vehicula tincidunt, elit sem porta turpis, at pulvinar turpis arcu sed lectus. Aliquam lorem tellus, sodales quis placerat eget, cursus ut eros.</p>
           </div>
       </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6\" style=\"background:#eee; padding: 30px;\">
                <div class=\"container\">
                    <h2>Des recettes saines</h2>
                    <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget venenatis purus, at euismod quam. Aenean volutpat leo eu mi vestibulum, non tempus neque tincidunt. Pellentesque a sodales mauris, a tincidunt diam. Nunc sagittis, neque et vehicula tincidunt, elit sem porta turpis, at pulvinar turpis arcu sed lectus. Aliquam lorem tellus, sodales quis placerat eget, cursus ut eros.</p>
                </div>
            </div>
            <div class=\"col-xs-12 col-md-6\" style=\"background-image: url(";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/2420.jpg"), "html", null, true);
        echo "); background-position: center; height: 400px;\">

            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ContacController!{% endblock %}

{% block body %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { ; padding: 2px 6px; }
    </style>
    <div class=\"container mb-5\">
       <div class=\"row\">
           <div class=\"col-xs-12 col-md-6\">
               <img src=\"{{ asset('/assets/img/background-about.png') }}\" width=\"500px\"/>
           </div>
           <div class=\"col-xs-12 col-md-6 mt-5\">
               <h2>Des recettes saines</h2>
               <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget venenatis purus, at euismod quam. Aenean volutpat leo eu mi vestibulum, non tempus neque tincidunt. Pellentesque a sodales mauris, a tincidunt diam. Nunc sagittis, neque et vehicula tincidunt, elit sem porta turpis, at pulvinar turpis arcu sed lectus. Aliquam lorem tellus, sodales quis placerat eget, cursus ut eros.</p>
           </div>
       </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-6\" style=\"background:#eee; padding: 30px;\">
                <div class=\"container\">
                    <h2>Des recettes saines</h2>
                    <p class=\"mt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget venenatis purus, at euismod quam. Aenean volutpat leo eu mi vestibulum, non tempus neque tincidunt. Pellentesque a sodales mauris, a tincidunt diam. Nunc sagittis, neque et vehicula tincidunt, elit sem porta turpis, at pulvinar turpis arcu sed lectus. Aliquam lorem tellus, sodales quis placerat eget, cursus ut eros.</p>
                </div>
            </div>
            <div class=\"col-xs-12 col-md-6\" style=\"background-image: url({{ asset('/assets/img/2420.jpg') }}); background-position: center; height: 400px;\">

            </div>
        </div>
    </div>

{% endblock %}
", "main/about.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/main/about.html.twig");
    }
}
