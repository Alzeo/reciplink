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
class __TwigTemplate_c423915b486adbf46d4dcdbf3040d30bee906b6925da647b73892153ea425869 extends \Twig\Template
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
            '__internal_0dd5d14ce6cd5b0dabe8d369498385a1c1184b888c0a364a303933c722f820c6' => [$this, 'block___internal_0dd5d14ce6cd5b0dabe8d369498385a1c1184b888c0a364a303933c722f820c6'],
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

        echo "Nouvelle recette";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/2533.jpg"), "html", null, true);
        echo "); background-repeat: no-repeat; background-size: cover;\">
        <div class=\"background-recip\" style=\"padding-top: 30px; padding-bottom: 30px; text-align: center; \">
        </div>
        <div class=\"formulaire container\" style=\"margin:auto; padding: 50px; background: #fff;\">
            <h1 class=\"text-center mb-5\">Nouvelle recette</h1>
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
           <div class=\"row\">
               <div class=\"col-xs-12 col-md-6\">
                   ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'row');
        echo "
               </div>
               <div class=\"col-xs-12 col-md-6\">
                   ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "picture", [], "any", false, false, false, 17), 'row');
        echo "
               </div>
           </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "regime", [], "any", false, false, false, 22), 'row');
        echo "
                </div>
                <div class=\"col-xs-12 col-md-4\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25), 'row');
        echo "
                </div>
                <div class=\"col-xs-12 col-md-4\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "dificulty", [], "any", false, false, false, 28), 'row');
        echo "
                </div>
            </div>
            <hr/>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "time", [], "any", false, false, false, 34), 'row');
        echo "
                </div>
                <div class=\"col-xs-12 col-md-4\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "timeUnity", [], "any", false, false, false, 37), 'row');
        echo "
                </div>
                <div class=\"col-xs-12 col-md-4\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "part", [], "any", false, false, false, 40), 'row');
        echo "
                </div>
            </div>
            <hr/>
            <div id=\"recipe_foods\" class=\"form-group\" data-prototype=\"
                ";
        // line 45
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_0dd5d14ce6cd5b0dabe8d369498385a1c1184b888c0a364a303933c722f820c6", $context, $blocks));
        // line 47
        echo "\">
                ";
        // line 48
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "valid", [], "any", false, false, false, 48)) {
            // line 49
            echo "                    <div id=\"form_refresh\">
                        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "foods", [], "any", false, false, false, 50), 'widget');
            echo "
                    </div>
                ";
        }
        // line 53
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "foods", [], "any", false, false, false, 53), "setRendered", [], "any", false, false, false, 53);
        // line 54
        echo "            </div>
            <a href=\"#\" id=\"add_food\"  class=\"btn-round mr-1 btn btn-success\"><i class=\"fa fa-plus\"></i> Ajouter un ingrédients</a>
            <hr/>
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), 'row');
        echo "
            <hr/>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-3\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "protein", [], "any", false, false, false, 61), 'row');
        echo "
                </div>
                <div class=\"col-xs-12 col-md-3\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "glucide", [], "any", false, false, false, 64), 'row');
        echo "
                </div>
                <div class=\"col-xs-12 col-md-3\">
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "lipide", [], "any", false, false, false, 67), 'row');
        echo "
                </div>
                <div class=\"col-xs-12 col-md-3\">
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "calorie", [], "any", false, false, false, 70), 'row');
        echo "
                </div>
            </div>
            <p class=\"mb-3\">Les valeurs nutritionnelles sont définies pour une seule portion, ces champs ne sont pas obligatoire mais permettent
                d'aiguiller les personnes suivant un régimes particulier.</p>
            <hr/>
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "tags", [], "any", false, false, false, 76), 'row');
        echo "
            <p class=\"mb-3\">Les tags permettent d'apporter des indications supplémentaires concernant votre recette.</p>
            <div class=\"button-form text-center\">
                <button class=\"btn btn-success btn-lg mt-4\">";
        // line 79
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 79, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
            </div>
            ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo "
        </div>

