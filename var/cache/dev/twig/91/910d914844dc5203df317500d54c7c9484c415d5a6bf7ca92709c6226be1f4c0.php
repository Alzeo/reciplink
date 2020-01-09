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

/* user/show.html.twig */
class __TwigTemplate_13a3097e41d5ff08b717e8909bafb6ff145926cdd3dd2768546090b29f912c63 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "username", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div class=\"jumbotron text-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/background-user.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size:cover; background-position: center\">
        <h1><i class=\"fa fa-user-circle\"></i></h1>
        <div class=\"typography-line\"><h2>La cuisine de ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "username", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2></div>
        ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9) == (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()))) {
            echo "<a class=\"btn btn-neutral mt-4\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit");
            echo "\">Modifier mon profil</a>";
        } else {
            echo " ";
        }
        // line 10
        echo "    </div>
<div class=\"nav-tabs-navigation container\">
    <div class=\"nav-tabs-wrapper\">
        <ul class=\"nav nav-tabs\" id=\"pills-tab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["username" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" class=\"nav-link\">Mes informations</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_save_recipe", ["username" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "username", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"nav-link\">Recettes enregistrés</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_my_recipes", ["username" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\" class=\"nav-link\">Mes recettes</a>
            </li>
        </ul>
    </div>
</div>

    ";
        // line 27
        if (((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 27, $this->source); })()) == "informations")) {
            // line 28
            echo "    <div class=\"tab-pane fade show active\">

        <div class=\"container mb-5 user-informations\">
            <div class=\"row\">
                <div class=\"col\">
                    <label class=\"mb-4\">Informations de compte</label>
                    <p><strong>Email</strong> : ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
                    <p><strong>Regime alimentaire</strong> : ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "regime", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                </div>
                <div class=\"col\">
                    <label>Réseaux sociaux
                        <p class=\"sub-label mb-4\">Vous pouvez ajouter vos profils sur les différents réseaux sociaux<br>
                            pour inciter les utilisateurs à vous suivre.</p></label>
                    <p><strong>facebook</strong> : ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "facebook", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                    <p><strong>Instagram</strong> : ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "instagram", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
                    <p><strong>Pinterest</strong> : ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "pinterest", [], "any", false, false, false, 43), "html", null, true);
            echo "</p>
                    <p><strong>Snapchat</strong> : ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "snapchat", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                </div>
            </div>
        </div>
    </div>
    ";
        } elseif ((        // line 49
(isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 49, $this->source); })()) == "saveRecipe")) {
            // line 50
            echo "        <div class=\"\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
                <div class=\"row\">
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["saveRecipes"]) || array_key_exists("saveRecipes", $context) ? $context["saveRecipes"] : (function () { throw new RuntimeError('Variable "saveRecipes" does not exist.', 52, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["saveRecipe"]) {
                // line 53
                echo "                        <div class=\"col-xs-12 col-md-6 col-lg-4\">
                            <div class=\"card\">
                                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 55), "slug", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\"><img class=\"card-img-top\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recipes/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 55), "picture", [], "any", false, false, false, 55))), "html", null, true);
                echo "\" alt=\"recette ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
                echo "\"> </a>
                                <div class=\"top-right\"><label class=\"label label-danger\">";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 56), "type", [], "any", false, false, false, 56), "html", null, true);
                echo "</label></div>
                                <div class=\"top-left\"><span class=\"like label-warning\"> <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> ";
                // line 57
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 57), "likes", [], "any", false, false, false, 57)), "html", null, true);
                echo "</span></div>
                                <div class=\"card-body\">
                                    <h6 class=\"card-regime\">Régime : ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 59), "regime", [], "any", false, false, false, 59), "html", null, true);
                echo "</h6>

                                    <h5 class=\"card-title\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
                echo "</h5>
                                    <p class=\"card-text\">
                                        ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 63), "tags", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 64
                    echo "                                            <span class=\"tags\">
                                                <label class=\"label label-default mr-1\">#";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 65), "html", null, true);
                    echo "</label>
                                            </span>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                                    </p>
                                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 69), "slug", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\" class=\"btn btn-success\">Voir la recette</a>
                                </div>
                            </div>
                        </div>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 74
                echo "                            <div class=\"container mb-4\">
                                <p>Vous n'avez aucune recette enregistrée</p>
                            </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['saveRecipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                </div>
                <div class=\"pagination justify-content-center\">
                    ";
            // line 80
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["saveRecipes"]) || array_key_exists("saveRecipes", $context) ? $context["saveRecipes"] : (function () { throw new RuntimeError('Variable "saveRecipes" does not exist.', 80, $this->source); })()));
            echo "
                </div>
            </div>
        </div>
    ";
        } elseif ((        // line 84
(isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 84, $this->source); })()) == "userRecipe")) {
            // line 85
            echo "        <div class=\"\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
                <div class=\"row\">
                    ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userRecipes"]) || array_key_exists("userRecipes", $context) ? $context["userRecipes"] : (function () { throw new RuntimeError('Variable "userRecipes" does not exist.', 87, $this->source); })()));
            $context['_iterated'] = false;
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
                // line 88
                echo "                        ";
                $this->loadTemplate("recipe/_recipesByUser.html.twig", "user/show.html.twig", 88)->display($context);
                // line 89
                echo "                    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 90
                echo "                        <div class=\"container mb-4\">
                            <p>Vous n'avez partager aucune recette</p>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                </div>
                <div class=\"pagination justify-content-center\">
                    ";
            // line 96
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["userRecipes"]) || array_key_exists("userRecipes", $context) ? $context["userRecipes"] : (function () { throw new RuntimeError('Variable "userRecipes" does not exist.', 96, $this->source); })()));
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 101
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 101,  321 => 96,  317 => 94,  308 => 90,  295 => 89,  292 => 88,  274 => 87,  270 => 85,  268 => 84,  261 => 80,  257 => 78,  248 => 74,  238 => 69,  235 => 68,  226 => 65,  223 => 64,  219 => 63,  214 => 61,  209 => 59,  204 => 57,  200 => 56,  192 => 55,  188 => 53,  183 => 52,  179 => 50,  177 => 49,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  148 => 35,  144 => 34,  136 => 28,  134 => 27,  125 => 21,  119 => 18,  113 => 15,  106 => 10,  98 => 9,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ app.user.username }}{% endblock %}

