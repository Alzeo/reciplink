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

/* security/loginAdmin.html.twig */
class __TwigTemplate_d401b608d1f0cd7802ba56856d956fcaf018e0d582893312d40e23b1e18795e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/loginAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/loginAdmin.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v3.8.6\">
    <title>Se connecter</title>

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
        // line 45
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-bell-o\" aria-hidden=\"true\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()), "messageKey", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()), "messageData", [], "any", false, false, false, 46), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "        <div class=\"mb-3\">
            Vous êtes connecté(e) en tant que ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "username", [], "any", false, false, false, 51), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
        </div>
    ";
        }
        // line 54
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/cauldron.png"), "html", null, true);
        echo "\" width=\"60px\" alt=\"Card image cap\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Connectez vous</h1>
    <input type=\"text\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" placeholder=\"Username\" id=\"inputUsername\" class=\"form-control mb-4\" required autofocus>
    <input type=\"password\" name=\"password\" id=\"inputPassword\"  placeholder=\"********\" class=\"form-control\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 60
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
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">
            Créez en un.
        </a>
    </div>

    <p class=\"mt-5 mb-3 text-muted\">&copy; 2017-2019</p>
</form>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/loginAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 74,  135 => 60,  128 => 56,  122 => 54,  114 => 51,  111 => 50,  109 => 49,  106 => 48,  100 => 46,  98 => 45,  92 => 42,  65 => 18,  61 => 17,  43 => 1,);
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
    <title>Se connecter</title>

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

    {% if error %}
        <div class=\"alert alert-danger\"><i class=\"fa fa-bell-o\" aria-hidden=\"true\"></i>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            Vous êtes connecté(e) en tant que {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
        </div>
    {% endif %}
    <img src=\"{{ asset('/assets/img/cauldron.png') }}\" width=\"60px\" alt=\"Card image cap\">
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

    <p class=\"mt-5 mb-3 text-muted\">&copy; 2017-2019</p>
</form>
</body>
</html>
", "security/loginAdmin.html.twig", "/home/cortez/Sites/reciplink/templates/security/loginAdmin.html.twig");
    }
}
