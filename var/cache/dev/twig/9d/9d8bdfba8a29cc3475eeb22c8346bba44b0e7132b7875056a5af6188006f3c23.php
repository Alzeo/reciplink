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
class __TwigTemplate_b46297f18e917ea1ac4c1835d252acde93d5a6c2d57037d852affaca0f843cdc extends \Twig\Template
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
            'meta' => [$this, 'block_meta'],
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
    <title>RecipeLink - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\"/>
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
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-social.css"), "html", null, true);
        echo "\">

    <script src=\"//cdn.ckeditor.com/4.13.1/standard/ckeditor.js\"></script>
    ";
        // line 18
        $this->displayBlock('meta', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
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
<nav class=\"sticky-top navbar navbar-expand-lg fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-translate\">
            <a href=\"#pablo\" class=\"navbar-brand\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/figuy.png"), "html", null, true);
        echo "\" width=\"170px\" alt=\"Card image cap\"></a>
            <button class=\"navbar-toggler navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-bar bar1\"></span>
                <span class=\"navbar-toggler-bar bar2\"></span>
                <span class=\"navbar-toggler-bar bar3\"></span>
            </button>
        </div>
        <div class=\"collapse navbar-collapse justify-content-center\" id=\"navigation\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_about");
        echo "\" class=\"nav-link\"><i class=\"fa fa-leaf\"></i> À propos</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Recettes</a>
                    <div class=\"dropdown-perso dropdown-menu\" role=\"menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paleo_recipe");
        echo "\">Paléo</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegetarien_recipe");
        echo "\">Végétarien</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegetalien_recipe");
        echo "\">Végétalien</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegan_recipe");
        echo "\">Végan</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("discover");
        echo "\">Découvrir</a>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_new");
        echo "\" class=\"nav-link\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> Partager une recette</a>
                </li>
                <li class=\"login-button\">
                    ";
        // line 73
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 74
            echo "                <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "username", [], "any", false, false, false, 75), "html", null, true);
            echo "</a>
                    <div class=\"dropdown-perso dropdown-menu\" role=\"menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "username", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">Mes informations</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_save_recipe", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "username", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">Recettes enregistrées</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_my_recipes", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "username", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">Mes recettes</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fa fa-sign-out\" style=\"color:#9c9995;\"></i> Se déconnecter</a>
                    </div>
                </li>
            </ul>
            ";
        } else {
            // line 86
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"type=\"button\" class=\"mr-1 btn btn-success text-white\"> S'inscrire</a>
                <a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"type=\"button\" class=\"mr-1 btn btn-outline-success\"> Se connecter</a>
            ";
        }
        // line 89
        echo "                </li>
        </div>
    </div>
</nav>
";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 94
            echo "    <div class=\"alert alert-success\" style=\"background: #86d9ab !important;\">
        <div class=\"container\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <i class=\"fa fa-times\"></i>
            </button>
            <span><i class=\"fa fa-bell\"></i> ";
            // line 99
            echo $context["message"];
            echo "</span>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "<footer >
    <div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-4 col-md\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"d-block mb-2\" role=\"img\" viewBox=\"0 0 24 24\" focusable=\"false\"><title>Product</title><circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\"/></svg>
            <small class=\"d-block mb-3 text-muted\">&copy; 2017-2019</small>
        </div>
        <div class=\"col-4 col-md\">
            <h5>Recettes</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paleo_recipe");
        echo "\">Paléo</a></li>
                <li><a class=\"text-muted\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegetarien_recipe");
        echo "\">Végétarien</a></li>
                <li><a class=\"text-muted\" href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegetalien_recipe");
        echo "\">Végétalien</a></li>
                <li><a class=\"text-muted\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vegan_recipe");
        echo "\">Végan</a></li>
            </ul>
        </div>
        <div class=\"col-4 col-md\">
            <h5>Figuy</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
                <li><a class=\"text-muted\" href=\"#\">Mentions légales</a></li>
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
<div id=\"fb-root\"></div>

<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
<script src=\"https://demos.creative-tim.com/paper-kit-2/assets/js/paper-kit.min.js?v=2.2.0\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/bootstrap.switch.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/nouislider.min.js"), "html", null, true);
        echo "\"></script>
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
<script>
    \$(function () {
        \$('[data-toggle=\"popover\"]').popover()
    })
</script>
<script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=5e13b83fdd527900136b177a&product=inline-share-buttons\" async=\"async\"></script>