{% block body %}
    <div class=\"jumbotron text-center\" style=\"background-image: url({{ asset ('/assets/img/background-user.jpg') }});  background-repeat: no-repeat; background-size:cover; background-position: center\">
        <h1><i class=\"fa fa-user-circle\"></i></h1>
        <div class=\"typography-line\"><h2>La cuisine de {{ user.username}}</h2></div>
        {% if app.user == user %}<a class=\"btn btn-neutral mt-4\" href=\"{{ path('user_edit') }}\">Modifier mon profil</a>{% else %} {% endif %}
    </div>
<div class=\"nav-tabs-navigation container\">
    <div class=\"nav-tabs-wrapper\">
        <ul class=\"nav nav-tabs\" id=\"pills-tab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a href=\"{{ path('user_show', {'username': user.username}) }}\" class=\"nav-link\">Mes informations</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"{{ path('user_save_recipe', {'username': user.username}) }}\" class=\"nav-link\">Recettes enregistrés</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"{{ path('user_my_recipes', {'username': user.username}) }}\" class=\"nav-link\">Mes recettes</a>
            </li>
        </ul>
    </div>
</div>

    {% if current_path == 'informations' %}
    <div class=\"tab-pane fade show active\">

        <div class=\"container mb-5 user-informations\">
            <div class=\"row\">
                <div class=\"col\">
                    <label class=\"mb-4\">Informations de compte</label>
                    <p><strong>Email</strong> : {{ user.email }}</p>
                    <p><strong>Regime alimentaire</strong> : {{ user.regime }}</p>
                </div>
                <div class=\"col\">
                    <label>Réseaux sociaux
                        <p class=\"sub-label mb-4\">Vous pouvez ajouter vos profils sur les différents réseaux sociaux<br>
                            pour inciter les utilisateurs à vous suivre.</p></label>
                    <p><strong>facebook</strong> : {{ user.facebook }}</p>
                    <p><strong>Instagram</strong> : {{ user.instagram }}</p>
                    <p><strong>Pinterest</strong> : {{ user.pinterest }}</p>
                    <p><strong>Snapchat</strong> : {{ user.snapchat }}</p>
                </div>
            </div>
        </div>
    </div>
    {% elseif current_path == 'saveRecipe' %}
        <div class=\"\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
                <div class=\"row\">
                    {% for saveRecipe in saveRecipes %}
                        <div class=\"col-xs-12 col-md-6 col-lg-4\">
                            <div class=\"card\">
                                <a href=\"{{ path('recipe_show', {'slug': saveRecipe.recipe.slug}) }}\"><img class=\"card-img-top\" src=\"{{ asset('uploads/recipes/' ~ saveRecipe.recipe.picture) }}\" alt=\"recette {{ saveRecipe.recipe.name }}\"> </a>
                                <div class=\"top-right\"><label class=\"label label-danger\">{{ saveRecipe.recipe.type }}</label></div>
                                <div class=\"top-left\"><span class=\"like label-warning\"> <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> {{ saveRecipe.recipe.likes|length }}</span></div>
                                <div class=\"card-body\">
                                    <h6 class=\"card-regime\">Régime : {{ saveRecipe.recipe.regime }}</h6>

                                    <h5 class=\"card-title\">{{ saveRecipe.recipe.name }}</h5>
                                    <p class=\"card-text\">
                                        {% for tag in saveRecipe.recipe.tags %}
                                            <span class=\"tags\">
                                                <label class=\"label label-default mr-1\">#{{ tag.name }}</label>
                                            </span>
                                        {% endfor %}
                                    </p>
                                    <a href=\"{{ path ('recipe_show', {'slug': saveRecipe.recipe.slug })}}\" class=\"btn btn-success\">Voir la recette</a>
                                </div>
                            </div>
                        </div>
                        {% else %}
                            <div class=\"container mb-4\">
                                <p>Vous n'avez aucune recette enregistrée</p>
                            </div>
                    {% endfor %}
                </div>
                <div class=\"pagination justify-content-center\">
                    {{ knp_pagination_render(saveRecipes) }}
                </div>
            </div>
        </div>
    {% elseif current_path == 'userRecipe' %}
        <div class=\"\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
                <div class=\"row\">
                    {% for recipe in userRecipes %}
                        {% include 'recipe/_recipesByUser.html.twig' %}
                    {% else %}
                        <div class=\"container mb-4\">
                            <p>Vous n'avez partager aucune recette</p>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"pagination justify-content-center\">
                    {{ knp_pagination_render(userRecipes) }}
                </div>
            </div>
        </div>
    {% endif %}
    </div>
{% endblock %}
", "user/show.html.twig", "/home/cortez/Sites/reciplink/templates/user/show.html.twig");
    }
}
