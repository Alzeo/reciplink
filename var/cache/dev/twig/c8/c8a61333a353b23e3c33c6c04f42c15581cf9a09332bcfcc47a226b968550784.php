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
class __TwigTemplate_1ca17f68c984c942b9630baee5458fbc05ffcaf116dba3235c6477ba33ae0743 extends \Twig\Template
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

        echo "Recipe";
        
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        <div class=\"alert alert-success\" style=\"background: #86d9ab !important;\">
            <div class=\"container\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </button>
                <span><i class=\"fa fa-bell\"></i> ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</span>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "<div class=\"block-im-recipe text-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/select-program-background.jpg"), "html", null, true);
        echo ");  background-repeat: no-repeat; background-size: cover;\">
    <div class=\"container\">
        <div class=\"image_header pt-5\">
            <h1 class=\"images-title text-center\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</h1>
            <h6 class=\"card-regime\">Régime : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 27, $this->source); })()), "regime", [], "any", false, false, false, 27), "html", null, true);
        echo "</h6>
            <p class=\"card-text\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 29, $this->source); })()), "tags", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 30
            echo "                    <span class=\"tags\">
                        <label class=\"label label-default mr-1\">#";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</label>
                    </span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </p>
            <div class=\"share-social-media mt-3 mb-3\">
                <div class=\"fb-share-button\" data-href=\"http://127.0.0.1:8000/recette/";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "\" data-layout=\"button_count\" data-size=\"large\"><a target=\"_blank\" href=\"http://127.0.0.1:8000/recette/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "\" class=\"fb-xfbml-parse-ignore\">Partager</a></div>
                <a class=\"twitter-share-button\"
                   href=\"https://twitter.com/intent/tweet\"
                   data-size=\"large\"
                   data-text=\"J'ai découvert une super recette !\"
                   data-url=\"http://127.0.0.1:8000/recette/";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\"
                   data-hashtags=\"recipelink\"
                   data-via=\"@recipelink\"
                   data-related=\"twitterapi,twitter\">
                    Partager
                </a>
                <button type=\"button\" class=\"share-insta\" data-toggle=\"modal\" data-target=\"#shareInsta\"><i class=\"fa fa-instagram\" ></i> Partager</button>
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
                            <p>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), "html", null, true);
        echo "</p>
                            <br/>
                            <p>Ingrédients : </p>
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 62, $this->source); })()), "foods", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 63
            echo "                                <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantity", [], "any", false, false, false, 63), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantityUnity", [], "any", false, false, false, 63), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "</p>
                                </ul>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            <br/>
                            <p>Préparation :</p>
                            <p>";
        // line 68
        echo twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68);
        echo "</p><br>
                            <p>Valeur nutritionnelle :</p>
                            <p>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 70, $this->source); })()), "calorie", [], "any", false, false, false, 70), "html", null, true);
        echo " kcal | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 70, $this->source); })()), "protein", [], "any", false, false, false, 70), "html", null, true);
        echo " gr protéine | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 70, $this->source); })()), "glucide", [], "any", false, false, false, 70), "html", null, true);
        echo " gr glucide | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 70, $this->source); })()), "lipide", [], "any", false, false, false, 70), "html", null, true);
        echo " gr lipide</p>
                            <p>";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 71, $this->source); })()), "tags", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 72
            echo "                                #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 72), "html", null, true);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
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
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 88, $this->source); })()), "calorie", [], "any", false, false, false, 88), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Protéine : ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 91, $this->source); })()), "protein", [], "any", false, false, false, 91), "html", null, true);
        echo " gr</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Glucide : ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 94, $this->source); })()), "glucide", [], "any", false, false, false, 94), "html", null, true);
        echo " gr</p>
                        </div>
                        <div class=\"col-3\">
                            <p style=\"font-weight: bold;\">Lipide : ";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 97, $this->source); })()), "lipide", [], "any", false, false, false, 97), "html", null, true);
        echo " gr</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"head-recip row\">
                <div class=\"col-6 author\">
                    <p>Recette proposée par : <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kitchen_user", ["idUser" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\"><span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "username", [], "any", false, false, false, 104), "html", null, true);
        echo "</span></a></p>
                </div>
                <div class=\"col-6\">
                    ";
        // line 107
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 108
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108) && twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 108, $this->source); })()), "isSaveByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108)], "method", false, false, false, 108))) {
                // line 109
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_unsave", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
                echo "\" class=\"btn btn-round btn-danger \"><i class=\"fa fa-bookmark-o\"></i> Retirer la recette</a>
                        ";
            } else {
                // line 111
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_save", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111)]), "html", null, true);
                echo "\" class=\"btn btn-outline-danger btn-round\"> <i class=\"fa fa-bookmark-o\"></i>Enregistrer la recette</a>
                        ";
            }
            // line 113
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\" class=\"btn btn-round btn-warning js-like\">
                        ";
            // line 114
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114) && twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 114, $this->source); })()), "isLikeByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "user", [], "any", false, false, false, 114)], "method", false, false, false, 114))) {
                // line 115
                echo "                                <i class=\"fa fa-heart\"></i>
                            ";
            } else {
                // line 117
                echo "                                <i class=\"fa fa-heart-o\"></i>
                            ";
            }
            // line 119
            echo "                            <span class=\"js-likes\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 119, $this->source); })()), "likes", [], "any", false, false, false, 119)), "html", null, true);
            echo "</span>
                            <span class=\"js-label\">j'aime</span>
                        </a>

                        ";
        } else {
            // line 124
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-round btn-warning btn-primary\">
                                    <i class=\"fa fa-heart-o\"></i>
                                <span class=\"js-likes\">";
            // line 126
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 126, $this->source); })()), "likes", [], "any", false, false, false, 126)), "html", null, true);
            echo "</span>
                                <span class=\"js-label\">j'aime</span>
                            </a>
                    ";
        }
        // line 130
        echo "                </div>
            </div>
            <img class=\"img-responsive img-recipe\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recipes/" . twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 132, $this->source); })()), "picture", [], "any", false, false, false, 132))), "html", null, true);
        echo "\" alt=\"recette ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 132, $this->source); })()), "name", [], "any", false, false, false, 132), "html", null, true);
        echo "\">
        </div>
        <div class=\"more-info-recipe\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-cutlery\"></i> ";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 137, $this->source); })()), "type", [], "any", false, false, false, 137), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-3\">
                        <i class=\"fa fa-hourglass-half\" aria-hidden=\"true\"></i> ";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 140, $this->source); })()), "time", [], "any", false, false, false, 140), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 140, $this->source); })()), "timeUnity", [], "any", false, false, false, 140), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-users\"></i> ";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 143, $this->source); })()), "part", [], "any", false, false, false, 143), "html", null, true);
        echo " part</p>
                    </div>
                    <div class=\"col-3\">
                        <p><i class=\"fa fa-signal\"></i> ";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 146, $this->source); })()), "dificulty", [], "any", false, false, false, 146), "html", null, true);
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
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 155, $this->source); })()), "foods", [], "any", false, false, false, 155));
        foreach ($context['_seq'] as $context["_key"] => $context["food"]) {
            // line 156
            echo "                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    ";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantity", [], "any", false, false, false, 158), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "quantityUnity", [], "any", false, false, false, 158), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["food"], "name", [], "any", false, false, false, 158), "html", null, true);
            echo "
                                </li>
                            </ul>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['food'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                    </div>
                </div>
                <div class=\"col-8\">
                    <h4>Préparation</h4>
                    <p class=\"text-justify text-left mt-4\">
                        ";
        // line 167
        echo twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 167, $this->source); })()), "description", [], "any", false, false, false, 167);
        echo "
                    </p>
                </div>
            </div>
        </div>
    </div>

        <div class=\"block-comment\" style=\"background-image:url(";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/background-comment.jpg"), "html", null, true);
        echo "); background-repeat: no-repeat; background-size: cover;\">
           <div class=\"container\">
               <h4 class=\"mb-4 text-center\">Commentaires sur la recette ";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 176, $this->source); })()), "name", [], "any", false, false, false, 176), "html", null, true);
        echo " <span class=\"label label-info\"><i class=\"fa fa-comments\"></i> ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["countComments"]) || array_key_exists("countComments", $context) ? $context["countComments"] : (function () { throw new RuntimeError('Variable "countComments" does not exist.', 176, $this->source); })())), "html", null, true);
        echo "</span></h4>
               <div class=\"section-comments m-auto\" style=\"width: 70%;\">
                   ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 178, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 179
            echo "                       <div class=\"block-commentaire mb-3\">
                           <blockquote class=\"blockquote\" style=\"background: white;\">
                               <p class=\"mt-3\">le ";
            // line 181
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "createdAt", [], "any", false, false, false, 181), "d/m/y"), "html", null, true);
            echo " <span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 181), "username", [], "any", false, false, false, 181), "html", null, true);
            echo "</span> a dit :</p>
                               <div class=\"blockquote-footer\">
                               </div>
                               <p class=\"mb-0 text-left ml-5 mr-5 mt-2 mb-2\"><i class=\"fa fa-quote-left\"></i> ";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "content", [], "any", false, false, false, 184), "html", null, true);
            echo " <i class=\"fa fa-quote-right\"></i></p>
                               <br>
                           </blockquote>
                           ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 188
            echo "                               <p>Aucun commentaire ici, soyez le premier !</p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "               <div class=\"pagination justify-content-center\">
                   ";
        // line 191
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 191, $this->source); })()));
        echo "
               </div>
               <div class=\"mt-4\">
                       <div class=\"section-form-comment m-auto\" style=\"background: #fff; padding:15px;\">
                           ";
        // line 195
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 196
            echo "                               ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), 'form_start');
            echo "
                               <p class=\"text-left\"><span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "user", [], "any", false, false, false, 197), "username", [], "any", false, false, false, 197), "html", null, true);
            echo "</p>
                               ";
            // line 198
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "content", [], "any", false, false, false, 198), 'row');
            echo "
                               <div class=\"button-form\">
                                   <button class=\"btn btn-success btn-lg btn-block mt-4\">";
            // line 200
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 200, $this->source); })()), "Donner mon avis")) : ("Donner mon avis")), "html", null, true);
            echo "</button>
                               </div>
                               ";
            // line 202
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), 'form_end');
            echo "
                           ";
        } else {
            // line 204
            echo "                                   <div class=\"section-comments m-auto\" style=\"background: #fff; padding:15px;\">
                                       <a href=\"";
            // line 205
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-success btn-lg btn-block mt-4\">Donner mon avis</a>
                                   </div>
                           ";
        }
        // line 208
        echo "                   </div>
               </div>
           </div>
        </div>