";
        // line 185
        $this->displayBlock('javascript', $context, $blocks);
        // line 187
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
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

    // line 185
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
        return array (  431 => 185,  413 => 103,  403 => 20,  393 => 19,  374 => 18,  356 => 5,  343 => 187,  341 => 185,  296 => 143,  292 => 142,  271 => 124,  262 => 118,  258 => 117,  254 => 116,  250 => 115,  238 => 105,  236 => 103,  226 => 99,  219 => 94,  215 => 93,  209 => 89,  204 => 87,  199 => 86,  191 => 81,  186 => 79,  182 => 78,  178 => 77,  173 => 75,  170 => 74,  168 => 73,  162 => 70,  155 => 66,  150 => 64,  146 => 63,  142 => 62,  138 => 61,  130 => 56,  124 => 53,  111 => 43,  87 => 21,  84 => 19,  82 => 18,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>RecipeLink - {% block title %}{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no\"/>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600|Poppins&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/product.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/paper-kit.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap-social.css') }}\">

    <script src=\"//cdn.ckeditor.com/4.13.1/standard/ckeditor.js\"></script>
    {% block meta %} {% endblock %}
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
<nav class=\"sticky-top navbar navbar-expand-lg fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-translate\">
            <a href=\"#pablo\" class=\"navbar-brand\"><img src=\"{{ asset('/assets/img/figuy.png') }}\" width=\"170px\" alt=\"Card image cap\"></a>
            <button class=\"navbar-toggler navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-bar bar1\"></span>
                <span class=\"navbar-toggler-bar bar2\"></span>
                <span class=\"navbar-toggler-bar bar3\"></span>
            </button>
        </div>
        <div class=\"collapse navbar-collapse justify-content-center\" id=\"navigation\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"{{ path('home') }}\" class=\"nav-link\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('main_about') }}\" class=\"nav-link\"><i class=\"fa fa-leaf\"></i> À propos</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Recettes</a>
                    <div class=\"dropdown-perso dropdown-menu\" role=\"menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{path('paleo_recipe')}}\">Paléo</a>
                        <a class=\"dropdown-item\" href=\"{{path('vegetarien_recipe')}}\">Végétarien</a>
                        <a class=\"dropdown-item\" href=\"{{path('vegetalien_recipe')}}\">Végétalien</a>
                        <a class=\"dropdown-item\" href=\"{{path('vegan_recipe')}}\">Végan</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"{{path('discover')}}\">Découvrir</a>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('recipe_new') }}\" class=\"nav-link\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> Partager une recette</a>
                </li>
                <li class=\"login-button\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {{ app.user.username }}</a>
                    <div class=\"dropdown-perso dropdown-menu\" role=\"menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('user_show', {'username': app.user.username}) }}\">Mes informations</a>
                        <a class=\"dropdown-item\" href=\"{{ path('user_save_recipe', {'username': app.user.username}) }}\">Recettes enregistrées</a>
                        <a class=\"dropdown-item\" href=\"{{ path('user_my_recipes', {'username': app.user.username}) }}\">Mes recettes</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"{{path('app_logout')}}\"><i class=\"fa fa-sign-out\" style=\"color:#9c9995;\"></i> Se déconnecter</a>
                    </div>
                </li>
            </ul>
            {% else %}
                <a href=\"{{ path('register') }}\"type=\"button\" class=\"mr-1 btn btn-success text-white\"> S'inscrire</a>
                <a href=\"{{ path('app_login') }}\"type=\"button\" class=\"mr-1 btn btn-outline-success\"> Se connecter</a>
            {% endif %}
                </li>
        </div>
    </div>
</nav>
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
{% block body  %}
{% endblock %}
<footer >
    <div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-4 col-md\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"d-block mb-2\" role=\"img\" viewBox=\"0 0 24 24\" focusable=\"false\"><title>Product</title><circle cx=\"12\" cy=\"12\" r=\"10\"/><path d=\"M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94\"/></svg>
            <small class=\"d-block mb-3 text-muted\">&copy; 2017-2019</small>
        </div>
        <div class=\"col-4 col-md\">
            <h5>Recettes</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"{{path('paleo_recipe')}}\">Paléo</a></li>
                <li><a class=\"text-muted\" href=\"{{path('vegetarien_recipe')}}\">Végétarien</a></li>
                <li><a class=\"text-muted\" href=\"{{path('vegetalien_recipe')}}\">Végétalien</a></li>
                <li><a class=\"text-muted\" href=\"{{path('vegan_recipe')}}\">Végan</a></li>
            </ul>
        </div>
        <div class=\"col-4 col-md\">
            <h5>Figuy</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"{{path('contact')}}\">Contact</a></li>
                <li><a class=\"text-muted\" href=\"#\">Mentions légales</a></li>
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
<div id=\"fb-root\"></div>

<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
<script src=\"https://demos.creative-tim.com/paper-kit-2/assets/js/paper-kit.min.js?v=2.2.0\"></script>
<script src=\"{{ asset('/assets/js/bootstrap.switch.js') }}\"></script>
<script src=\"{{ asset('/assets/js/nouislider.min.js') }}\"></script>
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
<script>
    \$(function () {
        \$('[data-toggle=\"popover\"]').popover()
    })
</script>
<script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=5e13b83fdd527900136b177a&product=inline-share-buttons\" async=\"async\"></script>

{% block javascript %}
{% endblock %}
</body>
</html>

", "base.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/base.html.twig");
    }
}
