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
class __TwigTemplate_d9f3ace77f43931bfd62b5dbfbde4cdb96c84f3197baad701adfced32b9b7807 extends \Twig\Template
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

        echo "User";
        
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
        <a class=\"btn btn-neutral mt-4\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">Modifier mon profil</a>
    </div>
<div class=\"nav-tabs-navigation container\">
    <div class=\"nav-tabs-wrapper\">
        <ul class=\"nav nav-tabs\" id=\"pills-tab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\"
                   aria-controls=\"pills-home\" aria-selected=\"true\">Mes informations</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\"
                   aria-controls=\"pills-profile\" aria-selected=\"false\">Recettes enregistrés</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-contact-tab\" data-toggle=\"pill\" href=\"#pills-contact\" role=\"tab\"
                   aria-controls=\"pills-contact\" aria-selected=\"false\">Mes recettes</a>
            </li>
        </ul>
    </div>
</div>

    <div class=\"tab-content pt-2 pl-1\" id=\"pills-tabContent\">
        <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            <div class=\"container-fluid\" style=\"width: 80%;\">
                <p>Pseudonyme : ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "username", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
                <p>Email : ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "</p>
            </div>
            </div>
        <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
                <div class=\"row\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["saveRecipes"]) || array_key_exists("saveRecipes", $context) ? $context["saveRecipes"] : (function () { throw new RuntimeError('Variable "saveRecipes" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["saveRecipe"]) {
            // line 40
            echo "                        <div class=\"col-xs-12 col-md-6 col-lg-4\">
                            <div class=\"card\">
                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"><img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recipes/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 42), "picture", [], "any", false, false, false, 42))), "html", null, true);
            echo "\" alt=\"recette ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo "\"> </a>
                                <div class=\"top-right\"><label class=\"label label-danger\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 43), "type", [], "any", false, false, false, 43), "html", null, true);
            echo "</label></div>
                                <div class=\"top-left\"><span class=\"like label-warning\"> <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 44), "likes", [], "any", false, false, false, 44)), "html", null, true);
            echo "</span></div>
                                <div class=\"card-body\">
                                    <h6 class=\"card-regime\">Régime : ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 46), "regime", [], "any", false, false, false, 46), "html", null, true);
            echo "</h6>

                                    <h5 class=\"card-title\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</h5>
                                    <p class=\"card-text\">
                                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 50), "tags", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 51
                echo "                                            <span class=\"tags\">
                        <label class=\"label label-default mr-1\">#";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 52), "html", null, true);
                echo "</label>
                    </span>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                    </p>
                                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["saveRecipe"], "recipe", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Voir la recette</a>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['saveRecipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </div>

            </div>
        </div>
        <div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
               <div class=\"row\">
                   ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 67, $this->source); })()));
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
            // line 68
            echo "                       ";
            $this->loadTemplate("recipe/_recipe.html.twig", "user/show.html.twig", 68)->display($context);
            // line 69
            echo "                   ";
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
        // line 70
        echo "               </div>
                <div class=\"pagination justify-content-center\">
                    ";
        // line 72
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 72, $this->source); })()));
        echo "
                </div>
            </div>
        </div>
    </div>


    ";
        // line 79
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
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
        return array (  258 => 79,  248 => 72,  244 => 70,  230 => 69,  227 => 68,  210 => 67,  202 => 61,  191 => 56,  188 => 55,  179 => 52,  176 => 51,  172 => 50,  167 => 48,  162 => 46,  157 => 44,  153 => 43,  145 => 42,  141 => 40,  137 => 39,  129 => 34,  125 => 33,  98 => 9,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User{% endblock %}

{% block body %}
    <div class=\"jumbotron text-center\" style=\"background-image: url({{ asset ('/assets/img/background-user.jpg') }});  background-repeat: no-repeat; background-size:cover; background-position: center\">
        <h1><i class=\"fa fa-user-circle\"></i></h1>
        <div class=\"typography-line\"><h2>La cuisine de {{ user.username}}</h2></div>
        <a class=\"btn btn-neutral mt-4\" href=\"{{ path('user_edit', {'id': user.id}) }}\">Modifier mon profil</a>
    </div>
<div class=\"nav-tabs-navigation container\">
    <div class=\"nav-tabs-wrapper\">
        <ul class=\"nav nav-tabs\" id=\"pills-tab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\"
                   aria-controls=\"pills-home\" aria-selected=\"true\">Mes informations</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\"
                   aria-controls=\"pills-profile\" aria-selected=\"false\">Recettes enregistrés</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-contact-tab\" data-toggle=\"pill\" href=\"#pills-contact\" role=\"tab\"
                   aria-controls=\"pills-contact\" aria-selected=\"false\">Mes recettes</a>
            </li>
        </ul>
    </div>
</div>

    <div class=\"tab-content pt-2 pl-1\" id=\"pills-tabContent\">
        <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            <div class=\"container-fluid\" style=\"width: 80%;\">
                <p>Pseudonyme : {{ user.username }}</p>
                <p>Email : {{ user.email }}</p>
            </div>
            </div>
        <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
                <div class=\"row\">
                    {% for saveRecipe in saveRecipes %}
                        <div class=\"col-xs-12 col-md-6 col-lg-4\">
                            <div class=\"card\">
                                <a href=\"{{ path('recipe_show', {'id': saveRecipe.recipe.id}) }}\"><img class=\"card-img-top\" src=\"{{ asset('uploads/recipes/' ~ saveRecipe.recipe.picture) }}\" alt=\"recette {{ saveRecipe.recipe.name }}\"> </a>
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
                                    <a href=\"{{ path ('recipe_show', {'id': saveRecipe.recipe.id })}}\" class=\"btn btn-success\">Voir la recette</a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>

            </div>
        </div>
        <div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
               <div class=\"row\">
                   {% for recipe in recipes %}
                       {% include 'recipe/_recipe.html.twig' %}
                   {% endfor %}
               </div>
                <div class=\"pagination justify-content-center\">
                    {{ knp_pagination_render(recipes) }}
                </div>
            </div>
        </div>
    </div>


    {{ include('user/_delete_form.html.twig') }}
{% endblock %}
", "user/show.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/user/show.html.twig");
    }
}
