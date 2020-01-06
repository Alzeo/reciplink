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
class __TwigTemplate_6e78fa8948c50a5bb78a2479ead4a16065f44f31f04133074f27a8760b186211 extends \Twig\Template
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

        echo "RecipeLink - Accueil";
        
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
        echo "    <div class=\"jumbotron position-relative overflow-hidden text-center bg-light\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/2533.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size: cover;\">
        <div class=\"col-md-6 p-lg-6 mx-auto my-6\" style=\"padding-top:120px; padding-bottom:120px; line-height: 60px\">
            <h1 class=\"display-4 font-weight-normal\" >Que des recettes saines <span class=\"green\"> avec des ingrédients sains </span></h1>
            <p class=\"lead font-weight-normal\" style=\"margin-top:10px; margin-bottom:30px;\">Une manière simple de partager vos recettes</p>
            <a class=\"btn btn-success btn-lg\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_new");
        echo "\"><i class=\"fa fa-leaf\"></i> Commencer</a>
        </div>
    </div>
    <section class=\"howWork text-center container-fluid\" style=\"padding-top: 40px; padding-bottom: 40px; width: 80%;\">
        <h4>Dernières recettes</h4>
        <div class=\"row text-center\" style=\"margin-top:80px;\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 30, $this->source); })()));
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
            // line 31
            echo "                    ";
            $this->loadTemplate("recipe/_recipe.html.twig", "main/index.html.twig", 31)->display($context);
            // line 32
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
        // line 33
        echo "        </div>
    </section>
    <section class=\"block-regime\" style=\"background-image: url(";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/select-program-background.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size: cover;\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-6\">
                   <figure style=\"margin-left:-140px;\">
                       <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/select-program-image.png"), "html", null, true);
        echo "\"/>
                   </figure>
               </div>
               <div class=\"col-6 regime-link\">
                   <h2>Quel régime suivez-vous ?</h2>
                   <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paleo_recipe");
        echo "\" class=\"btn btn-success btn-block btn-outline-success\"> Paléovore </a>
                   <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegetarien_recipe");
        echo "\" class=\"btn btn-success btn-block btn-outline-success\"> Végétarien </a>
                   <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegetalien_recipe");
        echo "\" class=\"btn btn-success btn-block btn-outline-success\"> Végétalien </a>
                   <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegan_recipe");
        echo "\" class=\"btn btn-success btn-block btn-outline-success\"> Végan </a>
               </div>
           </div>
       </div>
    </section>
    <section class=\"block-blog text-center container-fluid mt-5\" style=\"padding-top: 40px; padding-bottom: 40px; width: 80%;\">
        <h4 class=\"mb-5\">Dernièrs articles</h4>
        <div class=\"row text-center\" style=\"margin-top:80px;\">
           <div class=\"col-4\">
               <div class=\"card text-center\">
                   <div class=\"card-header\">
                       CATÉGORIE : PALÉO
                   </div>
                   <img class=\"card-img-top\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/2873066.jpg"), "html", null, true);
        echo "\" alt=\"recette\">
                   <div class=\"card-body\">
                       <h5 class=\"card-title\">Special title treatment</h5>
                       <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                       <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                   </div>
                   <div class=\"card-footer text-muted\">
                       2 days ago
                   </div>
               </div>
           </div>
           <div class=\"col-4\">
               <div class=\"card text-center\">
                   <div class=\"card-header\">
                       CATÉGORIE : PALÉO
                   </div>
                   <img class=\"card-img-top\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/2873066.jpg"), "html", null, true);
        echo "\" alt=\"recette\">
                   <div class=\"card-body\">
                       <h5 class=\"card-title\">Special title treatment</h5>
                       <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                       <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                   </div>
                   <div class=\"card-footer text-muted\">
                       2 days ago
                   </div>
               </div>
           </div>
           <div class=\"col-4\">
               <div class=\"card text-center\">
                   <div class=\"card-header\">
                       CATÉGORIE : PALÉO
                   </div>
                   <img class=\"card-img-top\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/2873066.jpg"), "html", null, true);
        echo "\" alt=\"recette\">
                   <div class=\"card-body\">
                       <h5 class=\"card-title\">Special title treatment</h5>
                       <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                       <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                   </div>
                   <div class=\"card-footer text-muted\">
                       2 days ago
                   </div>
               </div>
           </div>
        </div>
    </section>
