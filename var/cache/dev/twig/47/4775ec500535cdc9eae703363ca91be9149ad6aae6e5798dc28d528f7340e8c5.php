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

/* admin/medjayBase.html.twig */
class __TwigTemplate_b27e49c0bc2f34643ebeb1f6bdadeb1ad4352a4a1e2282ed145e97a2d6b49660 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'admin' => [$this, 'block_admin'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/medjayBase.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/medjayBase.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/medjay/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/medjay/css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/medjay/css/bootadmin.min.css"), "html", null, true);
        echo "\">

    <title>Admin Panel</title>
</head>
<body class=\"bg-light\">

<nav class=\"navbar navbar-expand navbar-dark bg-primary\">
    <a class=\"sidebar-toggle mr-3\" href=\"#\"><i class=\"fa fa-bars\"></i></a>
    <a class=\"navbar-brand\" href=\"#\">BootAdmin</a>

    <div class=\"navbar-collapse collapse\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-envelope\"></i> 5</a></li>
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-bell\"></i> 3</a></li>
            <li class=\"nav-item dropdown\">
                <a href=\"#\" id=\"dd_user\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> John Doe</a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dd_user\">
                    <a href=\"#\" class=\"dropdown-item\">Profile</a>
                    <a href=\"#\" class=\"dropdown-item\">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class=\"d-flex\">
    <div class=\"sidebar sidebar-dark bg-dark\">
        <ul class=\"list-unstyled\">
            <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
            <li>
                <a href=\"#sm_expand_1\" data-toggle=\"collapse\">
                    <i class=\"fa fa-fw fa-link\"></i> Expandable Menu Item
                </a>
                <ul id=\"sm_expand_1\" class=\"list-unstyled collapse\">
                    <li><a href=\"#\">Submenu Item</a></li>
                    <li><a href=\"#\">Submenu Item</a></li>
                </ul>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
            <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
            <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
        </ul>
    </div>

    ";
        // line 53
        $this->displayBlock('admin', $context, $blocks);
        // line 56
        echo "</div>

<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/medjay/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/medjay/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/medjay/js/bootadmin.min.js"), "html", null, true);
        echo "\"></script>


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_admin($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin"));

        // line 54
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/medjayBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  136 => 53,  121 => 60,  117 => 59,  113 => 58,  109 => 56,  107 => 53,  60 => 9,  56 => 8,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"stylesheet\" href=\"{{asset ('/assets/medjay/css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset ('/assets/medjay/css/fontawesome-all.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset ('/assets/medjay/css/bootadmin.min.css')}}\">

    <title>Admin Panel</title>
</head>
<body class=\"bg-light\">

<nav class=\"navbar navbar-expand navbar-dark bg-primary\">
    <a class=\"sidebar-toggle mr-3\" href=\"#\"><i class=\"fa fa-bars\"></i></a>
    <a class=\"navbar-brand\" href=\"#\">BootAdmin</a>

    <div class=\"navbar-collapse collapse\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-envelope\"></i> 5</a></li>
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-bell\"></i> 3</a></li>
            <li class=\"nav-item dropdown\">
                <a href=\"#\" id=\"dd_user\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> John Doe</a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dd_user\">
                    <a href=\"#\" class=\"dropdown-item\">Profile</a>
                    <a href=\"#\" class=\"dropdown-item\">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class=\"d-flex\">
    <div class=\"sidebar sidebar-dark bg-dark\">
        <ul class=\"list-unstyled\">
            <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
            <li>
                <a href=\"#sm_expand_1\" data-toggle=\"collapse\">
                    <i class=\"fa fa-fw fa-link\"></i> Expandable Menu Item
                </a>
                <ul id=\"sm_expand_1\" class=\"list-unstyled collapse\">
                    <li><a href=\"#\">Submenu Item</a></li>
                    <li><a href=\"#\">Submenu Item</a></li>
                </ul>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
            <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
            <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
        </ul>
    </div>

    {% block admin %}

    {% endblock %}
</div>

<script src=\"{{asset ('/assets/medjay/js/jquery.min.js')}}\"></script>
<script src=\"{{asset ('/assets/medjay/js/bootstrap.bundle.min.js')}}\"></script>
<script src=\"{{asset ('/assets/medjay/js/bootadmin.min.js')}}\"></script>


</body>
</html>", "admin/medjayBase.html.twig", "/home/cortez/Sites/reciplink/templates/admin/medjayBase.html.twig");
    }
}
