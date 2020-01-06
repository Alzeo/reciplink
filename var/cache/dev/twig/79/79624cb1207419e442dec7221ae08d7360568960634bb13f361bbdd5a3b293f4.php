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

/* main/profilUser.html.twig */
class __TwigTemplate_7961113867d234f809f2e1cd5c050b33e90272679bceada3a5351e23b84a83ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/profilUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/profilUser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/profilUser.html.twig", 1);
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

        echo "La cuisine de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 3, $this->source); })()), "username", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "<div class=\"jumbotron text-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/background-user.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size:cover; background-position: center\">
    <h1><i class=\"fa fa-user-circle\"></i></h1>
    <div class=\"typography-line\"><h2>La cuisine de ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 8, $this->source); })()), "username", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2></div>
    ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 9, $this->source); })()), "regime", [], "any", false, false, false, 9) != null)) {
            echo " <h6 class=\"card-regime mt-3\">Régime : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 9, $this->source); })()), "regime", [], "any", false, false, false, 9), "html", null, true);
            echo "</h6>";
        } else {
        }
        // line 10
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-3\">
                ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 13, $this->source); })()), "facebook", [], "any", false, false, false, 13) != null)) {
            echo "<i class=\"fa fa-facebook-square\"></i><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 13, $this->source); })()), "facebook", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"\">Voir le profil</a>  </h6>";
        } else {
        }
        // line 14
        echo "            </div>
            <div class=\"col-3\">
                ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 16, $this->source); })()), "instagram", [], "any", false, false, false, 16) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 16, $this->source); })()), "instagram", [], "any", false, false, false, 16), "html", null, true);
            echo "</h6>";
        } else {
        }
        // line 17
        echo "            </div>
            <div class=\"col-3\">
                ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 19, $this->source); })()), "pinterest", [], "any", false, false, false, 19) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 19, $this->source); })()), "pinterest", [], "any", false, false, false, 19), "html", null, true);
            echo "</h6>";
        } else {
        }
        // line 20
        echo "            </div>
            <div class=\"col-3\">
                ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 22, $this->source); })()), "snapchat", [], "any", false, false, false, 22) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 22, $this->source); })()), "snapchat", [], "any", false, false, false, 22), "html", null, true);
            echo "</h6>";
        } else {
        }
        // line 23
        echo "            </div>
        </div>
    </div>
</div>

    <div class=\"\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
            <div class=\"row\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profilRecipes"]) || array_key_exists("profilRecipes", $context) ? $context["profilRecipes"] : (function () { throw new RuntimeError('Variable "profilRecipes" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 31
            echo "                    <div class=\"col-xs-12 col-md-6 col-lg-4\">
                        <div class=\"card\">
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"><img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recipes/" . twig_get_attribute($this->env, $this->source, $context["recipe"], "picture", [], "any", false, false, false, 33))), "html", null, true);
            echo "\" alt=\"recette ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "\"> </a>
                            <div class=\"top-right\"><label class=\"label label-danger\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "type", [], "any", false, false, false, 34), "html", null, true);
            echo "</label></div>
                            <div class=\"top-left\"><span class=\"like label-warning\"> <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> ";
            // line 35
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "likes", [], "any", false, false, false, 35)), "html", null, true);
            echo "</span></div>
                            <div class=\"card-body\">
                                <h6 class=\"card-regime\">Régime : ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "regime", [], "any", false, false, false, 37), "html", null, true);
            echo "</h6>

                                <h5 class=\"card-title\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</h5>
                                <p class=\"card-text\">
                                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["recipe"], "tags", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 42
                echo "                                        <span class=\"tags\">
                                                <label class=\"label label-default mr-1\">#";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 43), "html", null, true);
                echo "</label>
                                            </span>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                </p>
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Voir la recette</a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
            <div class=\"pagination justify-content-center\">
                ";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["profilRecipes"]) || array_key_exists("profilRecipes", $context) ? $context["profilRecipes"] : (function () { throw new RuntimeError('Variable "profilRecipes" does not exist.', 54, $this->source); })()));
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/profilUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 54,  225 => 52,  214 => 47,  211 => 46,  202 => 43,  199 => 42,  195 => 41,  190 => 39,  185 => 37,  180 => 35,  176 => 34,  168 => 33,  164 => 31,  160 => 30,  151 => 23,  144 => 22,  140 => 20,  133 => 19,  129 => 17,  122 => 16,  118 => 14,  111 => 13,  106 => 10,  99 => 9,  95 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}La cuisine de {{ profile.username }}{% endblock %}

{% block body %}
<div class=\"jumbotron text-center\" style=\"background-image: url({{ asset ('/assets/img/background-user.jpg') }});  background-repeat: no-repeat; background-size:cover; background-position: center\">
    <h1><i class=\"fa fa-user-circle\"></i></h1>
    <div class=\"typography-line\"><h2>La cuisine de {{ profile.username }}</h2></div>
    {% if profile.regime != null %} <h6 class=\"card-regime mt-3\">Régime : {{ profile.regime }}</h6>{% else %}{% endif %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-3\">
                {% if profile.facebook != null %}<i class=\"fa fa-facebook-square\"></i><a href=\"{{ profile.facebook }}\" class=\"\">Voir le profil</a>  </h6>{% else %}{% endif %}
            </div>
            <div class=\"col-3\">
                {% if profile.instagram != null %} {{ profile.instagram }}</h6>{% else %}{% endif %}
            </div>
            <div class=\"col-3\">
                {% if profile.pinterest != null %} {{ profile.pinterest }}</h6>{% else %}{% endif %}
            </div>
            <div class=\"col-3\">
                {% if profile.snapchat != null %} {{ profile.snapchat }}</h6>{% else %}{% endif %}
            </div>
        </div>
    </div>
</div>

    <div class=\"\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
            <div class=\"row\">
                {% for recipe in profilRecipes %}
                    <div class=\"col-xs-12 col-md-6 col-lg-4\">
                        <div class=\"card\">
                            <a href=\"{{ path('recipe_show', {'id': recipe.id}) }}\"><img class=\"card-img-top\" src=\"{{ asset('uploads/recipes/' ~ recipe.picture) }}\" alt=\"recette {{ recipe.name }}\"> </a>
                            <div class=\"top-right\"><label class=\"label label-danger\">{{ recipe.type }}</label></div>
                            <div class=\"top-left\"><span class=\"like label-warning\"> <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> {{ recipe.likes|length }}</span></div>
                            <div class=\"card-body\">
                                <h6 class=\"card-regime\">Régime : {{ recipe.regime }}</h6>

                                <h5 class=\"card-title\">{{ recipe.name }}</h5>
                                <p class=\"card-text\">
                                    {% for tag in recipe.tags %}
                                        <span class=\"tags\">
                                                <label class=\"label label-default mr-1\">#{{ tag.name }}</label>
                                            </span>
                                    {% endfor %}
                                </p>
                                <a href=\"{{ path ('recipe_show', {'id': recipe.id })}}\" class=\"btn btn-success\">Voir la recette</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"pagination justify-content-center\">
                {{ knp_pagination_render(profilRecipes) }}
            </div>
        </div>
    </div>

{% endblock %}
", "main/profilUser.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/main/profilUser.html.twig");
    }
}
