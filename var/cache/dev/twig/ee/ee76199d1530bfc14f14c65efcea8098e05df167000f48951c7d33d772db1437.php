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

/* admin/account/login.html.twig */
class __TwigTemplate_21df81074b602451115a55034bc7f8701563088e415f4bc9533a549ede8a5f9c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/login.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://kit.fontawesome.com/862802ac42.js\" crossorigin=\"anonymous\"></script>    <title>Connexion à l'administration</title>
    <style>
        body{
            display:flex;
            justify-content: center;
            height: 100vh;
        }

        .card {
            margin-top:10%;
        }
    </style>
</head>
<body>
<div class=\"col-md-4\">

    <div class=\"card bg-light\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">
                <i class=\"fas fa-lock\">
                </i>
                Connexion à l'administration
            </h4>
        </div>
        <div class=\"card-body\">

            <form method=\"post\">
                <div class=\"form-group\">
                    <label for=\"_username\"> Username </label><input type=\"text\" class=\"form-control\" placeholder=\"Username\" name=\"_username\">
                </div>
                <div class=\"form-group\">
                    <label for=\"_password\">Mot de passe</label><input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"_password\">

                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-lock-open\">

                        </i>
                        Connexion
                    </button>
                    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-link\">
                        <i class=\"fas fa-arrow-circle-left\"></i>
                        Retour au site
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 50,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <script src=\"https://kit.fontawesome.com/862802ac42.js\" crossorigin=\"anonymous\"></script>    <title>Connexion à l'administration</title>
    <style>
        body{
            display:flex;
            justify-content: center;
            height: 100vh;
        }

        .card {
            margin-top:10%;
        }
    </style>
</head>
<body>
<div class=\"col-md-4\">

    <div class=\"card bg-light\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">
                <i class=\"fas fa-lock\">
                </i>
                Connexion à l'administration
            </h4>
        </div>
        <div class=\"card-body\">

            <form method=\"post\">
                <div class=\"form-group\">
                    <label for=\"_username\"> Username </label><input type=\"text\" class=\"form-control\" placeholder=\"Username\" name=\"_username\">
                </div>
                <div class=\"form-group\">
                    <label for=\"_password\">Mot de passe</label><input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" name=\"_password\">

                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-lock-open\">

                        </i>
                        Connexion
                    </button>
                    <a href=\"{{ path('home') }}\" class=\"btn btn-link\">
                        <i class=\"fas fa-arrow-circle-left\"></i>
                        Retour au site
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>", "admin/account/login.html.twig", "/home/cortez/Sites/reciplink/templates/admin/account/login.html.twig");
    }
}
