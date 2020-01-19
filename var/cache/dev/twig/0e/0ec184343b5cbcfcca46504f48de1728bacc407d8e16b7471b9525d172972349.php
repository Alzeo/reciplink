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

/* admin/recipe/index.html.twig */
class __TwigTemplate_2a85034f2486abac12ff4c4efce942f32313af242c31b04ba32703af9d34eeb9 extends \Twig\Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipe/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipe/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/recipe/index.html.twig", 1);
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

        echo "Administration des recettes";
        
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
        echo "<div class=\"container-fluid\">
    <h1 class=\"my-5\">
        Gestion des recettes
    </h1>

    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Publié</th>
            <th>Utilisateur</th>
            <th class=\"text-center\">Commentaires</th>
            <th class=\"text-center\">Likes</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 25
            echo "        <tr>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["recipe"], "publish", [], "any", false, false, false, 29) == 1)) {
                // line 30
                echo "                    Validée
                ";
            } else {
                // line 32
                echo "                    En attente
                ";
            }
            // line 34
            echo "            </td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["recipe"], "user", [], "any", false, false, false, 35), "username", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
            <td class=\"text-center\"><span class=\"badge badge-primary rounded\">";
            // line 36
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "commentRecipe", [], "any", false, false, false, 36)), "html", null, true);
            echo "</span> </td>
            <td class=\"text-center\"><span class=\"badge badge-primary rounded\">";
            // line 37
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "likes", [], "any", false, false, false, 37)), "html", null, true);
            echo "</span></td>
            <td>
                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_recipes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-edit\"></i></a>
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_recipes_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/recipe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 44,  154 => 40,  150 => 39,  145 => 37,  141 => 36,  137 => 35,  134 => 34,  130 => 32,  126 => 30,  124 => 29,  119 => 27,  115 => 26,  112 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Administration des recettes{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <h1 class=\"my-5\">
        Gestion des recettes
    </h1>

    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Publié</th>
            <th>Utilisateur</th>
            <th class=\"text-center\">Commentaires</th>
            <th class=\"text-center\">Likes</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for recipe in recipes %}
        <tr>
            <td>{{ recipe.id }}</td>
            <td>{{ recipe.name }}</td>
            <td>
                {% if recipe.publish == 1 %}
                    Validée
                {% else %}
                    En attente
                {% endif %}
            </td>
            <td>{{ recipe.user.username }}</td>
            <td class=\"text-center\"><span class=\"badge badge-primary rounded\">{{ recipe.commentRecipe|length }}</span> </td>
            <td class=\"text-center\"><span class=\"badge badge-primary rounded\">{{ recipe.likes|length }}</span></td>
            <td>
                <a href=\"{{path('admin_recipes_edit', {'id': recipe.id})}}\" class=\"btn btn-primary\"><i class=\"fa fa-edit\"></i></a>
                <a href=\"{{path('admin_recipes_delete', {'id': recipe.id})}}\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
            </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "admin/recipe/index.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/admin/recipe/index.html.twig");
    }
}
