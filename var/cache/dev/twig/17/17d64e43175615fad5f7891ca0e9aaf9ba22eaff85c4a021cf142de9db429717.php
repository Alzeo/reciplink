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

/* medjay/loginAdmin.html.twig */
class __TwigTemplate_efda15532a21aaf7562c9fdce8d2b6317ea07f49367ab65de851c50bb3524dc9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medjay/loginAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medjay/loginAdmin.html.twig"));

        // line 1
        echo "
<form class=\"form-signin\" method=\"post\">

    ";
        // line 4
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-bell-o\" aria-hidden=\"true\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "messageKey", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "messageData", [], "any", false, false, false, 5), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "        <div class=\"mb-3\">
            Vous êtes connecté(e) en tant que ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "username", [], "any", false, false, false, 10), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
        </div>
    ";
        }
        // line 13
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/cauldron.png"), "html", null, true);
        echo "\" width=\"60px\" alt=\"Card image cap\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Connectez vous</h1>
    <input type=\"text\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" placeholder=\"Username\" id=\"inputUsername\" class=\"form-control mb-4\" required autofocus>
    <input type=\"password\" name=\"password\" id=\"inputPassword\"  placeholder=\"********\" class=\"form-control\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 19
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
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">
            Créez en un.
        </a>
    </div>

    <p class=\"mt-5 mb-3 text-muted\">&copy; 2017-2019</p>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "medjay/loginAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  85 => 19,  78 => 15,  72 => 13,  64 => 10,  61 => 9,  59 => 8,  56 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
", "medjay/loginAdmin.html.twig", "/home/cortez/Sites/reciplink/templates/medjay/loginAdmin.html.twig");
    }
}
