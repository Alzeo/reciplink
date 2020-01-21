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

/* main/cgu.html.twig */
class __TwigTemplate_ba658b3e05c208cc727c3d939bd3f1aa0212387d2b428b2baa0e73d89fe9606c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/cgu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/cgu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/cgu.html.twig", 1);
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

        echo " Conditions générales d''utilisations ";
        
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
        echo "<div class=\"content\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/2533.jpg"), "html", null, true);
        echo "); background-repeat: no-repeat; background-size: cover;\">
    <div class=\"container\" style=\"background: #fff; padding:20px;\">

           <h3 class=\"mb-2\">ARTICLE 1 : LES MENTIONS LÉGALES</h3>

            <p>L’édition et la direction de la publication du site figuy.fr est assurée par Thomas,
            Adresse e-mail aloha@figuy.fr. L'hébergeur du site figuy.fr est la société o2switch,
            dont le siège social est situé au RCS Clermont Ferrand, avec le numéro detéléphone : 04 44 44 60 40.
            </p>

        <h3 class=\"mb-2\">ARTICLE 2 : ACCÈS AU SITE</h3>

        <p> La plateforme offre aux utilisateurs la possibilités de partager des recettes saines, le service proposé est gratuit.</p>
        <p>Toutes personnes disposent d'une visibilité total sur le site, aucune restriction. Le partage de recette quant à lui <br/>
        est reservé aux personnes inscrites sur le site.</p>

        <p>L’Utilisateur non membre n'a pas accès aux services réservés. Pour cela, il doit s’inscrire en remplissant le formulaire. Enacceptant de s’inscrire aux services réservés, l’Utilisateur membre s’engage à fournir des informations sincères et exactes concernant son état civil et ses coordonnées, notamment son adresse email</p>

        <h3 class=\"mb-2\">ARTICLE 3 : COLLÈCTES DES DONNÉES</h3>
        <p>Le site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect de la vie privéeconformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés.</p>
        <p>En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l'Utilisateur dispose d'un droit d'accès, de rectification, desuppression et d'opposition de ses données personnelles. L'Utilisateur exerce ce droit : soit par mail à l'adresse mail aloha@figuy.fr soit directement son espace personnel.</p>

        <h3 class=\"mb-2\">ARTICLE 4 : PROPRIÉTÉ INTELLECTUELLE</h3>
        <p>Les marques, logos, signes ainsi que tous les contenus du site (textes, images, son...) font l'objet d'une protection par le Code dela propriété intellectuelle et plus particulièrement par le droit d'auteur.L'Utilisateur doit solliciter l'autorisation préalable du site pour toute reproduction, publication, copie des différents contenus. Ils'engage à une utilisation des contenus du site dans un cadre strictement privé, toute utilisation à des fins commerciales etpublicitaires est strictement interdite.Toute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l’autorisation expresse de l’exploitant dusite Internet constituerait une contrefaçon sanctionnée par l’article L 335-2 et suivants du Code de la propriété intellectuelle.Il est rappelé conformément à l’article L122-5 du Code de propriété intellectuelle que l’Utilisateur qui reproduit, copie ou publie lecontenu protégé doit citer l’auteur et sa source.</p>

        <h3 class=\"mb-2\">ARTICLE 5 : RESPONSABILITÉ</h3>
        <p>Les sources des informations diffusées sur le site figuy.fr sont réputées fiables mais le site ne garantit pas qu’il soit exempt dedéfauts, d’erreurs ou d’omissions.Les informations communiquées sont présentées à titre indicatif et général sans valeur contractuelle. Malgré des mises à jourrégulières, le site figuy.fr ne peut être tenu responsable de la modification des dispositions administratives et juridiquessurvenant après la publication. De même, le site ne peut être tenue responsable de l’utilisation et de l’interprétation del’information contenue dans ce site.L'Utilisateur s'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, estinterdite. Il assume les risques liés à l'utilisation de son identifiant et mot de passe. Le site décline toute responsabilité.Le site figuy.fr ne peut être tenu pour responsable d’éventuels virus qui pourraient infecter l’ordinateur ou tout matérielinformatique de l’Internaute, suite à une utilisation, à l’accès, ou au téléchargement provenant de ce site.</p>


        <h3 class=\"mb-2\">ARTICLE 6 : LIENS HYPERTEXTES</h3>
        <p>Des liens hypertextes peuvent être présents sur le site. L’Utilisateur est informé qu’en cliquant sur ces liens, il sortira du sitefiguy.fr. Ce dernier n’a pas de contrôle sur les pages web sur lesquelles aboutissent ces liens et ne saurait, en aucun cas, êtreresponsable de leur contenu</p>

        <h3 class=\"mb-2\">ARTICLE 7 : COOKIES</h3>
        <p>
            L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement sur son logiciel denavigation. Les cookies sont de petits fichiers stockés temporairement sur le disque dur de l’ordinateur de l’Utilisateur par votre navigateur etqui sont nécessaires à l’utilisation du site figuy.fr. Les cookies ne contiennent pas d’information personnelle et ne peuvent pasêtre utilisés pour identifier quelqu’un. Un cookie contient un identifiant unique, généré aléatoirement et donc anonyme. Certainscookies expirent à la fin de la visite de l’Utilisateur, d’autres restent.L’information contenue dans les cookies est utilisée pour améliorer le site figuy.fr.En naviguant sur le site, L’Utilisateur les accepte.L’Utilisateur pourra désactiver ces cookies par l’intermédiaire des paramètres figurant au sein de son logiciel de navigation
        </p>
        <p>Seul des cookies de sessions sont utilisés, afin de permettre à l'utilisateur de revenir sur son compte sans avoir à se relogger.</p>


        <h3 class=\"mb-2\">ARTICLE 8 : PUBLICATION PAR L’UTILISATEUR</h3>
        <p>
            Le site permet aux membres de publier les contenus suivants :Recettes.Dans ses publications, le membre s’engage à respecter les règles de la Netiquette (règles de bonne conduite de l’internet) et lesrègles de droit en vigueur.Le site peut exercer une modération sur les publications et se réserve le droit de refuser leur mise en ligne, sans avoir à s’enjustifier auprès du membre.Le membre reste titulaire de l’intégralité de ses droits de propriété intellectuelle. Mais en publiant une publication sur le site, ilcède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sapublication, directement ou par un tiers autorisé, dans le monde entier, sur tout support (numérique ou physique), pour la duréede la propriété intellectuelle. Le Membre cède notamment le droit d'utiliser sa publication sur internet et sur les réseaux detéléphonie mobile.La société éditrice s'engage à faire figurer le nom du membre à proximité de chaque utilisation de sa publication.Tout contenu mis en ligne par l'Utilisateur est de sa seule responsabilité. L'Utilisateur s'engage à ne pas mettre en ligne decontenus pouvant porter atteinte aux intérêts de tierces personnes. Tout recours en justice engagé par un tiers lésé contre le sitesera pris en charge par l'Utilisateur.Le contenu de l'Utilisateur peut être à tout moment et pour n'importe quelle raison supprimé ou modifié par le site, sans préavis.
        </p>


    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/cgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Conditions générales d''utilisations {% endblock %}

