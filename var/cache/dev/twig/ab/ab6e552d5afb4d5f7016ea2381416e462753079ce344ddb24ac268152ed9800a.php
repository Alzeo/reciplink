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
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" class=\"nav-link\">Mes informations</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_save_recipe", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" class=\"nav-link\">Recettes enregistrés</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_my_recipes", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
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

        <div class=\"container-fluid\" style=\"width: 80%;\">
            <p>Pseudonyme : ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "username", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
            <p>Email : ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
            ";
            // line 33
            echo twig_include($this->env, $context, "user/_delete_form.html.twig");
            echo "
        </div>
    </div>
    ";
        } elseif ((        // line 36
(isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 36, $this->source); })()) == "saveRecipe")) {
            // line 37
            echo "        <div class=\"\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
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
                <div class=\"pagination justify-content-center\">
                    ";
            // line 63
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["saveRecipes"]) || array_key_exists("saveRecipes", $context) ? $context["saveRecipes"] : (function () { throw new RuntimeError('Variable "saveRecipes" does not exist.', 63, $this->source); })()));
            echo "
                </div>
            </div>
        </div>
    ";
        } elseif ((        // line 67
(isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 67, $this->source); })()) == "userRecipe")) {
            // line 68
            echo "        <div class=\"\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
                <div class=\"row\">
                    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userRecipes"]) || array_key_exists("userRecipes", $context) ? $context["userRecipes"] : (function () { throw new RuntimeError('Variable "userRecipes" does not exist.', 70, $this->source); })()));
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
                // line 71
                echo "                        ";
                $this->loadTemplate("recipe/_recipesByUser.html.twig", "user/show.html.twig", 71)->display($context);
                // line 72
                echo "                    ";
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
            // line 73
            echo "                </div>
                <div class=\"pagination justify-content-center\">
                    ";
            // line 75
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["userRecipes"]) || array_key_exists("userRecipes", $context) ? $context["userRecipes"] : (function () { throw new RuntimeError('Variable "userRecipes" does not exist.', 75, $this->source); })()));
            echo "
                </div>
            </div>
        </div>
    ";
        } else {
            // line 80
            echo "        test
    ";
        }
        // line 82
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
        return array (  287 => 82,  283 => 80,  275 => 75,  271 => 73,  257 => 72,  254 => 71,  237 => 70,  233 => 68,  231 => 67,  224 => 63,  220 => 61,  209 => 56,  206 => 55,  197 => 52,  194 => 51,  190 => 50,  185 => 48,  180 => 46,  175 => 44,  171 => 43,  163 => 42,  159 => 40,  155 => 39,  151 => 37,  149 => 36,  143 => 33,  139 => 32,  135 => 31,  130 => 28,  128 => 27,  119 => 21,  113 => 18,  107 => 15,  98 => 9,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                <a href=\"{{ path('user_show', {'id': user.id}) }}\" class=\"nav-link\">Mes informations</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"{{ path('user_save_recipe', {'id': user.id}) }}\" class=\"nav-link\">Recettes enregistrés</a>
            </li>
            <li class=\"nav-item\">
                <a href=\"{{ path('user_my_recipes', {'id': user.id}) }}\" class=\"nav-link\">Mes recettes</a>
            </li>
        </ul>
    </div>
</div>

    {% if current_path == 'informations' %}
    <div class=\"tab-pane fade show active\">

        <div class=\"container-fluid\" style=\"width: 80%;\">
            <p>Pseudonyme : {{ user.username }}</p>
            <p>Email : {{ user.email }}</p>
            {{ include('user/_delete_form.html.twig') }}
        </div>
    </div>
    {% elseif current_path == 'saveRecipe' %}
        <div class=\"\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
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
                    {% endfor %}
                </div>
                <div class=\"pagination justify-content-center\">
                    {{ knp_pagination_render(userRecipes) }}
                </div>
            </div>
        </div>
    {% else %}
        test
    {% endif %}
    </div>
{% endblock %}
", "user/show.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/user/show.html.twig");
    }
}
