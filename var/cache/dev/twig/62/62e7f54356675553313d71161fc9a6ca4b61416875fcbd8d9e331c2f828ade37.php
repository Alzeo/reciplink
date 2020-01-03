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

/* base.html.twig */
class __TwigTemplate_6fa38e5a2e106cfea1e585f1e4c51458daff0a752968ecaa1ed2da3b182f1df2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600|Poppins&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/product.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/paper-kit.css"), "html", null, true);
        echo "\">

    <script src=\"//cdn.ckeditor.com/4.13.1/standard/ckeditor.js\"></script>
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    <style>
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

</head>
<body>
<nav class=\"site-header sticky-top navbar navbar navbar-expand\">
    <div class=\"container\">
        <a href=\"#pablo\" class=\"navbar-brand\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/cauldron.png"), "html", null, true);
        echo "\" width=\"60px\" alt=\"Card image cap\"></a>
        <button aria-controls=\"navbarNav\" aria-expanded=\"true\" aria-label=\"Toggle navigation\" class=\"navbar-toggler navbar-toggler-right\" data-target=\"#navbar-success\" data-toggle=\"collapse\" id=\"navbar-success\" type=\"button\">
            <span class=\"navbar-toggler-bar\"></span>
            <span class=\"navbar-toggler-bar\"></span>
            <span class=\"navbar-toggler-bar\"></span>
        </button>
        <div toggler=\"#navbar-success\" class=\"collapse navbar-collapse\">
            <ul class=\"ml-auto navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discover");
        echo "\" class=\"nav-link\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Découvrir</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_new");
        echo "\" class=\"nav-link\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> Partager une recette</a>
                </li>
            </ul>
            <ul class=\"ml-auto navbar-nav pull-right\">
                ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 60
            echo "                    <li class=\"nav-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"nav-link\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "username", [], "any", false, false, false, 60), "html", null, true);
            echo "</a></li>
                ";
        } else {
            // line 62
            echo "
                   <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"type=\"button\" class=\"btn-round mr-1 btn btn-outline-success\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Se connecter</a>
                ";
        }
        // line 65
        echo "            </ul>
        </div>
    </div>
</nav>
";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "<footer >
    <div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-12 col-md\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"d-block mb-2\" role=\"img\" viewBox=\"0 0 24 24\" focusable=\"false\"><title>Product</title><circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\"/></svg>
            <small class=\"d-block mb-3 text-muted\">&copy; 2017-2019</small>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Features</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
                <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
                <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Resources</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Resources</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Business</a></li>
                <li><a class=\"text-muted\" href=\"#\">Education</a></li>
                <li><a class=\"text-muted\" href=\"#\">Government</a></li>
                <li><a class=\"text-muted\" href=\"#\">Gaming</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>About</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
                <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
            </ul>
        </div>
    </div>
    </div>
</footer>
<div class=\"bottom-footer\">
    <div class=\"copyright-text text-center\">
        © 2017-2019 RecipLink, Inc. ALL RIGHT RESERVED.
    </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
<script>
    CKEDITOR.replace( 'recipe[description]' );
