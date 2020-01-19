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
            'meta' => [$this, 'block_meta'],
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " | recette ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 3, $this->source); })()), "regime", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "    <meta property=\"og:url\"           content=\"http://127.0.0.1:8000/recette/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\" />
    <meta property=\"og:type\"          content=\"website\" />
    <meta property=\"og:title\"         content=\"RecipeLink - http://127.0.0.1:8000/recette/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\" />
    <meta property=\"og:description\"   content=\"Recette ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 8, $this->source); })()), "regime", [], "any", false, false, false, 8), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\" />
    <meta property=\"og:image\"         content=\"https://127.0.0.1:800/recette/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 9, $this->source); })()), "picture", [], "any", false, false, false, 9), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div class=\"block-im-recipe text-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/select-program-background.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size: cover;\">
    <div class=\"container\">
        <div class=\"image_header pt-5\">
            <h1 class=\"images-title text-center\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
            <h6 class=\"card-regime\">Régime : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 17, $this->source); })()), "regime", [], "any", false, false, false, 17), "html", null, true);
        echo "</h6>
            <p class=\"card-text\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 19, $this->source); })()), "tags", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 20
            echo "                    <span class=\"tags\">
                        <label class=\"label label-default mr-1\">#";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</label>
                    </span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </p>
            <div class=\"share-social-media mt-3 mb-3\">
                ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26) == twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)))) {
            // line 27
            echo "                    <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#deleteRecipe\">
                        <i class=\"fa fa-trash\"></i>
                    </button>
                ";
        }
        // line 31
        echo "            </div>

            <div class=\"modal fade\" id=\"shareInsta\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"PartageInstagram\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"PartageInstagram\">Texte formater pour instagram
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button></h5>
                        </div>
                        <div class=\"modal-body text-left\">
                            <p>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        echo "</p>
                            <br/>
                            <p>Ingrédients : </p>
                            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 46, $this->source); })()), "foods", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 47
            echo "                                <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantity", [], "any", false, false, false, 47), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantityUnity", [], "any", false, false, false, 47), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                                </ul>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                            <br/>
                            <p>Préparation :</p>
                            <p>";
        // line 52
        echo twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52);
        echo "</p><br>
                            <p>Valeur nutritionnelle :</p>
                            <p>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 54, $this->source); })()), "calorie", [], "any", false, false, false, 54), "html", null, true);
        echo " kcal | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 54, $this->source); })()), "protein", [], "any", false, false, false, 54), "html", null, true);
        echo " gr protéine | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 54, $this->source); })()), "glucide", [], "any", false, false, false, 54), "html", null, true);
        echo " gr glucide | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 54, $this->source); })()), "lipide", [], "any", false, false, false, 54), "html", null, true);
        echo " gr lipide</p>
                            <p>";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 55, $this->source); })()), "tags", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 56
            echo "                                #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                #recipelink @recipelink
                            </p>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-primary\">Copier</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"alert alert-success mt-4\">
                <div class=\"container\">
                    <div class=\"row mt-2\">
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Kcal : ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 72, $this->source); })()), "calorie", [], "any", false, false, false, 72), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Protéine : ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 75, $this->source); })()), "protein", [], "any", false, false, false, 75), "html", null, true);
        echo " gr</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Glucide : ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 78, $this->source); })()), "glucide", [], "any", false, false, false, 78), "html", null, true);
        echo " gr</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Lipide : ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 81, $this->source); })()), "lipide", [], "any", false, false, false, 81), "html", null, true);
        echo " gr</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"head-recip row\">
                <div class=\"col-6 author\">
                    <p>Par : <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kitchen_user", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "username", [], "any", false, false, false, 88)]), "html", null, true);
        echo "\"><span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "username", [], "any", false, false, false, 88), "html", null, true);
        echo "</span></a></p>
                </div>
                <div class=\"col-6\">
                    ";
        // line 91
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 92
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92) && twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 92, $this->source); })()), "isSaveByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92)], "method", false, false, false, 92))) {
                // line 93
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_unsave", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
                echo "\" class=\"btn btn-round btn-danger \"><i class=\"fa fa-bookmark-o\"></i> Retirer la recette</a>
                        ";
            } else {
                // line 95
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_save", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
                echo "\" class=\"btn btn-outline-danger btn-round\"> <i class=\"fa fa-bookmark-o\"></i>Enregistrer la recette</a>
                        ";
            }
            // line 97
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" class=\"btn btn-round btn-warning js-like\">
                        ";
            // line 98
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98) && twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 98, $this->source); })()), "isLikeByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98)], "method", false, false, false, 98))) {
                // line 99
                echo "                                <i class=\"fa fa-heart\"></i>
                            ";
            } else {
                // line 101
                echo "                                <i class=\"fa fa-heart-o\"></i>
                            ";
            }
            // line 103
            echo "                            <span class=\"js-likes\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 103, $this->source); })()), "likes", [], "any", false, false, false, 103)), "html", null, true);
            echo "</span>
                            <span class=\"js-label\">j'aime</span>
                        </a>

                        ";
        } else {
            // line 108
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-round btn-warning btn-primary\">
                                    <i class=\"fa fa-heart-o\"></i>
                                <span class=\"js-likes\">";
            // line 110
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 110, $this->source); })()), "likes", [], "any", false, false, false, 110)), "html", null, true);
            echo "</span>
                                <span class=\"js-label\">j'aime</span>
                            </a>
                    ";
        }
        // line 114
        echo "                </div>
            </div>
            <img class=\"img-responsive img-recipe\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recipes/" . twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 116, $this->source); })()), "picture", [], "any", false, false, false, 116))), "html", null, true);
        echo "\" alt=\"recette ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 116, $this->source); })()), "name", [], "any", false, false, false, 116), "html", null, true);
        echo "\">
        </div>
        <div class=\"more-info-recipe\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-cutlery\"></i> ";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 121, $this->source); })()), "type", [], "any", false, false, false, 121), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-3\">
                        <i class=\"fa fa-hourglass-half\" aria-hidden=\"true\"></i> ";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 124, $this->source); })()), "time", [], "any", false, false, false, 124), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 124, $this->source); })()), "timeUnity", [], "any", false, false, false, 124), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-users\"></i> ";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 127, $this->source); })()), "part", [], "any", false, false, false, 127), "html", null, true);
        echo " part</p>
                    </div>
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-signal\"></i> ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 130, $this->source); })()), "dificulty", [], "any", false, false, false, 130), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
        <div class=\"explain-recip text-left mb-5\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-4\">
                    <h4>Ingrédients</h4>
                    <div class=\"foods mt-4\">
                        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 139, $this->source); })()), "foods", [], "any", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 140
            echo "                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantity", [], "any", false, false, false, 142), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantityUnity", [], "any", false, false, false, 142), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 142), "html", null, true);
            echo "
                                </li>
                            </ul>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                    </div>
                </div>
                <div class=\"col-xs-12 col-md-8\">
                    <h4>Préparation</h4>
                    <p class=\"text-justify text-left mt-4\">
                        ";
        // line 151
        echo twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 151, $this->source); })()), "description", [], "any", false, false, false, 151);
        echo "
                    </p>
                </div>
            </div>
        </div>
        <a class=\"share-insta\" data-toggle=\"modal\" data-target=\"#shareInsta\"><i class=\"fa fa-instagram\" ></i> Copier pour instagram</a>

        <div class=\"share-social-media mt-3 mb-5\">
            <div class=\"sharethis-inline-share-buttons\"></div>
        </div>
    </div>

        <div class=\"block-comment\" style=\"background-image:url(";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/background-comment.jpg"), "html", null, true);
        echo "); background-repeat: no-repeat; background-size: cover;\">
           <div class=\"container\">
               <h4 class=\"mb-4 text-center\">Commentaires sur la recette ";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 165, $this->source); })()), "name", [], "any", false, false, false, 165), "html", null, true);
        echo " <span class=\"label label-info\"><i class=\"fa fa-comments\"></i> ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["countComments"]) || array_key_exists("countComments", $context) ? $context["countComments"] : (function () { throw new RuntimeError('Variable "countComments" does not exist.', 165, $this->source); })())), "html", null, true);
        echo "</span></h4>
               <div class=\"section-comments m-auto\" style=\"width: 70%;\">
                   <div class=\"sharethis-inline-reaction-buttons\"></div>
                   ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 168, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 169
            echo "                       <div class=\"block-commentaire mb-3\">
                           <blockquote class=\"blockquote\" style=\"background: white;\">
                               <p class=\"mt-3\">le ";
            // line 171
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "createdAt", [], "any", false, false, false, 171), "d/m/y"), "html", null, true);
            echo " <span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 171), "username", [], "any", false, false, false, 171), "html", null, true);
            echo "</span> a dit :</p>
                               <div class=\"blockquote-footer\">
                               </div>
                               <p class=\"mb-0 text-left ml-5 mr-5 mt-2 mb-2\"><i class=\"fa fa-quote-left\"></i> ";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "content", [], "any", false, false, false, 174), "html", null, true);
            echo " <i class=\"fa fa-quote-right\"></i></p>
                               <br>
                           </blockquote>
                           ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 178
            echo "                               <p>Aucun commentaire ici, soyez le premier !</p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "               <div class=\"pagination justify-content-center\">
                   ";
        // line 181
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 181, $this->source); })()));
        echo "
               </div>
               <div class=\"mt-4\">
                       <div class=\"section-form-comment m-auto\" style=\"background: #fff; padding:15px;\">
                           ";
        // line 185
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 186
            echo "                               ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), 'form_start');
            echo "
                               <p class=\"text-left\"><span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "user", [], "any", false, false, false, 187), "username", [], "any", false, false, false, 187), "html", null, true);
            echo "</p>
                               ";
            // line 188
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "content", [], "any", false, false, false, 188), 'row');
            echo "
                               <div class=\"button-form\">
                                   <button class=\"btn btn-success btn-lg btn-block mt-4\">";
            // line 190
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 190, $this->source); })()), "Donner mon avis")) : ("Donner mon avis")), "html", null, true);
            echo "</button>
                               </div>
                               ";
            // line 192
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), 'form_end');
            echo "
                           ";
        } else {
            // line 194
            echo "                                   <div class=\"section-comments m-auto\" style=\"background: #fff; padding:15px;\">
                                       <a href=\"";
            // line 195
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-success btn-lg btn-block mt-4\">Donner mon avis</a>
                                   </div>
                           ";
        }
        // line 198
        echo "                   </div>
               </div>
           </div>
        </div>