<section class=\"block-newsletter text-center container-fluid mt-5\" style=\"padding-top: 40px; padding-bottom: 40px; background: #f7f7f7\">
    <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/paper-plane.png"), "html", null, true);
        echo "\" alt=\"\" height=\"200px;\">

    </div>
    <h4>Restez informé(e)</h4>
    <h5 class=\"mt-2\">Vous souhaitez recevoir les nouvelles recettes par mail ?</h5>
    <div class=\"container mt-5\" style=\"width:40rem;\">
        ";
        // line 113
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), 'form_start');
        echo "
        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "categorie", [], "any", false, false, false, 114), 'row');
        echo "
        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "mail", [], "any", false, false, false, 115), 'row');
        echo "
        <div class=\"button-form text-center mb-5\">
            <button class=\"btn btn-success btn-lg mt-4 btn-block\">";
        // line 117
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 117, $this->source); })()), "M'Ajouter")) : ("M'Ajouter")), "html", null, true);
        echo "</button>
        </div>
        ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end');
        echo "
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
        return array (  296 => 119,  291 => 117,  286 => 115,  282 => 114,  278 => 113,  269 => 107,  252 => 93,  233 => 77,  214 => 61,  198 => 48,  194 => 47,  190 => 46,  186 => 45,  178 => 40,  170 => 35,  166 => 33,  152 => 32,  149 => 31,  132 => 30,  123 => 24,  115 => 20,  105 => 16,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}RecipeLink - Accueil{% endblock %}

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
            <a class=\"btn btn-success btn-lg\" href=\"{{ path('recipe_new')}}\"><i class=\"fa fa-leaf\"></i> Commencer</a>
        </div>
    </div>
    <section class=\"howWork text-center container-fluid\" style=\"padding-top: 40px; padding-bottom: 40px; width: 80%;\">
        <h4>Dernières recettes</h4>
        <div class=\"row text-center\" style=\"margin-top:80px;\">
                {% for recipe in recipes %}
                    {% include 'recipe/_recipe.html.twig' %}
                {% endfor %}
        </div>
    </section>
    <section class=\"block-regime\" style=\"background-image: url({{ asset ('/assets/img/select-program-background.jpg') }});  background-repeat: no-repeat; background-size: cover;\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-6\">
                   <figure style=\"margin-left:-140px;\">
                       <img src=\"{{ asset('/assets/img/select-program-image.png') }}\"/>
                   </figure>
               </div>
               <div class=\"col-6 regime-link\">
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
        <h4 class=\"mb-5\">Dernièrs articles</h4>
        <div class=\"row text-center\" style=\"margin-top:80px;\">
           <div class=\"col-4\">
               <div class=\"card text-center\">
                   <div class=\"card-header\">
                       CATÉGORIE : PALÉO
                   </div>
                   <img class=\"card-img-top\" src=\"{{ asset('/assets/img/2873066.jpg')}}\" alt=\"recette\">
                   <div class=\"card-body\">
                       <h5 class=\"card-title\">Special title treatment</h5>
                       <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                       <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                   </div>
                   <div class=\"card-footer text-muted\">
                       2 days ago
                   </div>
               </div>
           </div>
           <div class=\"col-4\">
               <div class=\"card text-center\">
                   <div class=\"card-header\">
                       CATÉGORIE : PALÉO
                   </div>
                   <img class=\"card-img-top\" src=\"{{ asset('/assets/img/2873066.jpg')}}\" alt=\"recette\">
                   <div class=\"card-body\">
                       <h5 class=\"card-title\">Special title treatment</h5>
                       <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                       <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                   </div>
                   <div class=\"card-footer text-muted\">
                       2 days ago
                   </div>
               </div>
           </div>
           <div class=\"col-4\">
               <div class=\"card text-center\">
                   <div class=\"card-header\">
                       CATÉGORIE : PALÉO
                   </div>
                   <img class=\"card-img-top\" src=\"{{ asset('/assets/img/2873066.jpg')}}\" alt=\"recette\">
                   <div class=\"card-body\">
                       <h5 class=\"card-title\">Special title treatment</h5>
                       <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                       <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                   </div>
                   <div class=\"card-footer text-muted\">
                       2 days ago
                   </div>
               </div>
           </div>
        </div>
    </section>
<section class=\"block-newsletter text-center container-fluid mt-5\" style=\"padding-top: 40px; padding-bottom: 40px; background: #f7f7f7\">
    <img src=\"{{ asset ('/assets/img/paper-plane.png') }}\" alt=\"\" height=\"200px;\">

    </div>
    <h4>Restez informé(e)</h4>
    <h5 class=\"mt-2\">Vous souhaitez recevoir les nouvelles recettes par mail ?</h5>
    <div class=\"container mt-5\" style=\"width:40rem;\">
        {{ form_start(form) }}
        {{ form_row(form.categorie) }}
        {{ form_row(form.mail) }}
        <div class=\"button-form text-center mb-5\">
            <button class=\"btn btn-success btn-lg mt-4 btn-block\">{{ button_label|default(\"M'Ajouter\") }}</button>
        </div>
        {{ form_end(form) }}
    </div>
</section>
{% endblock %}
", "main/index.html.twig", "/home/cortez/Sites/reciplink/templates/main/index.html.twig");
    }
}
