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

/* main/index.html.twig */
class __TwigTemplate_cf3b9b60aa756b0288664e7fcc2b55a1fd378d78e5df19d810488af5409d7e04 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Recettes saines | Paléo, Végan, Végétarienne, Végétalienne, sans gluten";
        
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
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"alert alert-success\" style=\"background: #86d9ab !important;\">
            <div class=\"container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <span><i class=\"fa fa-bell\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"jumbotron position-relative overflow-hidden text-center bg-light\" style=\"background-image: url(";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/2533.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size: cover;\">
        <div class=\"col-md-6 p-lg-6 mx-auto my-6\" style=\"padding-top:120px; padding-bottom:120px; line-height: 60px\">
            <h1 class=\"display-4 font-weight-normal\" >Que des recettes saines <span class=\"green\"> avec des ingrédients sains </span></h1>
            <p class=\"lead font-weight-normal\" style=\"margin-top:10px; margin-bottom:30px;\">Une manière simple de partager vos recettes</p>
            <a class=\"btn btn-success btn-lg\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_about");
        echo "\"><i class=\"fa fa-leaf\"></i> Comment ça marche ?</a>
        </div>
    </div>

    <section class=\"howWork text-center container-fluid\" style=\"padding-top: 40px; padding-bottom: 40px; width: 80%;\">
        <h2 class=\"text-uppercase\">Dernières recettes</h2>
        <div class=\"row text-center\" style=\"margin-top:80px;\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 32, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 33
            echo "                    ";
            $this->loadTemplate("recipe/_recipe.html.twig", "main/index.html.twig", 33)->display($context);
            // line 34
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </section>
    <section class=\"block-regime\" style=\"background-image: url(";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/select-program-background.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size: cover;\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-xs-12 col-md-6\">
                   <figure style=\"margin-left:-140px;\">
                       <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/select-program-image.png"), "html", null, true);
        echo "\" height=\"420rem\"/>
                   </figure>
               </div>
               <div class=\"col-xs-12 col-md-6 regime-link\">
                   <h2>Quel régime suivez-vous ?</h2>
                   <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paleo_recipe");
        echo "\" class=\"btn btn-success btn-block btn-outline-success\"> Paléovore </a>
                   <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegetarien_recipe");
        echo "\" class=\"btn btn-success btn-block btn-outline-success\"> Végétarien </a>
                   <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegetalien_recipe");
        echo "\" class=\"btn btn-success btn-block btn-outline-success\"> Végétalien </a>
                   <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegan_recipe");
        echo "\" class=\"btn btn-success btn-block btn-outline-success\"> Végan </a>
               </div>
           </div>
       </div>
    </section>

    <section class=\"block-blog text-center container-fluid mt-5\" style=\"padding-top: 40px; padding-bottom: 40px; width: 80%;\">
        <h2 class=\"mb-5 text-uppercase\">Derniers articles</h2>
        <div class=\"row text-center\" style=\"margin-top:80px;\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 59, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 60
            echo "                ";
            echo twig_include($this->env, $context, "posts/_posts.html.twig");
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </div>
    </section>
<section class=\"block-newsletter text-center container-fluid mt-5\">
    <div class=\"row\">
        <div class=\"offset-xs-0 offset-md-3\">

        </div>
        <div class=\"col-xs-12 col-md-9\">
            <h2>Restez informé(e)</h2>
            <h5 class=\"mt-2\" style=\"text-transform: inherit\">Recevez sans rien faire des astuces santé, <br/>ainsi que les dernières recettes de nos membres</h5>
            <iframe width=\"540\" height=\"450\" src=\"https://e319caef.sibforms.com/serve/MUIEAPp8HwrpPpJdgDhdQkGG0bCqiBtNoK-L59Vle-q86ZyE9yEip7TdZln0U8opR_7SY65Y_7W-BA_-yNuK5B4UMoTAG9gU_cVCaann1zOTToPUCLJBviiUVk1XO_lq14zITBMWpxPCgs5jBEIlYLGB9ZPAO-L_C5AgP7bUbWGv5UobW6JgAXyB8wCPfytOr8watmjXqOSA_3DG\" frameborder=\"0\" scrolling=\"auto\" allowfullscreen style=\"display: block; max-width: 100%; margin:auto;\"></iframe>

        </div>
    </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 62,  230 => 60,  213 => 59,  201 => 50,  197 => 49,  193 => 48,  189 => 47,  181 => 42,  173 => 37,  169 => 35,  155 => 34,  152 => 33,  135 => 32,  125 => 25,  118 => 21,  115 => 20,  105 => 16,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recettes saines | Paléo, Végan, Végétarienne, Végétalienne, sans gluten{% endblock %}

