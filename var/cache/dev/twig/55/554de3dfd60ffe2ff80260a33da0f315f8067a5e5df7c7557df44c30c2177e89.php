<?php

/* mentions_legales.html.twig */
class __TwigTemplate_18c8c9a5b8029b4cc4c2cbb13da9736f686f90a8a9a0d7d309ea38b410926ffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mentions_legales.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32061758312db83ac53edf01d4f3604c3400e6fc91597d0862b31aa77a1c96ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32061758312db83ac53edf01d4f3604c3400e6fc91597d0862b31aa77a1c96ae->enter($__internal_32061758312db83ac53edf01d4f3604c3400e6fc91597d0862b31aa77a1c96ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mentions_legales.html.twig"));

        $__internal_be19480b5dd45d20c8e2560d64b42a4b9c4f93ab88a5f6e3b73c0220a7ca5f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be19480b5dd45d20c8e2560d64b42a4b9c4f93ab88a5f6e3b73c0220a7ca5f75->enter($__internal_be19480b5dd45d20c8e2560d64b42a4b9c4f93ab88a5f6e3b73c0220a7ca5f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mentions_legales.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32061758312db83ac53edf01d4f3604c3400e6fc91597d0862b31aa77a1c96ae->leave($__internal_32061758312db83ac53edf01d4f3604c3400e6fc91597d0862b31aa77a1c96ae_prof);

        
        $__internal_be19480b5dd45d20c8e2560d64b42a4b9c4f93ab88a5f6e3b73c0220a7ca5f75->leave($__internal_be19480b5dd45d20c8e2560d64b42a4b9c4f93ab88a5f6e3b73c0220a7ca5f75_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_145c42e751628aa3e087696dbb88a7a949e23f73c1e5513ea369006fb27695c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145c42e751628aa3e087696dbb88a7a949e23f73c1e5513ea369006fb27695c7->enter($__internal_145c42e751628aa3e087696dbb88a7a949e23f73c1e5513ea369006fb27695c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e39d921be6d2a1af9657f721a9da237b8785216a8b17f19659e1a2cbf40bfc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39d921be6d2a1af9657f721a9da237b8785216a8b17f19659e1a2cbf40bfc75->enter($__internal_e39d921be6d2a1af9657f721a9da237b8785216a8b17f19659e1a2cbf40bfc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mentions légales";
        
        $__internal_e39d921be6d2a1af9657f721a9da237b8785216a8b17f19659e1a2cbf40bfc75->leave($__internal_e39d921be6d2a1af9657f721a9da237b8785216a8b17f19659e1a2cbf40bfc75_prof);

        
        $__internal_145c42e751628aa3e087696dbb88a7a949e23f73c1e5513ea369006fb27695c7->leave($__internal_145c42e751628aa3e087696dbb88a7a949e23f73c1e5513ea369006fb27695c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c50016d24ade4482e973b2fa4a6ef6a4e15ce2a1e56de0c4a69a711af16ddf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c50016d24ade4482e973b2fa4a6ef6a4e15ce2a1e56de0c4a69a711af16ddf2->enter($__internal_3c50016d24ade4482e973b2fa4a6ef6a4e15ce2a1e56de0c4a69a711af16ddf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f3dab2fa4dd7247d4ace14a8bfa4eb06af690af36871bb0d0f9bef292d4a899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3dab2fa4dd7247d4ace14a8bfa4eb06af690af36871bb0d0f9bef292d4a899->enter($__internal_0f3dab2fa4dd7247d4ace14a8bfa4eb06af690af36871bb0d0f9bef292d4a899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container-fluid\" id=\"mentions-legales\">\t
\t<div class=\"container\">
\t\t<h2>Mentions légales</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 left-column\">
\t\t\t\t<h4>1. Présentation du site</h4>
\t\t\t\t<p>Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : www.loiseau-rare.fr les informations suivantes :
\t\t\t\t<br/><br/>
\t\t\t\t<strong>Informations légales</strong>
\t\t\t\t<br><br>
\t\t\t\tStatut du propriétaire : <strong>Association</strong>
\t\t\t\t<br>
\t\t\t\tNom de l'association : <strong>Nos Amis Les Oiseaux (l'Oiseau Rare)</strong>
\t\t\t\t<br>
\t\t\t\tAdresse : <strong>La Plaine 05123 TALLARD</strong>
\t\t\t\t<br>
\t\t\t\tTél : <strong>0950184092</strong>
\t\t\t\t<br>
\t\t\t\tAdresse de courrier électronique : <strong>contact@loiseau-rare.fr</strong>
\t\t\t\t<br><br>
\t\t\t\tLe créateur du site est : <strong>e-naumad SAS</strong>
\t\t\t\t<br>
\t\t\t\tLe responsable de la publication est : <strong>Nos Amis Les Oiseaux (L'Oiseau Rare)</strong>
\t\t\t\t<br>
\t\t\t\tContactez le responsable de la publication : <strong>contact@loiseau-rare.fr</strong>
\t\t\t\t<br>
\t\t\t\tLe responsable de la publication est une <strong>personne morale</strong>
\t\t\t\t<br><br>
\t\t\t\tLe Webmaster est : <strong>e-naumad SAS</strong>
\t\t\t\t<br>
\t\t\t\tContacter le Webmaster : <strong>contact@e-naumad.fr</strong>
\t\t\t\t<br>
\t\t\t\tL'éhbergeur du site est : <strong>1&1 Internet SARL - 7, place de la Gare BP 70109 57201 Sarreguemines Cedex </strong> 
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<br>

\t\t\t\t<h4>2. Description des services fournis</h4>
\t\t\t\t<p>Le site www.loiseau-rare.fr a pour objet de fournir une information concernant l’ensemble des activités de l’association.<br/>
\t\t\t\tLe propriétaire du site s’efforce de fournir sur le site www.loiseau-rare.fr des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
\t\t\t\t<br>
\t\t\t\tToutes les informations proposées sur le site www.loiseau-rare.fr sont données à titre indicatif, sont non exhaustives, et sont susceptibles d’évoluer. Elles sont données sous réserve de modifications ayant été apportées depuis leur mise en ligne.
\t\t\t\t</p>

\t\t\t\t<br>

\t\t\t\t<h4>3. Propriété intellectuelle et contrefaçons</h4>
\t\t\t\t<p>Le propriétaire du site est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels…
\t\t\t\t<br>
\t\t\t\tToute reproduction, représentation, modification, publication, adaptation totale ou partielle des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable à l’email : contact@loiseau-rare.fr.
\t\t\t\t<br>
\t\t\t\tToute exploitation non autorisée du site ou de l’un quelconque de ces éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
\t\t\t</div>

\t\t\t<br>

\t\t\t<div class=\"col-md-6 right-column\">
\t\t\t\t<h4>4. Liens hypertextes et cookies</h4>
\t\t\t\t<p>Le site www.loiseau-rare.fr contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation du propriétaire du site. Cependant, le propriétaire du site n’a pas la possibilité de vérifier le contenu des sites ainsi visités et décline donc toute responsabilité de ce fait quant aux risques éventuels de contenus illicites.
\t\t\t\t<br><br>
\t\t\t\tL’utilisateur est informé que lors de ses visites sur le site www.loiseau-rare.fr, un ou des cookies sont susceptible de s’installer automatiquement sur son ordinateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.
\t\t\t\t<br><br>
\t\t\t\tLe paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de refuser de la manière décrite à l’adresse suivante : www.cnil.fr
\t\t\t\tLe refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies : 
\t\t\t\t<br>
\t\t\t\tSous Internet Explorer : onglet outil / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.
\t\t\t\t<br>
\t\t\t\tSous Netscape : onglet édition / préférences. Cliquez sur Avancées et choisissez Désactiver les cookies. Validez sur Ok.
\t\t\t\t</p>

\t\t\t\t<br>

\t\t\t\t<h4>5. Protection des biens et des personnes - gestion des données personnelles</h4>
\t\t\t\t<p>Utilisateur : Internaute se connectant, utilisant le site susnommé : www.loiseau-rare.fr
\t\t\t\t<br>
\t\t\t\tEn France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.
\t\t\t\t<br><br>
\t\t\t\tSur le site www.loiseau-rare.fr, le propriétaire du site ne collecte des informations personnelles relatives à l’utilisateur que pour le besoin de certains services proposés par le site www.loiseau-rare.fr. L’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il procède par lui-même à leur saisie. Il est alors précisé à l’utilisateur du site www.loiseau-rare.fr l’obligation ou non de fournir ces informations.
\t\t\t\tConformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à www.loiseau-rare.fr par email : ‘email du webmaster’ ou en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.
\t\t\t\t<br><br>
\t\t\t\tAucune information personnelle de l’utilisateur du site www.loiseau-rare.fr n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l’hypothèse du rachat du site www.loiseau-rare.fr à le propriétaire du site et de ses droits permettrait la transmission des dites informations à l’éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l’utilisateur du site www.loiseau-rare.fr.
\t\t\t\tLe site www.loiseau-rare.fr est déclaré à la CNIL sous le numéro Aucune déclaration CNIL car pas de recueil de données personnelles.
\t\t\t\t<br><br>
\t\t\t\tLes bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.
\t\t\t\t</p>
\t\t\t</div>\t
\t\t</div>
\t</div>
</div>

";
        
        $__internal_0f3dab2fa4dd7247d4ace14a8bfa4eb06af690af36871bb0d0f9bef292d4a899->leave($__internal_0f3dab2fa4dd7247d4ace14a8bfa4eb06af690af36871bb0d0f9bef292d4a899_prof);

        
        $__internal_3c50016d24ade4482e973b2fa4a6ef6a4e15ce2a1e56de0c4a69a711af16ddf2->leave($__internal_3c50016d24ade4482e973b2fa4a6ef6a4e15ce2a1e56de0c4a69a711af16ddf2_prof);

    }

    public function getTemplateName()
    {
        return "mentions_legales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Mentions légales{% endblock %} 

{% block body %}

<div class=\"container-fluid\" id=\"mentions-legales\">\t
\t<div class=\"container\">
\t\t<h2>Mentions légales</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 left-column\">
\t\t\t\t<h4>1. Présentation du site</h4>
\t\t\t\t<p>Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : www.loiseau-rare.fr les informations suivantes :
\t\t\t\t<br/><br/>
\t\t\t\t<strong>Informations légales</strong>
\t\t\t\t<br><br>
\t\t\t\tStatut du propriétaire : <strong>Association</strong>
\t\t\t\t<br>
\t\t\t\tNom de l'association : <strong>Nos Amis Les Oiseaux (l'Oiseau Rare)</strong>
\t\t\t\t<br>
\t\t\t\tAdresse : <strong>La Plaine 05123 TALLARD</strong>
\t\t\t\t<br>
\t\t\t\tTél : <strong>0950184092</strong>
\t\t\t\t<br>
\t\t\t\tAdresse de courrier électronique : <strong>contact@loiseau-rare.fr</strong>
\t\t\t\t<br><br>
\t\t\t\tLe créateur du site est : <strong>e-naumad SAS</strong>
\t\t\t\t<br>
\t\t\t\tLe responsable de la publication est : <strong>Nos Amis Les Oiseaux (L'Oiseau Rare)</strong>
\t\t\t\t<br>
\t\t\t\tContactez le responsable de la publication : <strong>contact@loiseau-rare.fr</strong>
\t\t\t\t<br>
\t\t\t\tLe responsable de la publication est une <strong>personne morale</strong>
\t\t\t\t<br><br>
\t\t\t\tLe Webmaster est : <strong>e-naumad SAS</strong>
\t\t\t\t<br>
\t\t\t\tContacter le Webmaster : <strong>contact@e-naumad.fr</strong>
\t\t\t\t<br>
\t\t\t\tL'éhbergeur du site est : <strong>1&1 Internet SARL - 7, place de la Gare BP 70109 57201 Sarreguemines Cedex </strong> 
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<br>

\t\t\t\t<h4>2. Description des services fournis</h4>
\t\t\t\t<p>Le site www.loiseau-rare.fr a pour objet de fournir une information concernant l’ensemble des activités de l’association.<br/>
\t\t\t\tLe propriétaire du site s’efforce de fournir sur le site www.loiseau-rare.fr des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
\t\t\t\t<br>
\t\t\t\tToutes les informations proposées sur le site www.loiseau-rare.fr sont données à titre indicatif, sont non exhaustives, et sont susceptibles d’évoluer. Elles sont données sous réserve de modifications ayant été apportées depuis leur mise en ligne.
\t\t\t\t</p>

\t\t\t\t<br>

\t\t\t\t<h4>3. Propriété intellectuelle et contrefaçons</h4>
\t\t\t\t<p>Le propriétaire du site est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels…
\t\t\t\t<br>
\t\t\t\tToute reproduction, représentation, modification, publication, adaptation totale ou partielle des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable à l’email : contact@loiseau-rare.fr.
\t\t\t\t<br>
\t\t\t\tToute exploitation non autorisée du site ou de l’un quelconque de ces éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
\t\t\t</div>

\t\t\t<br>

\t\t\t<div class=\"col-md-6 right-column\">
\t\t\t\t<h4>4. Liens hypertextes et cookies</h4>
\t\t\t\t<p>Le site www.loiseau-rare.fr contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation du propriétaire du site. Cependant, le propriétaire du site n’a pas la possibilité de vérifier le contenu des sites ainsi visités et décline donc toute responsabilité de ce fait quant aux risques éventuels de contenus illicites.
\t\t\t\t<br><br>
\t\t\t\tL’utilisateur est informé que lors de ses visites sur le site www.loiseau-rare.fr, un ou des cookies sont susceptible de s’installer automatiquement sur son ordinateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.
\t\t\t\t<br><br>
\t\t\t\tLe paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de refuser de la manière décrite à l’adresse suivante : www.cnil.fr
\t\t\t\tLe refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies : 
\t\t\t\t<br>
\t\t\t\tSous Internet Explorer : onglet outil / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.
\t\t\t\t<br>
\t\t\t\tSous Netscape : onglet édition / préférences. Cliquez sur Avancées et choisissez Désactiver les cookies. Validez sur Ok.
\t\t\t\t</p>

\t\t\t\t<br>

\t\t\t\t<h4>5. Protection des biens et des personnes - gestion des données personnelles</h4>
\t\t\t\t<p>Utilisateur : Internaute se connectant, utilisant le site susnommé : www.loiseau-rare.fr
\t\t\t\t<br>
\t\t\t\tEn France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.
\t\t\t\t<br><br>
\t\t\t\tSur le site www.loiseau-rare.fr, le propriétaire du site ne collecte des informations personnelles relatives à l’utilisateur que pour le besoin de certains services proposés par le site www.loiseau-rare.fr. L’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il procède par lui-même à leur saisie. Il est alors précisé à l’utilisateur du site www.loiseau-rare.fr l’obligation ou non de fournir ces informations.
\t\t\t\tConformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à www.loiseau-rare.fr par email : ‘email du webmaster’ ou en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.
\t\t\t\t<br><br>
\t\t\t\tAucune information personnelle de l’utilisateur du site www.loiseau-rare.fr n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l’hypothèse du rachat du site www.loiseau-rare.fr à le propriétaire du site et de ses droits permettrait la transmission des dites informations à l’éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l’utilisateur du site www.loiseau-rare.fr.
\t\t\t\tLe site www.loiseau-rare.fr est déclaré à la CNIL sous le numéro Aucune déclaration CNIL car pas de recueil de données personnelles.
\t\t\t\t<br><br>
\t\t\t\tLes bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.
\t\t\t\t</p>
\t\t\t</div>\t
\t\t</div>
\t</div>
</div>

{% endblock %}", "mentions_legales.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\mentions_legales.html.twig");
    }
}
