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

/* recipe/new.html.twig */
class __TwigTemplate_a51cf15ef328af9ccd9932440ef8e2ebb5be1f86c23e51dd278bfb249e978834 extends \Twig\Template
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
            '__internal_02a893674cf41da1f60569727ee6a6814a98020861d3675cf7f830c5f1283e3c' => [$this, 'block___internal_02a893674cf41da1f60569727ee6a6814a98020861d3675cf7f830c5f1283e3c'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipe/new.html.twig", 1);
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

        echo "New Recipe";
        
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
        echo "<div class=\"content\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/2873066.jpg"), "html", null, true);
        echo "); background-position: center; padding-bottom:60px;\">
        <div class=\"background-recip\" style=\"padding-top: 30px; padding-bottom: 30px; text-align: center; \">
            <h1 style=\"margin-top:90px;\">Nouvelle recette</h1>
        </div>
        <div class=\"formulaire  container\" style=\"max-width: 60%; margin:auto; padding: 50px; background: #ffffffc9;\">

            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'row');
        echo "
            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "dificulty", [], "any", false, false, false, 16), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), 'row');
        echo "
                </div>
            </div>
            <hr/>
            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "time", [], "any", false, false, false, 25), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "timeUnity", [], "any", false, false, false, 28), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "part", [], "any", false, false, false, 31), 'row');
        echo "
                </div>
            </div>
            <hr/>
            <div id=\"recipe_foods\" class=\"form-group\" data-prototype=\"
                ";
        // line 36
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_02a893674cf41da1f60569727ee6a6814a98020861d3675cf7f830c5f1283e3c", $context, $blocks));
        // line 38
        echo "\">
                ";
        // line 39
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "valid", [], "any", false, false, false, 39)) {
            // line 40
            echo "                    <div id=\"form_refresh\">
                        ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "foods", [], "any", false, false, false, 41), 'widget');
            echo "
                    </div>
                ";
        }
        // line 44
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "foods", [], "any", false, false, false, 44), "setRendered", [], "any", false, false, false, 44);
        // line 45
        echo "            </div>
            <a href=\"#\" id=\"add_food\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Ajouter un ingrédients</a>
            <hr/>
            <hr/>
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'row');
        echo "
            <hr/>
            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "protein", [], "any", false, false, false, 53), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "glucide", [], "any", false, false, false, 56), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "lipide", [], "any", false, false, false, 59), 'row');
        echo "
                </div>
                <div class=\"col\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "calorie", [], "any", false, false, false, 62), 'row');
        echo "
                </div>
            </div>
            <hr/>
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "picture", [], "any", false, false, false, 66), 'row');
        echo "
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "tags", [], "any", false, false, false, 67), 'row');
        echo "

            <button class=\"btn btn-success\">";
        // line 69
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 69, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_index", ["username" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "username", [], "any", false, false, false, 70)]), "html", null, true);
        echo "\">back to list</a>
            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
        </div>