</div>
        </div>
</div>
    <div class=\"modal fade\" id=\"deleteRecipe\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteRecipeLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Surpprimer la recette ";
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 209, $this->source); })()), "name", [], "any", false, false, false, 209), "html", null, true);
        echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button></h5>

                </div>
                <div class=\"modal-body\">
                    Êtes-vous sûr de vouloir supprimer votre recette ? Cette action est irréversible.
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                    <a href=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 219, $this->source); })()), "slug", [], "any", false, false, false, 219)]), "html", null, true);
        echo "\" class=\"btn btn-danger\">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 226
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
        return array (  573 => 226,  557 => 219,  544 => 209,  531 => 198,  525 => 195,  522 => 194,  517 => 192,  512 => 190,  507 => 188,  503 => 187,  498 => 186,  496 => 185,  489 => 181,  486 => 180,  479 => 178,  470 => 174,  462 => 171,  458 => 169,  453 => 168,  445 => 165,  440 => 163,  425 => 151,  418 => 146,  404 => 142,  400 => 140,  396 => 139,  384 => 130,  378 => 127,  370 => 124,  364 => 121,  354 => 116,  350 => 114,  343 => 110,  337 => 108,  328 => 103,  324 => 101,  320 => 99,  318 => 98,  313 => 97,  307 => 95,  301 => 93,  298 => 92,  296 => 91,  288 => 88,  278 => 81,  272 => 78,  266 => 75,  260 => 72,  244 => 58,  235 => 56,  231 => 55,  221 => 54,  216 => 52,  212 => 50,  198 => 47,  194 => 46,  188 => 43,  174 => 31,  168 => 27,  166 => 26,  162 => 24,  153 => 21,  150 => 20,  146 => 19,  141 => 17,  137 => 16,  130 => 13,  120 => 12,  108 => 9,  102 => 8,  98 => 7,  92 => 5,  82 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{recipe.name}} | recette {{ recipe.regime }}{% endblock %}
{% block meta %}
    <meta property=\"og:url\"           content=\"http://127.0.0.1:8000/recette/{{ recipe.id }}\" />
    <meta property=\"og:type\"          content=\"website\" />
    <meta property=\"og:title\"         content=\"RecipeLink - http://127.0.0.1:8000/recette/{{ recipe.id }}\" />
    <meta property=\"og:description\"   content=\"Recette {{ recipe.regime }} - {{ recipe.name }}\" />
    <meta property=\"og:image\"         content=\"https://127.0.0.1:800/recette/{{ recipe.picture }}\" />
{% endblock %}

