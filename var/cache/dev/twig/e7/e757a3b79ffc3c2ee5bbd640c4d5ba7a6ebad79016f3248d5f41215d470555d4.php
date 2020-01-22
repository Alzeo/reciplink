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

/* programme/index.html.twig */
class __TwigTemplate_956626fef784e416d0b8cee53998c81bc762902dfe8a03a997bb2895f5f7916a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "programme/index.html.twig", 1);
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

        echo "Vos armes pour vivre en pleine santé";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "    <meta name=\"description\" content=\"Découvrez nos programmes qui vous permettre de jouir d'une vie saine.\" />
    <meta property=\"og:title\" content=\"Figuy - écouvrez nos programmes qui vous permettre de jouir d'une vie saine.\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"https://figuy.fr/jouvance\" />
    <meta property=\"og:image\" content=\"https://figuy.fr/library/figuyv2.png\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"jumbotron text-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/background-user.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size:cover; background-position: center\">
        <h2>Les programmes jouvance de Figuy</h2>
        <p>Mettez toutes les chances de votre côté pour jouir d'une vie en pleine santé.</p>
    </div>
    <div class=\"container\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
            // line 19
            echo "        <div class=\"block-programme shadow-lg mb-5\" style=\"padding: 20px;\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4\">
                    <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/posts/" . twig_get_attribute($this->env, $this->source, $context["programme"], "picture", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" width=\"250px\"/>
                </div>
                <div class=\"col-xs-12 col-md-8\">
                    <h3 class=\"mb-3 text-uppercase\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</h3>
                    <p class=\"mb-3\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "extract", [], "any", false, false, false, 26), "html", null, true);
            echo "
                    </p>
                    <a href=\"#\" class=\"btn btn-success\">En savoir plus</a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "programme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 33,  142 => 26,  138 => 25,  132 => 22,  127 => 19,  123 => 18,  114 => 13,  104 => 12,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vos armes pour vivre en pleine santé{% endblock %}
{% block meta %}
    <meta name=\"description\" content=\"Découvrez nos programmes qui vous permettre de jouir d'une vie saine.\" />
    <meta property=\"og:title\" content=\"Figuy - écouvrez nos programmes qui vous permettre de jouir d'une vie saine.\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"https://figuy.fr/jouvance\" />
    <meta property=\"og:image\" content=\"https://figuy.fr/library/figuyv2.png\" />
{% endblock %}

{% block body %}
    <div class=\"jumbotron text-center\" style=\"background-image: url({{ asset ('/assets/img/background-user.jpg') }});  background-repeat: no-repeat; background-size:cover; background-position: center\">
        <h2>Les programmes jouvance de Figuy</h2>
        <p>Mettez toutes les chances de votre côté pour jouir d'une vie en pleine santé.</p>
    </div>
    <div class=\"container\">
        {% for programme in programmes %}
        <div class=\"block-programme shadow-lg mb-5\" style=\"padding: 20px;\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4\">
                    <img src=\"{{ asset('uploads/posts/' ~ programme.picture) }}\" width=\"250px\"/>
                </div>
                <div class=\"col-xs-12 col-md-8\">
                    <h3 class=\"mb-3 text-uppercase\">{{ programme.name }}</h3>
                    <p class=\"mb-3\">{{ programme.extract }}
                    </p>
                    <a href=\"#\" class=\"btn btn-success\">En savoir plus</a>
                </div>
            </div>
        </div>
        {% endfor %}

    </div>

{% endblock %}
", "programme/index.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/programme/index.html.twig");
    }
}