</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block___internal_02a893674cf41da1f60569727ee6a6814a98020861d3675cf7f830c5f1283e3c($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_02a893674cf41da1f60569727ee6a6814a98020861d3675cf7f830c5f1283e3c"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_02a893674cf41da1f60569727ee6a6814a98020861d3675cf7f830c5f1283e3c"));

        // line 37
        echo "                ";
        echo twig_include($this->env, $context, "recipe/foods.html.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "foods", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "prototype", [], "any", false, false, false, 37)]);
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 80
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js\"></script>
    <script>
    \$('select').select2();
</script>
";
        // line 85
        echo "   <script type=\"text/javascript\">
       \$(document).ready(function() {
           // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
           var \$container = \$('div#recipe_foods');

           // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
           var index = \$container.find(':input').length;

           // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
           \$('#add_food').click(function(e) {
               addFood(\$container);

               e.preventDefault(); // évite qu'un # apparaisse dans l'URL
               return false;
           });

           // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
           if (index == 0) {
               addFood(\$container);
           } else {
               // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
               \$container.children('div').each(function() {
                   addDeleteLink(\$(this));
               });
           }

           // La fonction qui ajoute un formulaire CategoryType
           function addFood(\$container) {
               // Dans le contenu de l'attribut « data-prototype », on remplace :
               // - le texte \"__name__label__\" qu'il contient par le label du champ
               // - le texte \"__name__\" qu'il contient par le numéro du champ
               var template = \$container.attr('data-prototype')
                   .replace(/__name__label__/g, 'Aliment n°' + (index+1))
                   .replace(/__name__/g,        index)
               ;

               // On crée un objet jquery qui contient ce template
               var \$prototype = \$(template);

               // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
               addDeleteLink(\$prototype);

               // On ajoute le prototype modifié à la fin de la balise <div>
               \$container.append(\$prototype);

               // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
               index++;
           }

           // La fonction qui ajoute un lien de suppression d'une catégorie
           function addDeleteLink(\$prototype) {
               // Création du lien
               var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

               // Ajout du lien
               \$prototype.append(\$deleteLink);

               // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
               \$deleteLink.click(function(e) {
                   \$prototype.remove();

                   e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                   return false;
               });
           }
       });
   </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recipe/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 85,  286 => 80,  276 => 79,  258 => 76,  245 => 37,  235 => 36,  220 => 71,  216 => 70,  212 => 69,  207 => 67,  203 => 66,  196 => 62,  190 => 59,  184 => 56,  178 => 53,  171 => 49,  165 => 45,  162 => 44,  156 => 41,  153 => 40,  151 => 39,  148 => 38,  146 => 36,  138 => 31,  132 => 28,  126 => 25,  117 => 19,  111 => 16,  105 => 13,  101 => 12,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Recipe{% endblock %}

    {% block body %}
<div class=\"content\" style=\"background-image: url({{ asset ('/assets/img/2873066.jpg') }}); background-position: center; padding-bottom:60px;\">
        <div class=\"background-recip\" style=\"padding-top: 30px; padding-bottom: 30px; text-align: center; \">
            <h1 style=\"margin-top:90px;\">Nouvelle recette</h1>
        </div>
        <div class=\"formulaire  container\" style=\"max-width: 60%; margin:auto; padding: 50px; background: #ffffffc9;\">

            {{ form_start(form) }}
            {{ form_row(form.name) }}
            <div class=\"row\">
                <div class=\"col\">
                    {{ form_row(form.dificulty) }}
                </div>
                <div class=\"col\">
                    {{ form_row(form.type) }}
                </div>
            </div>
            <hr/>
            <div class=\"row\">
                <div class=\"col\">
                    {{ form_row(form.time) }}
                </div>
                <div class=\"col\">
                    {{ form_row(form.timeUnity) }}
                </div>
                <div class=\"col\">
                    {{ form_row(form.part) }}
                </div>
            </div>
            <hr/>
            <div id=\"recipe_foods\" class=\"form-group\" data-prototype=\"
                {% filter escape %}
                {{ include('recipe/foods.html.twig', {'form': form.foods.vars.prototype}) }}
                {% endfilter %}\">
                {% if not form.vars.valid %}
                    <div id=\"form_refresh\">
                        {{ form_widget(form.foods)}}
                    </div>
                {% endif %}
                {% do form.foods.setRendered %}
            </div>
            <a href=\"#\" id=\"add_food\" class=\"btn btn-success\"><i class=\"fa fa-plus\"></i> Ajouter un ingrédients</a>
            <hr/>
            <hr/>
            {{ form_row(form.description) }}
            <hr/>
            <div class=\"row\">
                <div class=\"col\">
                    {{ form_row(form.protein)}}
                </div>
                <div class=\"col\">
                    {{ form_row(form.glucide) }}
                </div>
                <div class=\"col\">
                    {{ form_row(form.lipide) }}
                </div>
                <div class=\"col\">
                    {{ form_row(form.calorie) }}
                </div>
            </div>
            <hr/>
            {{ form_row(form.picture) }}
            {{ form_row(form.tags) }}

            <button class=\"btn btn-success\">{{ button_label|default('Ajouter') }}</button>
            <a href=\"{{ path('recipe_index', {'username': user.username }) }}\">back to list</a>
            {{ form_end(form) }}
        </div>

</div>
    {% endblock %}
{% block stylesheets %}
{% endblock %}

{% block javascript %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js\"></script>
    <script>
    \$('select').select2();
</script>
{# Voici le script en question : #}
   <script type=\"text/javascript\">
       \$(document).ready(function() {
           // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
           var \$container = \$('div#recipe_foods');

           // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
           var index = \$container.find(':input').length;

           // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
           \$('#add_food').click(function(e) {
               addFood(\$container);

               e.preventDefault(); // évite qu'un # apparaisse dans l'URL
               return false;
           });

           // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
           if (index == 0) {
               addFood(\$container);
           } else {
               // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
               \$container.children('div').each(function() {
                   addDeleteLink(\$(this));
               });
           }

           // La fonction qui ajoute un formulaire CategoryType
           function addFood(\$container) {
               // Dans le contenu de l'attribut « data-prototype », on remplace :
               // - le texte \"__name__label__\" qu'il contient par le label du champ
               // - le texte \"__name__\" qu'il contient par le numéro du champ
               var template = \$container.attr('data-prototype')
                   .replace(/__name__label__/g, 'Aliment n°' + (index+1))
                   .replace(/__name__/g,        index)
               ;

               // On crée un objet jquery qui contient ce template
               var \$prototype = \$(template);

               // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
               addDeleteLink(\$prototype);

               // On ajoute le prototype modifié à la fin de la balise <div>
               \$container.append(\$prototype);

               // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
               index++;
           }

           // La fonction qui ajoute un lien de suppression d'une catégorie
           function addDeleteLink(\$prototype) {
               // Création du lien
               var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

               // Ajout du lien
               \$prototype.append(\$deleteLink);

               // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
               \$deleteLink.click(function(e) {
                   \$prototype.remove();

                   e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                   return false;
               });
           }
       });
   </script>
{% endblock %}
", "recipe/new.html.twig", "/home/cortez/Sites/reciplink/templates/recipe/new.html.twig");
    }
}