{% block body %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { ; padding: 2px 6px; }
    </style>
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\" style=\"background: #86d9ab !important;\">
            <div class=\"container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <span><i class=\"fa fa-bell\"></i> {{ message }}</span>
            </div>
        </div>
    {% endfor %}

    <div class=\"jumbotron position-relative overflow-hidden text-center bg-light\" style=\"background-image: url({{ asset ('/assets/img/2533.jpg') }});  background-repeat: no-repeat; background-size: cover;\">
        <div class=\"col-md-6 p-lg-6 mx-auto my-6\" style=\"padding-top:120px; padding-bottom:120px; line-height: 60px\">
            <h1 class=\"display-4 font-weight-normal\" >Que des recettes saines <span class=\"green\"> avec des ingrédients sains </span></h1>
            <p class=\"lead font-weight-normal\" style=\"margin-top:10px; margin-bottom:30px;\">Une manière simple de partager vos recettes</p>
            <a class=\"btn btn-success btn-lg\" href=\"{{ path('main_about')}}\"><i class=\"fa fa-leaf\"></i> Comment ça marche ?</a>
        </div>
    </div>

    <section class=\"howWork text-center container-fluid\" style=\"padding-top: 40px; padding-bottom: 40px; width: 80%;\">
        <h2 class=\"text-uppercase\">Dernières recettes</h2>
        <div class=\"row text-center\" style=\"margin-top:80px;\">
                {% for recipe in recipes %}
                    {% include 'recipe/_recipe.html.twig' %}
                {% endfor %}
        </div>
    </section>
    <section class=\"block-regime\" style=\"background-image: url({{ asset ('/assets/img/select-program-background.jpg') }});  background-repeat: no-repeat; background-size: cover;\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-xs-12 col-md-6\">
                   <figure style=\"margin-left:-140px;\">
                       <img src=\"{{ asset('/assets/img/select-program-image.png') }}\" height=\"420rem\"/>
                   </figure>
               </div>
               <div class=\"col-xs-12 col-md-6 regime-link\">
                   <h2>Quel régime suivez-vous ?</h2>
                   <a href=\"{{path('paleo_recipe')}}\" class=\"btn btn-success btn-block btn-outline-success\"> Paléovore </a>
                   <a href=\"{{path('vegetarien_recipe')}}\" class=\"btn btn-success btn-block btn-outline-success\"> Végétarien </a>
                   <a href=\"{{path('vegetalien_recipe')}}\" class=\"btn btn-success btn-block btn-outline-success\"> Végétalien </a>
                   <a href=\"{{path('vegan_recipe')}}\" class=\"btn btn-success btn-block btn-outline-success\"> Végan </a>
               </div>
           </div>
       </div>
    </section>

    <section class=\"block-blog text-center container-fluid mt-5\" style=\"padding-top: 40px; padding-bottom: 40px; width: 80%;\">
        <h2 class=\"mb-5 text-uppercase\">Derniers articles</h2>
        <div class=\"row text-center\" style=\"margin-top:80px;\">
            {% for post in posts %}
                {{ include('posts/_posts.html.twig') }}
            {% endfor %}
        </div>
    </section>
<section class=\"block-newsletter text-center container-fluid mt-5\">
    <div class=\"row\">
        <div class=\"offset-xs-0 offset-md-3\">

        </div>
        <div class=\"col-xs-12 col-md-9\">
            <h2>Restez informé(e)</h2>
            <h5 class=\"mt-2\" style=\"text-transform: inherit\">Recevez sans rien faire des astuces santé, <br/>ainsi que les dernières recettes de nos membres</h5>
            <iframe width=\"540\" height=\"450\" src=\"https://e319caef.sibforms.com/serve/MUIEAPp8HwrpPpJdgDhdQkGG0bCqiBtNoK-L59Vle-q86ZyE9yEip7TdZln0U8opR_7SY65Y_7W-BA_-yNuK5B4UMoTAG9gU_cVCaann1zOTToPUCLJBviiUVk1XO_lq14zITBMWpxPCgs5jBEIlYLGB9ZPAO-L_C5AgP7bUbWGv5UobW6JgAXyB8wCPfytOr8watmjXqOSA_3DG\" frameborder=\"0\" scrolling=\"auto\" allowfullscreen style=\"display: block; max-width: 100%; margin:auto;\"></iframe>

        </div>
    </div>
    </section>
{% endblock %}

", "main/index.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/main/index.html.twig");
    }
}