{% block body %}
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
            <div class=\"share-social-media mt-3 mb-3\">
                {% if  app.user and app.user == recipe.user %}
                    <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#deleteRecipe\">
                        <i class=\"fa fa-trash\"></i>
                    </button>
                {% endif %}
            </div>

            <div class=\"modal fade\" id=\"shareInsta\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"PartageInstagram\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"PartageInstagram\">Texte formater pour instagram
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button></h5>
                        </div>
                        <div class=\"modal-body text-left\">
                            <p>{{ recipe.name }}</p>
                            <br/>
                            <p>Ingrédients : </p>
                            {% for food in recipe.foods %}
                                <p>{{ food.quantity }} {{ food.quantityUnity }} {{ food.name }}</p>
                                </ul>
                            {% endfor %}
                            <br/>
                            <p>Préparation :</p>
                            <p>{{ recipe.description|raw }}</p><br>
                            <p>Valeur nutritionnelle :</p>
                            <p>{{ recipe.calorie }} kcal | {{ recipe.protein }} gr protéine | {{ recipe.glucide }} gr glucide | {{ recipe.lipide }} gr lipide</p>
                            <p>{% for tag in recipe.tags %}
                                #{{ tag.name }}
                                {% endfor %}
                                #recipelink @recipelink
                            </p>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-primary\">Copier</button>
                        </div>
                    </div>
                </div>
            </div>

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
                    <p>Par : <a href=\"{{ path('kitchen_user', {'username': recipe.user.username}) }}\"><span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {{ recipe.user.username }}</span></a></p>
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
                <div class=\"col-xs-12 col-md-4\">
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
                <div class=\"col-xs-12 col-md-8\">
                    <h4>Préparation</h4>
                    <p class=\"text-justify text-left mt-4\">
                        {{ recipe.description|raw }}
                    </p>
                </div>
            </div>
        </div>
        <a class=\"share-insta\" data-toggle=\"modal\" data-target=\"#shareInsta\"><i class=\"fa fa-instagram\" ></i> Copier pour instagram</a>

        <div class=\"share-social-media mt-3 mb-5\">
            <div class=\"sharethis-inline-share-buttons\"></div>
        </div>
    </div>

        <div class=\"block-comment\" style=\"background-image:url({{ asset('/assets/img/background-comment.jpg') }}); background-repeat: no-repeat; background-size: cover;\">
           <div class=\"container\">
               <h4 class=\"mb-4 text-center\">Commentaires sur la recette {{ recipe.name }} <span class=\"label label-info\"><i class=\"fa fa-comments\"></i> {{ countComments|length }}</span></h4>
               <div class=\"section-comments m-auto\" style=\"width: 70%;\">
                   <div class=\"sharethis-inline-reaction-buttons\"></div>
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
                            {% endfor %}
               <div class=\"pagination justify-content-center\">
                   {{ knp_pagination_render(commentaires) }}
               </div>
               <div class=\"mt-4\">
                       <div class=\"section-form-comment m-auto\" style=\"background: #fff; padding:15px;\">
                           {% if is_granted('ROLE_USER') %}
                               {{ form_start(form) }}
                               <p class=\"text-left\"><span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {{ app.user.username }}</p>
                               {{ form_row(form.content) }}
                               <div class=\"button-form\">
                                   <button class=\"btn btn-success btn-lg btn-block mt-4\">{{ button_label|default('Donner mon avis') }}</button>
                               </div>
                               {{ form_end(form) }}
                           {% else %}
                                   <div class=\"section-comments m-auto\" style=\"background: #fff; padding:15px;\">
                                       <a href=\"{{ path('app_login') }}\" class=\"btn btn-success btn-lg btn-block mt-4\">Donner mon avis</a>
                                   </div>
                           {% endif %}
                   </div>
               </div>
           </div>
        </div>
</div>
        </div>
</div>
    <div class=\"modal fade\" id=\"deleteRecipe\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteRecipeLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Surpprimer la recette {{ recipe.name }}<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button></h5>

                </div>
                <div class=\"modal-body\">
                    Êtes-vous sûr de vouloir supprimer votre recette ? Cette action est irréversible.
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                    <a href=\"{{ path('recipe_delete', {'slug': recipe.slug}) }}\" class=\"btn btn-danger\">Supprimer</a>
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
