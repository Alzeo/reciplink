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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_dc7fb01891473b8e13e01e881e762d11cbc357f96d7e1368b8e0613ba9cb4dca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/dashboard/index.html.twig", 1);
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

        echo "Dashboard";
        
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
    <div class=\"container-fluid mt-4\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card bg-primary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fa fa-users fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">
                                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 18, $this->source); })()), "users", [], "any", false, false, false, 18), "html", null, true);
        echo " utilisateurs
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card bg-dark mb-3 text-white text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fa fa-cutlery fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <div class=\"card-title\">
                                    <h4>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 34, $this->source); })()), "recipes", [], "any", false, false, false, 34), "html", null, true);
        echo " Recettes</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card bg-warning text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fa fa-comments fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">
                                    ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 50, $this->source); })()), "comments", [], "any", false, false, false, 50), "html", null, true);
        echo " commentaires
                                </h4>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 50,  121 => 34,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}

    <div class=\"container-fluid mt-4\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card bg-primary text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fa fa-users fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">
                                    {{ stats.users }} utilisateurs
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card bg-dark mb-3 text-white text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fa fa-cutlery fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <div class=\"card-title\">
                                    <h4>{{ stats.recipes }} Recettes</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card bg-warning text-white mb-3 text-center\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <i class=\"fa fa-comments fa-3x\"></i>
                            </div>
                            <div class=\"col-8\">
                                <h4 class=\"card-title\">
                                    {{ stats.comments }} commentaires
                                </h4>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

{% endblock %}
", "admin/dashboard/index.html.twig", "/home/cortez/Sites/reciplink/templates/admin/dashboard/index.html.twig");
    }
}
