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

/* recipe/show.html.twig */
class __TwigTemplate_c296a2bbaeaaf562e63eeada08f023009758847de2160a8a3b27c919c9a7e77f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipe/show.html.twig", 1);
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

        echo "Recipe";
        
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
        echo "<div class=\"block-im-recipe text-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/select-program-background.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size: cover;\">
    <div class=\"container\">
        <div class=\"image_header pt-5\">
            <h1 class=\"images-title text-center\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
            <h6 class=\"card-regime\">Régime : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 10, $this->source); })()), "regime", [], "any", false, false, false, 10), "html", null, true);
        echo "</h6>
            <p class=\"card-text\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 12, $this->source); })()), "tags", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 13
            echo "                    <span class=\"tags\">
                        <label class=\"label label-default mr-1\">#";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</label>
                    </span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </p>
            <div class=\"head-recip row mt-2\">
                <div class=\"col-6 author\">
                    <p>Recette proposée par : <span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
        echo "</span></p>
                </div>
                <div class=\"col-6\">
                    ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 24
            echo "                        <a href=\"#\" class=\"btn btn-round btn-danger\">Enregistrer la recette</a>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-round btn-warning js-like\">
                        ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26) && twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 26, $this->source); })()), "isLikeByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)], "method", false, false, false, 26))) {
                // line 27
                echo "                                <i class=\"fa fa-heart\"></i>
                            ";
            } else {
                // line 29
                echo "                                <i class=\"fa fa-heart-o\"></i>
                            ";
            }
            // line 31
            echo "                            <span class=\"js-likes\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 31, $this->source); })()), "likes", [], "any", false, false, false, 31)), "html", null, true);
            echo "</span>
                            <span class=\"js-label\"></span>
                        </a>

                        ";
        } else {
            // line 36
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-round btn-warning btn-primary\">
                                    <i class=\"fa fa-heart-o\"></i>
                                <span class=\"js-likes\">";
            // line 38
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 38, $this->source); })()), "likes", [], "any", false, false, false, 38)), "html", null, true);
            echo "</span>
                                <span class=\"js-label\"></span>
                            </a>
                    ";
        }
        // line 42
        echo "                </div>
            </div>
            <img class=\"img-responsive img-recipe\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recipes/" . twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 44, $this->source); })()), "picture", [], "any", false, false, false, 44))), "html", null, true);
        echo "\" alt=\"recette ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
        </div>
        <div class=\"more-info-recipe\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <p><i class=\"fa fa-cutlery\"></i> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-4\">
                        <i class=\"fa fa-hourglass-half\" aria-hidden=\"true\"></i> ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 52, $this->source); })()), "time", [], "any", false, false, false, 52), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 52, $this->source); })()), "timeUnity", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-4\">
                        <p><i class=\"fa fa-signal\"></i> ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 55, $this->source); })()), "dificulty", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
        <div class=\"explain-recip text-left mb-5\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <h4>Ingrédients</h4>
                    <div class=\"foods mt-4\">
                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 64, $this->source); })()), "foods", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 65
            echo "                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantity", [], "any", false, false, false, 67), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantityUnity", [], "any", false, false, false, 67), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "
                                </li>
                            </ul>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    </div>
                </div>
                <div class=\"col-8\">
                    <h4>Préparation</h4>
                    <p class=\"text-justify text-left mt-4\">
                        ";
        // line 76
        echo twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76);
        echo "
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recipe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 85,  242 => 76,  235 => 71,  221 => 67,  217 => 65,  213 => 64,  201 => 55,  193 => 52,  187 => 49,  177 => 44,  173 => 42,  166 => 38,  160 => 36,  151 => 31,  147 => 29,  143 => 27,  141 => 26,  137 => 25,  134 => 24,  132 => 23,  126 => 20,  121 => 17,  112 => 14,  109 => 13,  105 => 12,  100 => 10,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recipe{% endblock %}

{% block body %}
<div class=\"block-im-recipe text-center\" style=\"background-image: url({{ asset ('/assets/img/select-program-background.jpg') }});  background-repeat: no-repeat; background-size: cover;\">
    <div class=\"container\">
        <div class=\"image_header pt-5\">
            <h1 class=\"images-title text-center\">{{recipe.name}}</h1>
            <h6 class=\"card-regime\">Régime : {{ recipe.regime }}</h6>
            <p class=\"card-text\">
                {% for tag in recipe.tags %}
                    <span class=\"tags\">
                        <label class=\"label label-default mr-1\">#{{ tag.name }}</label>
                    </span>
                {% endfor %}
            </p>
            <div class=\"head-recip row mt-2\">
                <div class=\"col-6 author\">
                    <p>Recette proposée par : <span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {{ recipe.user.username }}</span></p>
                </div>
                <div class=\"col-6\">
                    {% if is_granted('ROLE_USER') %}
                        <a href=\"#\" class=\"btn btn-round btn-danger\">Enregistrer la recette</a>
                        <a href=\"{{ path('recipe_like', {'id': recipe.id}) }}\" class=\"btn btn-round btn-warning js-like\">
                        {% if app.user and recipe.isLikeByUser(app.user) %}
                                <i class=\"fa fa-heart\"></i>
                            {% else %}
                                <i class=\"fa fa-heart-o\"></i>
                            {% endif %}
                            <span class=\"js-likes\">{{ recipe.likes|length }}</span>
                            <span class=\"js-label\"></span>
                        </a>

                        {% else %}
                            <a href=\"{{ path('app_login') }}\" class=\"btn btn-round btn-warning btn-primary\">
                                    <i class=\"fa fa-heart-o\"></i>
                                <span class=\"js-likes\">{{ recipe.likes|length }}</span>
                                <span class=\"js-label\"></span>
                            </a>
                    {% endif %}
                </div>
            </div>
            <img class=\"img-responsive img-recipe\" src=\"{{ asset('uploads/recipes/' ~ recipe.picture) }}\" alt=\"recette {{ recipe.name }}\">
        </div>
        <div class=\"more-info-recipe\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <p><i class=\"fa fa-cutlery\"></i> {{ recipe.type }}</p>
                    </div>
                    <div class=\"col-4\">
                        <i class=\"fa fa-hourglass-half\" aria-hidden=\"true\"></i> {{recipe.time }} {{ recipe.timeUnity }}</p>
                    </div>
                    <div class=\"col-4\">
                        <p><i class=\"fa fa-signal\"></i> {{ recipe.dificulty }}</p>
                    </div>
                </div>
            </div>
        <div class=\"explain-recip text-left mb-5\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <h4>Ingrédients</h4>
                    <div class=\"foods mt-4\">
                        {% for food in recipe.foods %}
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    {{ food.quantity }} {{ food.quantityUnity }} {{ food.name }}
                                </li>
                            </ul>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"col-8\">
                    <h4>Préparation</h4>
                    <p class=\"text-justify text-left mt-4\">
                        {{ recipe.description|raw }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascript %}
{% endblock %}
", "recipe/show.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/recipe/show.html.twig");
    }
}
