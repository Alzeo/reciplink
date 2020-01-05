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

/* recipe/show.html.twig */
class __TwigTemplate_c296a2bbaeaaf562e63eeada08f023009758847de2160a8a3b27c919c9a7e77f extends \Twig\Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipe/show.html.twig", 1);
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

        echo "Recipe";
        
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <div class=\"alert alert-success\" style=\"background: #86d9ab !important;\">
            <div class=\"container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <span><i class=\"fa fa-bell\"></i> ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "<div class=\"block-im-recipe text-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/select-program-background.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size: cover;\">
    <div class=\"container\">
        <div class=\"image_header pt-5\">
            <h1 class=\"images-title text-center\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</h1>
            <h6 class=\"card-regime\">Régime : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 20, $this->source); })()), "regime", [], "any", false, false, false, 20), "html", null, true);
        echo "</h6>
            <p class=\"card-text\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 22, $this->source); })()), "tags", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 23
            echo "                    <span class=\"tags\">
                        <label class=\"label label-default mr-1\">#";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</label>
                    </span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </p>
            <div class=\"alert alert-success mt-4\">
                <div class=\"container\">
                    <div class=\"row mt-2\">
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Kcal : ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 32, $this->source); })()), "calorie", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Protéine : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 35, $this->source); })()), "protein", [], "any", false, false, false, 35), "html", null, true);
        echo " gr</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Glucide : ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 38, $this->source); })()), "glucide", [], "any", false, false, false, 38), "html", null, true);
        echo " gr</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Lipide : ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 41, $this->source); })()), "lipide", [], "any", false, false, false, 41), "html", null, true);
        echo " gr</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"head-recip row\">
                <div class=\"col-6 author\">
                    <p>Recette proposée par : <span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48), "html", null, true);
        echo "</span></p>
                </div>
                <div class=\"col-6\">
                    ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 52
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52) && twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 52, $this->source); })()), "isSaveByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)], "method", false, false, false, 52))) {
                // line 53
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_unsave", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-round btn-danger \"><i class=\"fa fa-bookmark-o\"></i> Retirer la recette</a>
                        ";
            } else {
                // line 55
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_save", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\" class=\"btn btn-outline-danger btn-round\"> <i class=\"fa fa-bookmark-o\"></i>Enregistrer la recette</a>
                        ";
            }
            // line 57
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"btn btn-round btn-warning js-like\">
                        ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58) && twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 58, $this->source); })()), "isLikeByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)], "method", false, false, false, 58))) {
                // line 59
                echo "                                <i class=\"fa fa-heart\"></i>
                            ";
            } else {
                // line 61
                echo "                                <i class=\"fa fa-heart-o\"></i>
                            ";
            }
            // line 63
            echo "                            <span class=\"js-likes\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 63, $this->source); })()), "likes", [], "any", false, false, false, 63)), "html", null, true);
            echo "</span>
                            <span class=\"js-label\">j'aime</span>
                        </a>

                        ";
        } else {
            // line 68
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-round btn-warning btn-primary\">
                                    <i class=\"fa fa-heart-o\"></i>
                                <span class=\"js-likes\">";
            // line 70
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 70, $this->source); })()), "likes", [], "any", false, false, false, 70)), "html", null, true);
            echo "</span>
                                <span class=\"js-label\">j'aime</span>
                            </a>
                    ";
        }
        // line 74
        echo "                </div>
            </div>
            <img class=\"img-responsive img-recipe\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recipes/" . twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 76, $this->source); })()), "picture", [], "any", false, false, false, 76))), "html", null, true);
        echo "\" alt=\"recette ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 76, $this->source); })()), "name", [], "any", false, false, false, 76), "html", null, true);
        echo "\">
        </div>
        <div class=\"more-info-recipe\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-cutlery\"></i> ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 81, $this->source); })()), "type", [], "any", false, false, false, 81), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-3\">
                        <i class=\"fa fa-hourglass-half\" aria-hidden=\"true\"></i> ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 84, $this->source); })()), "time", [], "any", false, false, false, 84), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 84, $this->source); })()), "timeUnity", [], "any", false, false, false, 84), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-users\"></i> ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 87, $this->source); })()), "part", [], "any", false, false, false, 87), "html", null, true);
        echo " part</p>
                    </div>
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-signal\"></i> ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 90, $this->source); })()), "dificulty", [], "any", false, false, false, 90), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
        <div class=\"explain-recip text-left mb-5\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <h4>Ingrédients</h4>
                    <div class=\"foods mt-4\">
                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 99, $this->source); })()), "foods", [], "any", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 100
            echo "                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantity", [], "any", false, false, false, 102), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantityUnity", [], "any", false, false, false, 102), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 102), "html", null, true);
            echo "
                                </li>
                            </ul>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                    </div>
                </div>
                <div class=\"col-8\">
                    <h4>Préparation</h4>
                    <p class=\"text-justify text-left mt-4\">
                        ";
        // line 111
        echo twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 111, $this->source); })()), "description", [], "any", false, false, false, 111);
        echo "
                    </p>
                </div>
            </div>
        </div>
    </div>
        <div class=\"block-comment\" style=\"background-image:url(";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/background-comment.jpg"), "html", null, true);
        echo "); background-repeat: no-repeat; background-size: cover;\">
           <div class=\"container\">
               <h4 class=\"mb-4 text-center\">Commentaires sur la recette ";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 119, $this->source); })()), "name", [], "any", false, false, false, 119), "html", null, true);
        echo " <span class=\"label label-info\"><i class=\"fa fa-comments\"></i> ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["countComments"]) || array_key_exists("countComments", $context) ? $context["countComments"] : (function () { throw new RuntimeError('Variable "countComments" does not exist.', 119, $this->source); })())), "html", null, true);
        echo "</span></h4>
               <div class=\"section-comments m-auto\" style=\"width: 70%;\">
                   ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 121, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 122
            echo "                       <div class=\"block-commentaire mb-3\">
                           <blockquote class=\"blockquote\" style=\"background: white;\">
                               <p class=\"mt-3\">le ";
            // line 124
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "createdAt", [], "any", false, false, false, 124), "d/m/y"), "html", null, true);
            echo " <span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 124), "username", [], "any", false, false, false, 124), "html", null, true);
            echo "</span> a dit :</p>
                               <div class=\"blockquote-footer\">
                               </div>
                               <p class=\"mb-0 text-left ml-5 mr-5 mt-2 mb-2\"><i class=\"fa fa-quote-left\"></i> ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "content", [], "any", false, false, false, 127), "html", null, true);
            echo " <i class=\"fa fa-quote-right\"></i></p>
                               <br>
                           </blockquote>
                           ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 131
            echo "                               <p>Aucun commentaire ici, soyez le premier !</p>
                       </div>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "               </div>
           </div>
               <div class=\"pagination justify-content-center\">
                   ";
        // line 137
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 137, $this->source); })()));
        echo "
               </div>
           </div>
               <div class=\"mt-2\">
                   <div class=\"container\" style=\"background: #fff; padding:15px;\">
                       ";
        // line 142
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 143
            echo "                           ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'form_start');
            echo "
                           <p class=\"text-left\"><span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "user", [], "any", false, false, false, 144), "username", [], "any", false, false, false, 144), "html", null, true);
            echo "</p>
                           ";
            // line 145
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "content", [], "any", false, false, false, 145), 'row');
            echo "
                           <div class=\"button-form\">
                               <button class=\"btn btn-success btn-lg btn-block mt-4\">";
            // line 147
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 147, $this->source); })()), "Donner mon avis")) : ("Donner mon avis")), "html", null, true);
            echo "</button>
                           </div>
                           ";
            // line 149
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), 'form_end');
            echo "
                       ";
        } else {
            // line 151
            echo "                           <div class=\"container\">
                               <div class=\"section-comments m-auto\" style=\"background: #fff; padding:15px; width: 70%\">
                                   <a href=\"";
            // line 153
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-success btn-lg btn-block mt-4\">Donner mon avis</a>
                               </div>
                           </div>
                       ";
        }
        // line 157
        echo "                   </div>
               </div>
           </div>
        </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
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
        return "recipe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 164,  418 => 157,  411 => 153,  407 => 151,  402 => 149,  397 => 147,  392 => 145,  388 => 144,  383 => 143,  381 => 142,  373 => 137,  368 => 134,  360 => 131,  351 => 127,  343 => 124,  339 => 122,  334 => 121,  327 => 119,  322 => 117,  313 => 111,  306 => 106,  292 => 102,  288 => 100,  284 => 99,  272 => 90,  266 => 87,  258 => 84,  252 => 81,  242 => 76,  238 => 74,  231 => 70,  225 => 68,  216 => 63,  212 => 61,  208 => 59,  206 => 58,  201 => 57,  195 => 55,  189 => 53,  186 => 52,  184 => 51,  178 => 48,  168 => 41,  162 => 38,  156 => 35,  150 => 32,  143 => 27,  134 => 24,  131 => 23,  127 => 22,  122 => 20,  118 => 19,  111 => 16,  101 => 12,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recipe{% endblock %}