</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block___internal_0dd5d14ce6cd5b0dabe8d369498385a1c1184b888c0a364a303933c722f820c6($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_0dd5d14ce6cd5b0dabe8d369498385a1c1184b888c0a364a303933c722f820c6"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_0dd5d14ce6cd5b0dabe8d369498385a1c1184b888c0a364a303933c722f820c6"));

        // line 46
        echo "                ";
        echo twig_include($this->env, $context, "recipe/foods.html.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "foods", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "prototype", [], "any", false, false, false, 46)]);
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
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

    // line 89
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 90
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js\"></script>
    <script>
    \$('select').select2();
</script>
";
        // line 95
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
               var \$deleteLink = \$('<div class=\"col-2\"><div class=\"form-group\"> <a href=\"#\" class=\"btn-just-icon ml-1 btn btn-danger form-btn\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></div></div>');


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
   <script>
            \$('#recipe_picture').on('change',function(){
                //get the file name
                var fileName = \$(this).val().replace('C:\\\\fakepath\\\\', \" \");
                //replace the \"Choose a file\" label
                \$(this).next('.custom-file-label').html(fileName);
            })
        </script>
    <script>
\t\t\t\$('#recipe_picture').filestyle({
\t\t\t\tbuttonName : 'btn-danger',
                buttonText : ' File selection'
\t\t\t});
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
        return array (  302 => 95,  296 => 90,  286 => 89,  268 => 86,  255 => 46,  245 => 45,  230 => 81,  225 => 79,  219 => 76,  210 => 70,  204 => 67,  198 => 64,  192 => 61,  185 => 57,  180 => 54,  177 => 53,  171 => 50,  168 => 49,  166 => 48,  163 => 47,  161 => 45,  153 => 40,  147 => 37,  141 => 34,  132 => 28,  126 => 25,  120 => 22,  112 => 17,  106 => 14,  100 => 11,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle recette{% endblock %}

    {% block body %}
<div class=\"content\" style=\"background-image: url({{ asset ('/assets/img/2533.jpg') }}); background-repeat: no-repeat; background-size: cover;\">
        <div class=\"background-recip\" style=\"padding-top: 30px; padding-bottom: 30px; text-align: center; \">
        </div>
        <div class=\"formulaire container\" style=\"margin:auto; padding: 50px; background: #fff;\">
            <h1 class=\"text-center mb-5\">Nouvelle recette</h1>
            {{ form_start(form) }}
           <div class=\"row\">
               <div class=\"col-xs-12 col-md-6\">
                   {{ form_row(form.name) }}
               </div>
               <div class=\"col-xs-12 col-md-6\">
                   {{ form_row(form.picture) }}
               </div>
           </div>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4\">
                    {{ form_row(form.regime) }}
                </div>
                <div class=\"col-xs-12 col-md-4\">
                    {{ form_row(form.type) }}
                </div>
                <div class=\"col-xs-12 col-md-4\">
                    {{ form_row(form.dificulty) }}
                </div>
            </div>
            <hr/>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4\">
                    {{ form_row(form.time) }}
                </div>
                <div class=\"col-xs-12 col-md-4\">
                    {{ form_row(form.timeUnity) }}
                </div>
                <div class=\"col-xs-12 col-md-4\">
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
            <a href=\"#\" id=\"add_food\"  class=\"btn-round mr-1 btn btn-success\"><i class=\"fa fa-plus\"></i> Ajouter un ingrédients</a>
            <hr/>
            {{ form_row(form.description) }}
            <hr/>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-3\">
                    {{ form_row(form.protein)}}
                </div>
                <div class=\"col-xs-12 col-md-3\">
                    {{ form_row(form.glucide) }}
                </div>
                <div class=\"col-xs-12 col-md-3\">
                    {{ form_row(form.lipide) }}
                </div>
                <div class=\"col-xs-12 col-md-3\">
                    {{ form_row(form.calorie) }}
                </div>
            </div>
            <p class=\"mb-3\">Les valeurs nutritionnelles sont définies pour une seule portion, ces champs ne sont pas obligatoire mais permettent
                d'aiguiller les personnes suivant un régimes particulier.</p>
            <hr/>
            {{ form_row(form.tags) }}
            <p class=\"mb-3\">Les tags permettent d'apporter des indications supplémentaires concernant votre recette.</p>
            <div class=\"button-form text-center\">
                <button class=\"btn btn-success btn-lg mt-4\">{{ button_label|default('Ajouter') }}</button>
            </div>
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
               var \$deleteLink = \$('<div class=\"col-2\"><div class=\"form-group\"> <a href=\"#\" class=\"btn-just-icon ml-1 btn btn-danger form-btn\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></div></div>');


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
   <script>
            \$('#recipe_picture').on('change',function(){
                //get the file name
                var fileName = \$(this).val().replace('C:\\\\fakepath\\\\', \" \");
                //replace the \"Choose a file\" label
                \$(this).next('.custom-file-label').html(fileName);
            })
        </script>
    <script>
\t\t\t\$('#recipe_picture').filestyle({
\t\t\t\tbuttonName : 'btn-danger',
                buttonText : ' File selection'
\t\t\t});
</script>
{% endblock %}
", "recipe/new.html.twig", "/home/cortez/Sites/reciplink/templates/recipe/new.html.twig");
    }
}