{% block body %}
<div class=\"content\" style=\"background-image: url({{ asset ('/assets/img/2533.jpg') }}); background-repeat: no-repeat; background-size: cover;\">
    <div class=\"container\" style=\"background: #fff; padding:20px;\">

           <h3 class=\"mb-2\">ARTICLE 1 : LES MENTIONS LÉGALES</h3>

            <p>L’édition et la direction de la publication du site figuy.fr est assurée par Thomas,
            Adresse e-mail aloha@figuy.fr. L'hébergeur du site figuy.fr est la société o2switch,
            dont le siège social est situé au RCS Clermont Ferrand, avec le numéro detéléphone : 04 44 44 60 40.
            </p>

        <h3 class=\"mb-2\">ARTICLE 2 : ACCÈS AU SITE</h3>

        <p> La plateforme offre aux utilisateurs la possibilités de partager des recettes saines, le service proposé est gratuit.</p>
        <p>Toutes personnes disposent d'une visibilité total sur le site, aucune restriction. Le partage de recette quant à lui <br/>
        est reservé aux personnes inscrites sur le site.</p>

        <p>L’Utilisateur non membre n'a pas accès aux services réservés. Pour cela, il doit s’inscrire en remplissant le formulaire. Enacceptant de s’inscrire aux services réservés, l’Utilisateur membre s’engage à fournir des informations sincères et exactes concernant son état civil et ses coordonnées, notamment son adresse email</p>

        <h3 class=\"mb-2\">ARTICLE 3 : COLLÈCTES DES DONNÉES</h3>
        <p>Le site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect de la vie privéeconformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés.</p>
        <p>En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l'Utilisateur dispose d'un droit d'accès, de rectification, desuppression et d'opposition de ses données personnelles. L'Utilisateur exerce ce droit : soit par mail à l'adresse mail aloha@figuy.fr soit directement son espace personnel.</p>

        <h3 class=\"mb-2\">ARTICLE 4 : PROPRIÉTÉ INTELLECTUELLE</h3>
        <p>Les marques, logos, signes ainsi que tous les contenus du site (textes, images, son...) font l'objet d'une protection par le Code dela propriété intellectuelle et plus particulièrement par le droit d'auteur.L'Utilisateur doit solliciter l'autorisation préalable du site pour toute reproduction, publication, copie des différents contenus. Ils'engage à une utilisation des contenus du site dans un cadre strictement privé, toute utilisation à des fins commerciales etpublicitaires est strictement interdite.Toute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l’autorisation expresse de l’exploitant dusite Internet constituerait une contrefaçon sanctionnée par l’article L 335-2 et suivants du Code de la propriété intellectuelle.Il est rappelé conformément à l’article L122-5 du Code de propriété intellectuelle que l’Utilisateur qui reproduit, copie ou publie lecontenu protégé doit citer l’auteur et sa source.</p>

        <h3 class=\"mb-2\">ARTICLE 5 : RESPONSABILITÉ</h3>
        <p>Les sources des informations diffusées sur le site figuy.fr sont réputées fiables mais le site ne garantit pas qu’il soit exempt dedéfauts, d’erreurs ou d’omissions.Les informations communiquées sont présentées à titre indicatif et général sans valeur contractuelle. Malgré des mises à jourrégulières, le site figuy.fr ne peut être tenu responsable de la modification des dispositions administratives et juridiquessurvenant après la publication. De même, le site ne peut être tenue responsable de l’utilisation et de l’interprétation del’information contenue dans ce site.L'Utilisateur s'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, estinterdite. Il assume les risques liés à l'utilisation de son identifiant et mot de passe. Le site décline toute responsabilité.Le site figuy.fr ne peut être tenu pour responsable d’éventuels virus qui pourraient infecter l’ordinateur ou tout matérielinformatique de l’Internaute, suite à une utilisation, à l’accès, ou au téléchargement provenant de ce site.</p>


        <h3 class=\"mb-2\">ARTICLE 6 : LIENS HYPERTEXTES</h3>
        <p>Des liens hypertextes peuvent être présents sur le site. L’Utilisateur est informé qu’en cliquant sur ces liens, il sortira du sitefiguy.fr. Ce dernier n’a pas de contrôle sur les pages web sur lesquelles aboutissent ces liens et ne saurait, en aucun cas, êtreresponsable de leur contenu</p>

        <h3 class=\"mb-2\">ARTICLE 7 : COOKIES</h3>
        <p>
            L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement sur son logiciel denavigation. Les cookies sont de petits fichiers stockés temporairement sur le disque dur de l’ordinateur de l’Utilisateur par votre navigateur etqui sont nécessaires à l’utilisation du site figuy.fr. Les cookies ne contiennent pas d’information personnelle et ne peuvent pasêtre utilisés pour identifier quelqu’un. Un cookie contient un identifiant unique, généré aléatoirement et donc anonyme. Certainscookies expirent à la fin de la visite de l’Utilisateur, d’autres restent.L’information contenue dans les cookies est utilisée pour améliorer le site figuy.fr.En naviguant sur le site, L’Utilisateur les accepte.L’Utilisateur pourra désactiver ces cookies par l’intermédiaire des paramètres figurant au sein de son logiciel de navigation
        </p>
        <p>Seul des cookies de sessions sont utilisés, afin de permettre à l'utilisateur de revenir sur son compte sans avoir à se relogger.</p>


        <h3 class=\"mb-2\">ARTICLE 8 : PUBLICATION PAR L’UTILISATEUR</h3>
        <p>
            Le site permet aux membres de publier les contenus suivants :Recettes.Dans ses publications, le membre s’engage à respecter les règles de la Netiquette (règles de bonne conduite de l’internet) et lesrègles de droit en vigueur.Le site peut exercer une modération sur les publications et se réserve le droit de refuser leur mise en ligne, sans avoir à s’enjustifier auprès du membre.Le membre reste titulaire de l’intégralité de ses droits de propriété intellectuelle. Mais en publiant une publication sur le site, ilcède à la société éditrice le droit non exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sapublication, directement ou par un tiers autorisé, dans le monde entier, sur tout support (numérique ou physique), pour la duréede la propriété intellectuelle. Le Membre cède notamment le droit d'utiliser sa publication sur internet et sur les réseaux detéléphonie mobile.La société éditrice s'engage à faire figurer le nom du membre à proximité de chaque utilisation de sa publication.Tout contenu mis en ligne par l'Utilisateur est de sa seule responsabilité. L'Utilisateur s'engage à ne pas mettre en ligne decontenus pouvant porter atteinte aux intérêts de tierces personnes. Tout recours en justice engagé par un tiers lésé contre le sitesera pris en charge par l'Utilisateur.Le contenu de l'Utilisateur peut être à tout moment et pour n'importe quelle raison supprimé ou modifié par le site, sans préavis.
        </p>


    </div>
</div>
{% endblock %}
", "main/cgu.html.twig", "/Users/tomaccess/Documents/Sites/reciplink/templates/main/cgu.html.twig");
    }
}