{% block body %}
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\" style=\"background: #86d9ab !important;\">
            <div class=\"container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <span><i class=\"fa fa-bell\"></i> {{ message }}</span>
            </div>
        </div>
    {% endfor %}
<div class=\"block-im-recipe text-center\" style=\"background-image: url({{ asset ('/assets/img/select-program-background.jpg') }});  background-repeat: no-repeat; background-size: cover;\">
    <div class=\"container\">
        <div class=\"image_header pt-5\">
            <h1 class=\"images-title text-center\">{{recipe.name}}</h1>
            <h6 class=\"card-regime\">Régime : {{ recipe.regime }}</h6>
            <p class=\"card-text\">
                {% for tag in recipe.tags %}
                    <span class=\"tags\">
                        <label class=\"label label-default mr-1\">#{{ tag.name }}</label>
                    </span>
                {% endfor %}
            </p>
            <div class=\"alert alert-success mt-4\">
                <div class=\"container\">
                    <div class=\"row mt-2\">
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Kcal : {{ recipe.calorie }}</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Protéine : {{recipe.protein }} gr</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Glucide : {{ recipe.glucide }} gr</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Lipide : {{ recipe.lipide }} gr</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"head-recip row\">
                <div class=\"col-6 author\">
                    <p>Recette proposée par : <span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {{ recipe.user.username }}</span></p>
                </div>
                <div class=\"col-6\">
                    {% if is_granted('ROLE_USER') %}
                        {% if app.user and recipe.isSaveByUser(app.user) %}
                            <a href=\"{{ path('recipe_unsave', {'id': recipe.id}) }}\" class=\"btn btn-round btn-danger \"><i class=\"fa fa-bookmark-o\"></i> Retirer la recette</a>
                        {% else %}
                            <a href=\"{{ path('recipe_save', {'id': recipe.id}) }}\" class=\"btn btn-outline-danger btn-round\"> <i class=\"fa fa-bookmark-o\"></i>Enregistrer la recette</a>
                        {% endif %}
                        <a href=\"{{ path('recipe_like', {'id': recipe.id}) }}\" class=\"btn btn-round btn-warning js-like\">
                        {% if app.user and recipe.isLikeByUser(app.user) %}
                                <i class=\"fa fa-heart\"></i>
                            {% else %}
                                <i class=\"fa fa-heart-o\"></i>
                            {% endif %}
                            <span class=\"js-likes\">{{ recipe.likes|length }}</span>
                            <span class=\"js-label\">j'aime</span>
                        </a>

                        {% else %}
                            <a href=\"{{ path('app_login') }}\" class=\"btn btn-round btn-warning btn-primary\">
                                    <i class=\"fa fa-heart-o\"></i>
                                <span class=\"js-likes\">{{ recipe.likes|length }}</span>
                                <span class=\"js-label\">j'aime</span>
                            </a>
                    {% endif %}
                </div>
            </div>
            <img class=\"img-responsive img-recipe\" src=\"{{ asset('uploads/recipes/' ~ recipe.picture) }}\" alt=\"recette {{ recipe.name }}\">
        </div>
        <div class=\"more-info-recipe\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-cutlery\"></i> {{ recipe.type }}</p>
                    </div>
                    <div class=\"col-3\">
                        <i class=\"fa fa-hourglass-half\" aria-hidden=\"true\"></i> {{recipe.time }} {{ recipe.timeUnity }}</p>
                    </div>
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-users\"></i> {{ recipe.part }} part</p>
                    </div>
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-signal\"></i> {{ recipe.dificulty }}</p>
                    </div>
                </div>
            </div>
        <div class=\"explain-recip text-left mb-5\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <h4>Ingrédients</h4>
                    <div class=\"foods mt-4\">
                        {% for food in recipe.foods %}
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    {{ food.quantity }} {{ food.quantityUnity }} {{ food.name }}
                                </li>
                            </ul>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"col-8\">
                    <h4>Préparation</h4>
                    <p class=\"text-justify text-left mt-4\">
                        {{ recipe.description|raw }}
                    </p>
                </div>
            </div>
        </div>
    </div>
        <div class=\"block-comment\" style=\"background-image:url({{ asset('/assets/img/background-comment.jpg') }}); background-repeat: no-repeat; background-size: cover;\">
           <div class=\"container\">
               <h4 class=\"mb-4 text-center\">Commentaires sur la recette {{ recipe.name }} <span class=\"label label-info\"><i class=\"fa fa-comments\"></i> {{ countComments|length }}</span></h4>
               <div class=\"section-comments m-auto\" style=\"width: 70%;\">
                   {% for commentaire in commentaires %}
                       <div class=\"block-commentaire mb-3\">
                           <blockquote class=\"blockquote\" style=\"background: white;\">
                               <p class=\"mt-3\">le {{ commentaire.createdAt|date('d/m/y') }} <span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {{ commentaire.user.username }}</span> a dit :</p>
                               <div class=\"blockquote-footer\">
                               </div>
                               <p class=\"mb-0 text-left ml-5 mr-5 mt-2 mb-2\"><i class=\"fa fa-quote-left\"></i> {{ commentaire.content }} <i class=\"fa fa-quote-right\"></i></p>
                               <br>
                           </blockquote>
                           {% else %}
                               <p>Aucun commentaire ici, soyez le premier !</p>
                       </div>
                   {% endfor %}
               </div>
           </div>
               <div class=\"pagination justify-content-center\">
                   {{ knp_pagination_render(commentaires) }}
               </div>
           </div>
               <div class=\"mt-2\">
                   <div class=\"container\" style=\"background: #fff; padding:15px;\">
                       {% if is_granted('ROLE_USER') %}
                           {{ form_start(form) }}
                           <p class=\"text-left\"><span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {{ app.user.username }}</p>
                           {{ form_row(form.content) }}
                           <div class=\"button-form\">
                               <button class=\"btn btn-success btn-lg btn-block mt-4\">{{ button_label|default('Donner mon avis') }}</button>
                           </div>
                           {{ form_end(form) }}
                       {% else %}
                           <div class=\"container\">
                               <div class=\"section-comments m-auto\" style=\"background: #fff; padding:15px; width: 70%\">
                                   <a href=\"{{ path('app_login') }}\" class=\"btn btn-success btn-lg btn-block mt-4\">Donner mon avis</a>
                               </div>
                           </div>
                       {% endif %}
                   </div>
               </div>
           </div>
        </div>
</div>
{% endblock %}

{% block javascript %}
{% endblock %}
", "recipe/show.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/recipe/show.html.twig");
    }
}
