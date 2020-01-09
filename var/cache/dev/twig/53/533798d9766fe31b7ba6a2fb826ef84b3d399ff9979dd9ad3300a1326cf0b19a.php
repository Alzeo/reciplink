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

/* recipe/_recipesByUser.html.twig */
class __TwigTemplate_8ce95720ab557e3379e2a117b9be92794d96ecfa22eadaf9fa0622063444998c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/_recipesByUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/_recipesByUser.html.twig"));

        // line 1
        echo "<div class=\"col-xs-12 col-md-6 col-lg-4\">
    <div class=\"card\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 3, $this->source); })()), "slug", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\"><img class=\"card-img-top\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recipes/" . twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 3, $this->source); })()), "picture", [], "any", false, false, false, 3))), "html", null, true);
        echo "\" alt=\"recette ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "\"> </a>
        <div class=\"top-right\"><label class=\"label label-danger\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 4, $this->source); })()), "type", [], "any", false, false, false, 4), "html", null, true);
        echo "</label></div>
        <div class=\"top-left\"><span class=\"like label-warning\"> <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 5, $this->source); })()), "likes", [], "any", false, false, false, 5)), "html", null, true);
        echo "</span></div>
        <div class=\"card-body\">
            <span class=\"statut mb-3\">
                ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 8, $this->source); })()), "publish", [], "any", false, false, false, 8) == false)) {
            // line 9
            echo "                    <div class=\"statut-i\" data-toggle=\"popover\" data-placement=\"top\" title=\"\" data-content=\"Recette en cours de traitement.\">statut : <i class=\"fa fa-eye\"></i>
                    </div> ";
        } else {
            // line 10
            echo " <div class=\"statut-i\" data-toggle=\"popover\" data-placement=\"top\" title=\"\" data-content=\"Votre recette a été validé\">statut : <i class=\"fa fa-check\"></i>
                    </div>  ";
        }
        // line 12
        echo "            </span>
            <h6 class=\"card-regime mt-3\">Régime : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 13, $this->source); })()), "regime", [], "any", false, false, false, 13), "html", null, true);
        echo "</h6>

            <h5 class=\"card-title\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</h5>
            <p class=\"card-text\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 17, $this->source); })()), "tags", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 18
            echo "                    <span class=\"tags\">
                        <label class=\"label label-default mr-1\">#";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</label>
                    </span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </p>
            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 23, $this->source); })()), "slug", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" class=\"btn btn-success\">Voir la recette</a>
            ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24) == twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)))) {
            // line 25
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 25, $this->source); })()), "slug", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-neutral\">Modifier ma recette</a>
            ";
        }
        // line 27
        echo "        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recipe/_recipesByUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  113 => 25,  111 => 24,  107 => 23,  104 => 22,  95 => 19,  92 => 18,  88 => 17,  83 => 15,  78 => 13,  75 => 12,  71 => 10,  67 => 9,  65 => 8,  59 => 5,  55 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xs-12 col-md-6 col-lg-4\">
    <div class=\"card\">
        <a href=\"{{ path('recipe_show', {'slug': recipe.slug}) }}\"><img class=\"card-img-top\" src=\"{{ asset('uploads/recipes/' ~ recipe.picture) }}\" alt=\"recette {{ recipe.name }}\"> </a>
        <div class=\"top-right\"><label class=\"label label-danger\">{{ recipe.type }}</label></div>
        <div class=\"top-left\"><span class=\"like label-warning\"> <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> {{ recipe.likes|length }}</span></div>
        <div class=\"card-body\">
            <span class=\"statut mb-3\">
                {% if recipe.publish == false %}
                    <div class=\"statut-i\" data-toggle=\"popover\" data-placement=\"top\" title=\"\" data-content=\"Recette en cours de traitement.\">statut : <i class=\"fa fa-eye\"></i>
                    </div> {% else %} <div class=\"statut-i\" data-toggle=\"popover\" data-placement=\"top\" title=\"\" data-content=\"Votre recette a été validé\">statut : <i class=\"fa fa-check\"></i>
                    </div>  {% endif %}
            </span>
            <h6 class=\"card-regime mt-3\">Régime : {{ recipe.regime }}</h6>

            <h5 class=\"card-title\">{{ recipe.name }}</h5>
            <p class=\"card-text\">
                {% for tag in recipe.tags %}
                    <span class=\"tags\">
                        <label class=\"label label-default mr-1\">#{{ tag.name }}</label>
                    </span>
                {% endfor %}
            </p>
            <a href=\"{{ path ('recipe_show', {'slug': recipe.slug })}}\" class=\"btn btn-success\">Voir la recette</a>
            {% if  app.user and app.user == recipe.user %}
                <a href=\"{{ path('recipe_edit', {'slug': recipe.slug}) }}\" class=\"btn btn-neutral\">Modifier ma recette</a>
            {% endif %}
        </div>
    </div>
</div>
", "recipe/_recipesByUser.html.twig", "/home/cortez/Sites/reciplink/templates/recipe/_recipesByUser.html.twig");
    }
}
