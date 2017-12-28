<?php

/* base.html.twig */
class __TwigTemplate_9b82483fd9f189b036f072471c7129831d5df7a2101ce1d4c27fd63bbd10799e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e323193df77823370a3df23e0e81052fd7730bd7475da3a09f745c780056d799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e323193df77823370a3df23e0e81052fd7730bd7475da3a09f745c780056d799->enter($__internal_e323193df77823370a3df23e0e81052fd7730bd7475da3a09f745c780056d799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3a2e203c664299b64615a09e5f7783df23b677523e916b71c7db3a64909f3f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2e203c664299b64615a09e5f7783df23b677523e916b71c7db3a64909f3f19->enter($__internal_3a2e203c664299b64615a09e5f7783df23b677523e916b71c7db3a64909f3f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_e323193df77823370a3df23e0e81052fd7730bd7475da3a09f745c780056d799->leave($__internal_e323193df77823370a3df23e0e81052fd7730bd7475da3a09f745c780056d799_prof);

        
        $__internal_3a2e203c664299b64615a09e5f7783df23b677523e916b71c7db3a64909f3f19->leave($__internal_3a2e203c664299b64615a09e5f7783df23b677523e916b71c7db3a64909f3f19_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_144ac838ff4eec027f9d5e1b7b7e1ac0ea30c5e91488bfa55d762bfd4bb311d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144ac838ff4eec027f9d5e1b7b7e1ac0ea30c5e91488bfa55d762bfd4bb311d5->enter($__internal_144ac838ff4eec027f9d5e1b7b7e1ac0ea30c5e91488bfa55d762bfd4bb311d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75cc3ea3034d8a736c603e9c8f5288f3de7b3a76ed18643a4542278ad30b58c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75cc3ea3034d8a736c603e9c8f5288f3de7b3a76ed18643a4542278ad30b58c2->enter($__internal_75cc3ea3034d8a736c603e9c8f5288f3de7b3a76ed18643a4542278ad30b58c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_75cc3ea3034d8a736c603e9c8f5288f3de7b3a76ed18643a4542278ad30b58c2->leave($__internal_75cc3ea3034d8a736c603e9c8f5288f3de7b3a76ed18643a4542278ad30b58c2_prof);

        
        $__internal_144ac838ff4eec027f9d5e1b7b7e1ac0ea30c5e91488bfa55d762bfd4bb311d5->leave($__internal_144ac838ff4eec027f9d5e1b7b7e1ac0ea30c5e91488bfa55d762bfd4bb311d5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1129a347ebc1fa80edfdd2cc213f0c85a7cbdc6c59ed0fe341c537a0869127c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1129a347ebc1fa80edfdd2cc213f0c85a7cbdc6c59ed0fe341c537a0869127c->enter($__internal_d1129a347ebc1fa80edfdd2cc213f0c85a7cbdc6c59ed0fe341c537a0869127c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9dc25f725fa86d134daa25cb8d477eeb78019d6fba640c2521d25b0101f1596d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc25f725fa86d134daa25cb8d477eeb78019d6fba640c2521d25b0101f1596d->enter($__internal_9dc25f725fa86d134daa25cb8d477eeb78019d6fba640c2521d25b0101f1596d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9dc25f725fa86d134daa25cb8d477eeb78019d6fba640c2521d25b0101f1596d->leave($__internal_9dc25f725fa86d134daa25cb8d477eeb78019d6fba640c2521d25b0101f1596d_prof);

        
        $__internal_d1129a347ebc1fa80edfdd2cc213f0c85a7cbdc6c59ed0fe341c537a0869127c->leave($__internal_d1129a347ebc1fa80edfdd2cc213f0c85a7cbdc6c59ed0fe341c537a0869127c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_83bb1f608fd62fde7e47015a18ec18b02735d73135e525cc4078799b562c7484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83bb1f608fd62fde7e47015a18ec18b02735d73135e525cc4078799b562c7484->enter($__internal_83bb1f608fd62fde7e47015a18ec18b02735d73135e525cc4078799b562c7484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_361d72b10413191f87e570da28c3d48c4f2f7ccc88464a4f2fbacd4cafc1ac0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361d72b10413191f87e570da28c3d48c4f2f7ccc88464a4f2fbacd4cafc1ac0d->enter($__internal_361d72b10413191f87e570da28c3d48c4f2f7ccc88464a4f2fbacd4cafc1ac0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_361d72b10413191f87e570da28c3d48c4f2f7ccc88464a4f2fbacd4cafc1ac0d->leave($__internal_361d72b10413191f87e570da28c3d48c4f2f7ccc88464a4f2fbacd4cafc1ac0d_prof);

        
        $__internal_83bb1f608fd62fde7e47015a18ec18b02735d73135e525cc4078799b562c7484->leave($__internal_83bb1f608fd62fde7e47015a18ec18b02735d73135e525cc4078799b562c7484_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9471f2ad15094fedad4a4645e2afdb019d3bb60b70cabd480021c907a72d5cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9471f2ad15094fedad4a4645e2afdb019d3bb60b70cabd480021c907a72d5cb9->enter($__internal_9471f2ad15094fedad4a4645e2afdb019d3bb60b70cabd480021c907a72d5cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_168623291935ceca8de284748a831cbb38df57b88a11930e76c5b6fd7dad938a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168623291935ceca8de284748a831cbb38df57b88a11930e76c5b6fd7dad938a->enter($__internal_168623291935ceca8de284748a831cbb38df57b88a11930e76c5b6fd7dad938a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_168623291935ceca8de284748a831cbb38df57b88a11930e76c5b6fd7dad938a->leave($__internal_168623291935ceca8de284748a831cbb38df57b88a11930e76c5b6fd7dad938a_prof);

        
        $__internal_9471f2ad15094fedad4a4645e2afdb019d3bb60b70cabd480021c907a72d5cb9->leave($__internal_9471f2ad15094fedad4a4645e2afdb019d3bb60b70cabd480021c907a72d5cb9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\base.html.twig");
    }
}