</div>
        </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 217
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
        return array (  571 => 217,  554 => 208,  548 => 205,  545 => 204,  540 => 202,  535 => 200,  530 => 198,  526 => 197,  521 => 196,  519 => 195,  512 => 191,  509 => 190,  502 => 188,  493 => 184,  485 => 181,  481 => 179,  476 => 178,  469 => 176,  464 => 174,  454 => 167,  447 => 162,  433 => 158,  429 => 156,  425 => 155,  413 => 146,  407 => 143,  399 => 140,  393 => 137,  383 => 132,  379 => 130,  372 => 126,  366 => 124,  357 => 119,  353 => 117,  349 => 115,  347 => 114,  342 => 113,  336 => 111,  330 => 109,  327 => 108,  325 => 107,  317 => 104,  307 => 97,  301 => 94,  295 => 91,  289 => 88,  273 => 74,  264 => 72,  260 => 71,  250 => 70,  245 => 68,  241 => 66,  227 => 63,  223 => 62,  217 => 59,  196 => 41,  186 => 36,  182 => 34,  173 => 31,  170 => 30,  166 => 29,  161 => 27,  157 => 26,  150 => 23,  140 => 19,  133 => 14,  128 => 13,  118 => 12,  106 => 9,  100 => 8,  96 => 7,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recipe{% endblock %}
{% block meta %}
    <meta property=\"og:url\"           content=\"http://127.0.0.1:8000/recette/{{ recipe.id }}\" />
    <meta property=\"og:type\"          content=\"website\" />
    <meta property=\"og:title\"         content=\"RecipeLink - http://127.0.0.1:8000/recette/{{ recipe.id }}\" />
    <meta property=\"og:description\"   content=\"Recette {{ recipe.regime }} - {{ recipe.name }}\" />
    <meta property=\"og:image\"         content=\"https://127.0.0.1:800/recette/{{ recipe.picture }}\" />
{% endblock %}

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
            <div class=\"share-social-media mt-3 mb-3\">
                <div class=\"fb-share-button\" data-href=\"http://127.0.0.1:8000/recette/{{ recipe.id }}\" data-layout=\"button_count\" data-size=\"large\"><a target=\"_blank\" href=\"http://127.0.0.1:8000/recette/{{ recipe.id }}\" class=\"fb-xfbml-parse-ignore\">Partager</a></div>
                <a class=\"twitter-share-button\"
                   href=\"https://twitter.com/intent/tweet\"
                   data-size=\"large\"
                   data-text=\"J'ai découvert une super recette !\"
                   data-url=\"http://127.0.0.1:8000/recette/{{ recipe.id }}\"
                   data-hashtags=\"recipelink\"
                   data-via=\"@recipelink\"
                   data-related=\"twitterapi,twitter\">
                    Partager
                </a>
                <button type=\"button\" class=\"share-insta\" data-toggle=\"modal\" data-target=\"#shareInsta\"><i class=\"fa fa-instagram\" ></i> Partager</button>
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
                    <p>Recette proposée par : <a href=\"{{ path('kitchen_user', {'idUser': recipe.user.id}) }}\"><span class=\"user\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {{ recipe.user.username }}</span></a></p>
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
{% endblock %}

{% block javascript %}
{% endblock %}
", "recipe/show.html.twig", "/home/cortez/Sites/reciplink/templates/recipe/show.html.twig");
    }
}