</script>
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
<script>
    function onClickOnBtnLike(event){
        event.preventDefault();
        const url = this.href;
        const spanCount = this.querySelector('span.js-likes');
        const icone = this.querySelector('i');
        const textLike = this.querySelector('span.js-label');

        axios.get(url).then(function(response){
            spanCount.textContent = response.data.likes;

            if(icone.classList.contains('fa-heart')) {
                icone.classList.replace('fa-heart', 'fa-heart-o');
                document.getElementById(\"js-label\").textContent=\"Je n'aime plus\";
            }
            else {
                icone.classList.replace('fa-heart-o', 'fa-heart');
            }
        }).catch(function (error) {
            if(error.response.status === 403) {
                console.log('Vous devez être connecté pour aimer une recette');
            }
        })

        ;
    }
    document.querySelectorAll('a.js-like').forEach(function(link){
        link.addEventListener('click', onClickOnBtnLike)
    })
</script>
";
        // line 162
        $this->displayBlock('javascript', $context, $blocks);
        // line 164
        echo "</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 162,  306 => 69,  296 => 18,  286 => 17,  267 => 5,  254 => 164,  252 => 162,  159 => 71,  157 => 69,  151 => 65,  146 => 63,  143 => 62,  135 => 60,  133 => 59,  126 => 55,  120 => 52,  114 => 49,  102 => 40,  79 => 19,  77 => 17,  71 => 14,  67 => 13,  63 => 12,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600|Poppins&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/product.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/paper-kit.css') }}\">

    <script src=\"//cdn.ckeditor.com/4.13.1/standard/ckeditor.js\"></script>
    {% block stylesheets %}
    {% endblock %}
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

</head>
<body>
<nav class=\"site-header sticky-top navbar navbar navbar-expand\">
    <div class=\"container\">
        <a href=\"#pablo\" class=\"navbar-brand\"><img src=\"{{ asset('/assets/img/cauldron.png') }}\" width=\"60px\" alt=\"Card image cap\"></a>
        <button aria-controls=\"navbarNav\" aria-expanded=\"true\" aria-label=\"Toggle navigation\" class=\"navbar-toggler navbar-toggler-right\" data-target=\"#navbar-success\" data-toggle=\"collapse\" id=\"navbar-success\" type=\"button\">
            <span class=\"navbar-toggler-bar\"></span>
            <span class=\"navbar-toggler-bar\"></span>
            <span class=\"navbar-toggler-bar\"></span>
        </button>
        <div toggler=\"#navbar-success\" class=\"collapse navbar-collapse\">
            <ul class=\"ml-auto navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"{{ path('home') }}\" class=\"nav-link\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('discover') }}\" class=\"nav-link\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Découvrir</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('recipe_new') }}\" class=\"nav-link\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> Partager une recette</a>
                </li>
            </ul>
            <ul class=\"ml-auto navbar-nav pull-right\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li class=\"nav-item\"><a href=\"{{ path('user_show', {'id': user.id}) }}\" class=\"nav-link\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>{{ user.username}}</a></li>
                {% else %}

                   <a href=\"{{ path('app_login') }}\"type=\"button\" class=\"btn-round mr-1 btn btn-outline-success\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Se connecter</a>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
{% block body  %}
{% endblock %}
<footer >
    <div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-12 col-md\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"d-block mb-2\" role=\"img\" viewBox=\"0 0 24 24\" focusable=\"false\"><title>Product</title><circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\"/></svg>
            <small class=\"d-block mb-3 text-muted\">&copy; 2017-2019</small>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Features</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
                <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
                <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Resources</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Resources</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Business</a></li>
                <li><a class=\"text-muted\" href=\"#\">Education</a></li>
                <li><a class=\"text-muted\" href=\"#\">Government</a></li>
                <li><a class=\"text-muted\" href=\"#\">Gaming</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>About</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
                <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
            </ul>
        </div>
    </div>
    </div>
</footer>
<div class=\"bottom-footer\">
    <div class=\"copyright-text text-center\">
        © 2017-2019 RecipLink, Inc. ALL RIGHT RESERVED.
    </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
<script>
    CKEDITOR.replace( 'recipe[description]' );
</script>
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
<script>
    function onClickOnBtnLike(event){
        event.preventDefault();
        const url = this.href;
        const spanCount = this.querySelector('span.js-likes');
        const icone = this.querySelector('i');
        const textLike = this.querySelector('span.js-label');

        axios.get(url).then(function(response){
            spanCount.textContent = response.data.likes;

            if(icone.classList.contains('fa-heart')) {
                icone.classList.replace('fa-heart', 'fa-heart-o');
                document.getElementById(\"js-label\").textContent=\"Je n'aime plus\";
            }
            else {
                icone.classList.replace('fa-heart-o', 'fa-heart');
            }
        }).catch(function (error) {
            if(error.response.status === 403) {
                console.log('Vous devez être connecté pour aimer une recette');
            }
        })

        ;
    }
    document.querySelectorAll('a.js-like').forEach(function(link){
        link.addEventListener('click', onClickOnBtnLike)
    })
</script>
{% block javascript %}
{% endblock %}
</body>
</html>

", "base.html.twig", "/home/cortez/Sites/reciplink/templates/base.html.twig");
    }
}
