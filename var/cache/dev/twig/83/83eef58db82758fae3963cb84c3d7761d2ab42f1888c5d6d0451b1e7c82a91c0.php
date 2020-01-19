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

/* posts/show.html.twig */
class __TwigTemplate_e2e099defe341c0a6c3024828e0fa5577a0c6f402e527f54d394c617b70c77bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "posts/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "posts/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "posts/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "

<div class=\"jumbotron position-relative overflow-hidden text-center bg-light\" style=\"background-image: url(";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/posts/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8))), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size: cover;\">
    <div class=\"col-md-6 p-lg-6 mx-auto my-6\" style=\"padding-top:30px; padding-bottom:30px; line-height: 60px; background: #44444482\">
        <h1 class=\"display-4 font-weight-bold\" style=\" color: #fff;\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
        <p class=\"lead font-weight-normal\" style=\"margin-top:10px;  color: #fff;\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "extract", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
    </div>
</div>
<section class=\"element-post container\">
    <div class=\"row\">
        <div class=\"col-md-8 ml-sm-auto col-lg-8 pt-3 px-4\" >
            <div class=\"container text-justify mb-5 img-wrap\"  style=\"padding-left:40px; padding-right:40px; line-height: 30px;\">
                ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "content", [], "any", false, false, false, 18);
        echo "
            </div>
        </div>
        <div class=\"col-xs-12 text-center col-md-4 m-auto col-lg-4 sidebar bg-light\">
            <h2 style=\"font-size: 22px; text-transform: uppercase\">Derniers articles</h2>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["posts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["posts"]) {
            // line 24
            echo "                <div class=\"posts mb-3 shadow-sm\">
                    <h2 style=\"font-size: 18px; padding-top:10px; padding-bottom: 10px; font-weight:500; background: #fff;\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</h2>
                    <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/posts/" . twig_get_attribute($this->env, $this->source, $context["posts"], "image", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" alt=\"\" style=\"max-width: 100% !important;\">
                    <p class=\"extract\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posts"], "extract", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["posts"], "slug", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-block\">Voir l'article</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['posts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
            <h2 class=\"text-center mt-5\" style=\"font-size: 22px;text-transform: uppercase \">Dernieres recettes</h2>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 34
            echo "                <div class=\"posts mb-3 shadow-sm\">
                    <h2 style=\"font-size: 18px; padding-top:10px; padding-bottom: 10px; font-weight:500; background: #fff;\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</h2>
                    <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recipes/" . twig_get_attribute($this->env, $this->source, $context["recipe"], "picture", [], "any", false, false, false, 36))), "html", null, true);
            echo "\" alt=\"\" style=\"max-width: 100%\"/>
                    <p class=\"extract text-center\"><i class=\"fa fa-thumbs-up\"></i> ";
            // line 37
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "likes", [], "any", false, false, false, 37)), "html", null, true);
            echo "
                        <i class=\"fa fa-comments\"></i> ";
            // line 38
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "commentRecipe", [], "any", false, false, false, 38)), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["recipe"], "slug", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-block\">Voir la recette</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "posts/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 42,  174 => 39,  170 => 38,  166 => 37,  162 => 36,  158 => 35,  155 => 34,  151 => 33,  147 => 31,  138 => 28,  134 => 27,  130 => 26,  126 => 25,  123 => 24,  119 => 23,  111 => 18,  101 => 11,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ post.title }}{% endblock %}

{% block body %}


<div class=\"jumbotron position-relative overflow-hidden text-center bg-light\" style=\"background-image: url({{ asset('uploads/posts/' ~ post.image) }});  background-repeat: no-repeat; background-size: cover;\">
    <div class=\"col-md-6 p-lg-6 mx-auto my-6\" style=\"padding-top:30px; padding-bottom:30px; line-height: 60px; background: #44444482\">
        <h1 class=\"display-4 font-weight-bold\" style=\" color: #fff;\">{{ post.title }}</h1>
        <p class=\"lead font-weight-normal\" style=\"margin-top:10px;  color: #fff;\">{{ post.extract }}</p>
    </div>
</div>
<section class=\"element-post container\">
    <div class=\"row\">
        <div class=\"col-md-8 ml-sm-auto col-lg-8 pt-3 px-4\" >
            <div class=\"container text-justify mb-5 img-wrap\"  style=\"padding-left:40px; padding-right:40px; line-height: 30px;\">
                {{ post.content|raw }}
            </div>
        </div>
        <div class=\"col-xs-12 text-center col-md-4 m-auto col-lg-4 sidebar bg-light\">
            <h2 style=\"font-size: 22px; text-transform: uppercase\">Derniers articles</h2>
            {% for posts in posts %}
                <div class=\"posts mb-3 shadow-sm\">
                    <h2 style=\"font-size: 18px; padding-top:10px; padding-bottom: 10px; font-weight:500; background: #fff;\">{{ posts.title }}</h2>
                    <img src=\"{{ asset('uploads/posts/' ~ posts.image) }}\" alt=\"\" style=\"max-width: 100% !important;\">
                    <p class=\"extract\">{{ posts.extract }}</p>
                    <a href=\"{{ path('post_show', {'slug': posts.slug}) }}\" class=\"btn btn-success btn-block\">Voir l'article</a>
                </div>
            {% endfor %}

            <h2 class=\"text-center mt-5\" style=\"font-size: 22px;text-transform: uppercase \">Dernieres recettes</h2>
            {% for recipe in recipes %}
                <div class=\"posts mb-3 shadow-sm\">
                    <h2 style=\"font-size: 18px; padding-top:10px; padding-bottom: 10px; font-weight:500; background: #fff;\">{{ recipe.name }}</h2>
                    <img src=\"{{ asset('uploads/recipes/' ~ recipe.picture) }}\" alt=\"\" style=\"max-width: 100%\"/>
                    <p class=\"extract text-center\"><i class=\"fa fa-thumbs-up\"></i> {{ recipe.likes|length }}
                        <i class=\"fa fa-comments\"></i> {{ recipe.commentRecipe|length }}</p>
                    <a href=\"{{ path('recipe_show', {'slug': recipe.slug}) }}\" class=\"btn btn-success btn-block\">Voir la recette</a>
                </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endblock %}
", "posts/show.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/posts/show.html.twig");
    }
}
