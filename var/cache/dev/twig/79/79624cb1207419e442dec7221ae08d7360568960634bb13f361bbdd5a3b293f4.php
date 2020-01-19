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
        echo " </h2></div>
    <p>Total de recettes postées : <span class=\"label label-info\"> ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["countRecipes"]) || array_key_exists("countRecipes", $context) ? $context["countRecipes"] : (function () { throw new RuntimeError('Variable "countRecipes" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</span></p>
    ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 10, $this->source); })()), "regime", [], "any", false, false, false, 10) != null)) {
            echo " <h6 class=\"card-regime mt-3\">Régime : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 10, $this->source); })()), "regime", [], "any", false, false, false, 10), "html", null, true);
            echo "</h6>";
        } else {
        }
        // line 11
        echo "    <div class=\"container social-media\">
        <div class=\"row\">
            <div class=\"col-3\">
                ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 14, $this->source); })()), "facebook", [], "any", false, false, false, 14) != null)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 14, $this->source); })()), "facebook", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"facebook sharrre btn-round ml-2 btn btn-github-bg\"><i class=\"fa fa-facebook-square\"></i> Facebook</a>  </h6>";
        } else {
        }
        // line 15
        echo "            </div>
            <div class=\"col-3\">
                ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 17, $this->source); })()), "instagram", [], "any", false, false, false, 17) != null)) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 17, $this->source); })()), "instagram", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"instagram sharrre btn-round ml-2 btn btn-github-bg\"><i class=\"fa fa-instagram\"></i> Instagram</a>";
        } else {
        }
        // line 18
        echo "            </div>
            <div class=\"col-3\">
                ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 20, $this->source); })()), "pinterest", [], "any", false, false, false, 20) != null)) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 20, $this->source); })()), "pinterest", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"pinterest sharrre btn-round ml-2 btn btn-github-bg\"><i class=\"fa fa-pinterest-square\"></i> Pinterest</a></h6>";
        } else {
        }
        // line 21
        echo "            </div>
            <div class=\"col-3\">
                ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 23, $this->source); })()), "snapchat", [], "any", false, false, false, 23) != null)) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 23, $this->source); })()), "snapchat", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"snapchat sharrre btn-round ml-2 btn btn-github-bg\"><i class=\"fa fa-snapchat-square\"></i> Snapchat</a></h6>";
        } else {
        }
        // line 24
        echo "            </div>
        </div>
    </div>
</div>

    <div class=\"\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
            <div class=\"row\">
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profilRecipes"]) || array_key_exists("profilRecipes", $context) ? $context["profilRecipes"] : (function () { throw new RuntimeError('Variable "profilRecipes" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 32
            echo "                    <div class=\"col-xs-12 col-md-6 col-lg-4\">
                        <div class=\"card\">
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["recipe"], "slug", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recipes/" . twig_get_attribute($this->env, $this->source, $context["recipe"], "picture", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" alt=\"recette ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "\"> </a>
                            <div class=\"top-right\"><label class=\"label label-danger\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "type", [], "any", false, false, false, 35), "html", null, true);
            echo "</label></div>
                            <div class=\"top-left\"><span class=\"like label-warning\"> <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> ";
            // line 36
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "likes", [], "any", false, false, false, 36)), "html", null, true);
            echo "</span></div>
                            <div class=\"card-body\">
                                <h6 class=\"card-regime\">Régime : ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "regime", [], "any", false, false, false, 38), "html", null, true);
            echo "</h6>

                                <h5 class=\"card-title\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</h5>
                                <p class=\"card-text\">
                                    ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["recipe"], "tags", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 43
                echo "                                        <span class=\"tags\">
                                                <label class=\"label label-default mr-1\">#";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</label>
                                            </span>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                </p>
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["recipe"], "slug", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Voir la recette</a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </div>
            <div class=\"pagination justify-content-center\">
                ";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["profilRecipes"]) || array_key_exists("profilRecipes", $context) ? $context["profilRecipes"] : (function () { throw new RuntimeError('Variable "profilRecipes" does not exist.', 55, $this->source); })()));
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
        return array (  233 => 55,  229 => 53,  218 => 48,  215 => 47,  206 => 44,  203 => 43,  199 => 42,  194 => 40,  189 => 38,  184 => 36,  180 => 35,  172 => 34,  168 => 32,  164 => 31,  155 => 24,  148 => 23,  144 => 21,  137 => 20,  133 => 18,  126 => 17,  122 => 15,  115 => 14,  110 => 11,  103 => 10,  99 => 9,  95 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}La cuisine de {{ profile.username }}{% endblock %}

{% block body %}
<div class=\"jumbotron text-center\" style=\"background-image: url({{ asset ('/assets/img/background-user.jpg') }});  background-repeat: no-repeat; background-size:cover; background-position: center\">
    <h1><i class=\"fa fa-user-circle\"></i></h1>
    <div class=\"typography-line\"><h2>La cuisine de {{ profile.username }} </h2></div>
    <p>Total de recettes postées : <span class=\"label label-info\"> {{ countRecipes }}</span></p>
    {% if profile.regime != null %} <h6 class=\"card-regime mt-3\">Régime : {{ profile.regime }}</h6>{% else %}{% endif %}
    <div class=\"container social-media\">
        <div class=\"row\">
            <div class=\"col-3\">
                {% if profile.facebook != null %}<a href=\"{{ profile.facebook }}\" class=\"facebook sharrre btn-round ml-2 btn btn-github-bg\"><i class=\"fa fa-facebook-square\"></i> Facebook</a>  </h6>{% else %}{% endif %}
            </div>
            <div class=\"col-3\">
                {% if profile.instagram != null %} <a href=\"{{ profile.instagram }}\" class=\"instagram sharrre btn-round ml-2 btn btn-github-bg\"><i class=\"fa fa-instagram\"></i> Instagram</a>{% else %}{% endif %}
            </div>
            <div class=\"col-3\">
                {% if profile.pinterest != null %} <a href=\"{{ profile.pinterest }}\" class=\"pinterest sharrre btn-round ml-2 btn btn-github-bg\"><i class=\"fa fa-pinterest-square\"></i> Pinterest</a></h6>{% else %}{% endif %}
            </div>
            <div class=\"col-3\">
                {% if profile.snapchat != null %} <a href=\"{{ profile.snapchat }}\" class=\"snapchat sharrre btn-round ml-2 btn btn-github-bg\"><i class=\"fa fa-snapchat-square\"></i> Snapchat</a></h6>{% else %}{% endif %}
            </div>
        </div>
    </div>
</div>

    <div class=\"\"><div class=\"container-fluid text-center\" style=\"width: 80%;\">
            <div class=\"row\">
                {% for recipe in profilRecipes %}
                    <div class=\"col-xs-12 col-md-6 col-lg-4\">
                        <div class=\"card\">
                            <a href=\"{{ path('recipe_show', {'slug': recipe.slug}) }}\"><img class=\"card-img-top\" src=\"{{ asset('uploads/recipes/' ~ recipe.picture) }}\" alt=\"recette {{ recipe.name }}\"> </a>
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
                                <a href=\"{{ path ('recipe_show', {'slug': recipe.slug })}}\" class=\"btn btn-success\">Voir la recette</a>
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
