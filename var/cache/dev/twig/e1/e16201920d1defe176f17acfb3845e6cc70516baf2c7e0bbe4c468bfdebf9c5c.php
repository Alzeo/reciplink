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

/* admin/base.html.twig */
class __TwigTemplate_a06dc733575d0d3f60be23692fbd9192648d4e8fa3fcc60300201432754e3982 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>RecipeLink - ";
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

    <script src=\"//cdn.ckeditor.com/4.13.1/standard/ckeditor.js\"></script>
    ";
        // line 15
        $this->displayBlock('meta', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
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
<nav class=\"navbar navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
        <a href=\"#pablo\" class=\"navbar-brand\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/cauldron.png"), "html", null, true);
        echo "\" width=\"60px\" alt=\"Card image cap\"></a>
        <button aria-controls=\"navbarNav\" aria-expanded=\"true\" aria-label=\"Toggle navigation\" class=\"navbar-toggler navbar-toggler-right\" data-target=\"#navbar-success\" data-toggle=\"collapse\" id=\"navbar-success\" type=\"button\">
            <span class=\"navbar-toggler-bar\"></span>
            <span class=\"navbar-toggler-bar\"></span>
            <span class=\"navbar-toggler-bar\"></span>
        </button>
        <div toggler=\"#navbar-success\" class=\"collapse navbar-collapse\">
            <ul class=\"mr-auto navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\"><i class=\"fa fa-line-chart\"></i> Dashboard</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_recipes_index");
        echo "\" class=\"nav-link\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Recettes</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments_index");
        echo "\" class=\"nav-link\"><i class=\"fa fa-comments\"></i> Commentaires</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_tags_index");
        echo "\" class=\"nav-link\"><i class=\"fa fa-tag\"></i> Tags</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        echo "\" class=\"nav-link\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_posts_index");
        echo "\" class=\"nav-link\"><i class=\"fa fa-file-o\"></i> Posts</a>
                </li>
            </ul>
                <ul class=\"ml-auto navbar-nav\">
                    ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) {
            // line 68
            echo "                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "username", [], "any", false, false, false, 69), "html", null, true);
            echo "</a>
                        <div class=\"dropdown-perso dropdown-menu\" role=\"menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" target=\"_blank\"><i class=\"fa fa-eye\"></i> Voir le site</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i> Deconnexion</a>
                        </div>
                    </li>
                </ul>
            ";
        } else {
            // line 77
            echo "            ";
        }
        // line 78
        echo "        </div>
    </div>
</nav>
";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            echo "    <div class=\"alert alert-success\" style=\"background: #86d9ab !important;\">
        <div class=\"container\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <i class=\"fa fa-times\"></i>
            </button>
            <span><i class=\"fa fa-bell\"></i> ";
            // line 87
            echo $context["message"];
            echo "</span>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "<div id=\"fb-root\"></div>

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
<script>
    \$(function () {
        \$('[data-toggle=\"popover\"]').popover()
    })
</script>
<script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=5e13b83fdd527900136b177a&product=inline-share-buttons\" async=\"async\"></script>
<script>
    CKEDITOR.replace( 'post[content]' );
</script>
";
        // line 141
        $this->displayBlock('javascript', $context, $blocks);
        // line 143
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

    // line 15
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

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
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

    // line 141
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
        return "admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 141,  319 => 91,  309 => 17,  299 => 16,  280 => 15,  262 => 5,  249 => 143,  247 => 141,  197 => 93,  195 => 91,  185 => 87,  178 => 82,  174 => 81,  169 => 78,  166 => 77,  158 => 72,  154 => 71,  149 => 69,  146 => 68,  144 => 67,  137 => 63,  131 => 60,  125 => 57,  119 => 54,  113 => 51,  98 => 39,  75 => 18,  72 => 16,  70 => 15,  64 => 12,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>RecipeLink - {% block title %}{% endblock %}</title>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600|Poppins&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/product.css') }}\">

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
<nav class=\"navbar navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
        <a href=\"#pablo\" class=\"navbar-brand\"><img src=\"{{ asset('/assets/img/cauldron.png') }}\" width=\"60px\" alt=\"Card image cap\"></a>
        <button aria-controls=\"navbarNav\" aria-expanded=\"true\" aria-label=\"Toggle navigation\" class=\"navbar-toggler navbar-toggler-right\" data-target=\"#navbar-success\" data-toggle=\"collapse\" id=\"navbar-success\" type=\"button\">
            <span class=\"navbar-toggler-bar\"></span>
            <span class=\"navbar-toggler-bar\"></span>
            <span class=\"navbar-toggler-bar\"></span>
        </button>
        <div toggler=\"#navbar-success\" class=\"collapse navbar-collapse\">
            <ul class=\"mr-auto navbar-nav\">
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\"><i class=\"fa fa-line-chart\"></i> Dashboard</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin_recipes_index') }}\" class=\"nav-link\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Recettes</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin_comments_index')}}\" class=\"nav-link\"><i class=\"fa fa-comments\"></i> Commentaires</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin_tags_index')}}\" class=\"nav-link\"><i class=\"fa fa-tag\"></i> Tags</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin_users_index') }}\" class=\"nav-link\"><i class=\"fa fa-users\"></i> Utilisateurs</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('admin_posts_index') }}\" class=\"nav-link\"><i class=\"fa fa-file-o\"></i> Posts</a>
                </li>
            </ul>
                <ul class=\"ml-auto navbar-nav\">
                    {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {{ app.user.username}}</a>
                        <div class=\"dropdown-perso dropdown-menu\" role=\"menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"{{path('home')}}\" target=\"_blank\"><i class=\"fa fa-eye\"></i> Voir le site</a>
                            <a class=\"dropdown-item\" href=\"{{path('app_logout')}}\"><i class=\"fa fa-sign-out\"></i> Deconnexion</a>
                        </div>
                    </li>
                </ul>
            {% else %}
            {% endif %}
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
<div id=\"fb-root\"></div>

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
<script>
    \$(function () {
        \$('[data-toggle=\"popover\"]').popover()
    })
</script>
<script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=5e13b83fdd527900136b177a&product=inline-share-buttons\" async=\"async\"></script>
<script>
    CKEDITOR.replace( 'post[content]' );
</script>
{% block javascript %}
{% endblock %}
</body>
</html>

", "admin/base.html.twig", "/home/cortez/Sites/reciplink/templates/admin/base.html.twig");
    }
}
