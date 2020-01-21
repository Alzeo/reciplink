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

/* security/signin.html.twig */
class __TwigTemplate_39649199bb4d14a07b635054383a592e9b1abee151fabb2dd4a859f89cde7ed6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/signin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/signin.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v3.8.6\">
    <title>Figuy - Se connecter</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">

    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/signin.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/paper-kit.css"), "html", null, true);
        echo "\">
    <meta name=\"msapplication-config\" content=\"/docs/4.4/assets/img/favicons/browserconfig.xml\">
    <meta name=\"theme-color\" content=\"#563d7c\">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"signin.css\" rel=\"stylesheet\">
</head>
<body class=\"text-center\" style=\"background-image: url(";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/home-banner2.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size: cover;\">
<form class=\"form-signin\" method=\"post\">
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            echo "        <div class=\"alert alert-success\" style=\"background: #86d9ab !important;\">
            <div class=\"container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <span><i class=\"fa fa-bell\"></i> ";
            // line 50
            echo $context["message"];
            echo "</span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    ";
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "        <div class=\"alert alert-danger\">
            <div class=\"container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <span><i class=\"fa fa-bell\"></i>  Vos identifiants sont erronnés !</span>
            </div>
        </div>
    ";
        }
        // line 64
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64)) {
            // line 65
            echo "        <div class=\"mb-3\">
            Vous êtes connecté(e) en tant que ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "username", [], "any", false, false, false, 66), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
        </div>
    ";
        }
        // line 69
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/iconfiguy.png"), "html", null, true);
        echo "\" width=\"90px\" alt=\"Card image cap\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Connectez vous</h1>
    <input type=\"text\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" placeholder=\"Username\" id=\"inputUsername\" class=\"form-control mb-4\" required autofocus>
    <input type=\"password\" name=\"password\" id=\"inputPassword\"  placeholder=\"********\" class=\"form-control\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
    <div class=\"form-check mb-3 mt-3\">
        <label class=\"form-check-label\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
            <span class=\"form-check-sign\"></span>
        </label>
    </div>
    <button class=\"btn btn-lg btn-success btn-block\" type=\"submit\">Se connecter</button>
    <div class=\"text-center w-full p-t-115 mt-4\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tPas de compte ?
\t\t\t\t\t\t</span>

        <a class=\"txt1 bo1 hov1\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">
            Créez en un.
        </a>
    </div>
    <div class=\"text-center w-full p-t-115 mt-4\">
        <a class=\"txt1 bo1 hov1\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset_password");
        echo "\">
            Mot de passe oublié ?
        </a>
    </div>
</form>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 94,  176 => 89,  159 => 75,  152 => 71,  146 => 69,  138 => 66,  135 => 65,  132 => 64,  121 => 55,  118 => 54,  108 => 50,  101 => 45,  97 => 44,  92 => 42,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v3.8.6\">
    <title>Figuy - Se connecter</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">

    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/signin.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/paper-kit.css') }}\">
    <meta name=\"msapplication-config\" content=\"/docs/4.4/assets/img/favicons/browserconfig.xml\">
    <meta name=\"theme-color\" content=\"#563d7c\">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"signin.css\" rel=\"stylesheet\">
</head>
<body class=\"text-center\" style=\"background-image: url({{ asset ('/assets/img/home-banner2.jpg') }});  background-repeat: no-repeat; background-size: cover;\">
<form class=\"form-signin\" method=\"post\">
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\" style=\"background: #86d9ab !important;\">
            <div class=\"container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <span><i class=\"fa fa-bell\"></i> {{ message|raw }}</span>
            </div>
        </div>
    {% endfor %}
    {% if hasError %}
        <div class=\"alert alert-danger\">
            <div class=\"container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <span><i class=\"fa fa-bell\"></i>  Vos identifiants sont erronnés !</span>
            </div>
        </div>
    {% endif %}
    {% if app.user %}
        <div class=\"mb-3\">
            Vous êtes connecté(e) en tant que {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
        </div>
    {% endif %}
    <img src=\"{{ asset('/assets/img/iconfiguy.png') }}\" width=\"90px\" alt=\"Card image cap\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Connectez vous</h1>
    <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" placeholder=\"Username\" id=\"inputUsername\" class=\"form-control mb-4\" required autofocus>
    <input type=\"password\" name=\"password\" id=\"inputPassword\"  placeholder=\"********\" class=\"form-control\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >
    <div class=\"form-check mb-3 mt-3\">
        <label class=\"form-check-label\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
            <span class=\"form-check-sign\"></span>
        </label>
    </div>
    <button class=\"btn btn-lg btn-success btn-block\" type=\"submit\">Se connecter</button>
    <div class=\"text-center w-full p-t-115 mt-4\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tPas de compte ?
\t\t\t\t\t\t</span>

        <a class=\"txt1 bo1 hov1\" href=\"{{path('register')}}\">
            Créez en un.
        </a>
    </div>
    <div class=\"text-center w-full p-t-115 mt-4\">
        <a class=\"txt1 bo1 hov1\" href=\"{{path('reset_password')}}\">
            Mot de passe oublié ?
        </a>
    </div>
</form>
</body>
</html>
", "security/signin.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/security/signin.html.twig");
    }
}
