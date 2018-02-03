<?php

/* Don/merci.html.twig */
class __TwigTemplate_87550fcccc515fd37db1a2c3d2f89d91900ab80efed0e65384454ad4ce39c501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Don/merci.html.twig", 1);
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
        $__internal_814fcb3c0b1193d25b4030547ca46fb08b9f9b38224f07b7525638c1032c3dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814fcb3c0b1193d25b4030547ca46fb08b9f9b38224f07b7525638c1032c3dcb->enter($__internal_814fcb3c0b1193d25b4030547ca46fb08b9f9b38224f07b7525638c1032c3dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/merci.html.twig"));

        $__internal_659c2aaf1508c9581e3326a7e5a9791470599bfc19d245741df9619bc44e07be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659c2aaf1508c9581e3326a7e5a9791470599bfc19d245741df9619bc44e07be->enter($__internal_659c2aaf1508c9581e3326a7e5a9791470599bfc19d245741df9619bc44e07be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/merci.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_814fcb3c0b1193d25b4030547ca46fb08b9f9b38224f07b7525638c1032c3dcb->leave($__internal_814fcb3c0b1193d25b4030547ca46fb08b9f9b38224f07b7525638c1032c3dcb_prof);

        
        $__internal_659c2aaf1508c9581e3326a7e5a9791470599bfc19d245741df9619bc44e07be->leave($__internal_659c2aaf1508c9581e3326a7e5a9791470599bfc19d245741df9619bc44e07be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_afd21c2f38512fa2cb32f8139eec3c098f0a73d9d8de6fe74499b1d39f2a3276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd21c2f38512fa2cb32f8139eec3c098f0a73d9d8de6fe74499b1d39f2a3276->enter($__internal_afd21c2f38512fa2cb32f8139eec3c098f0a73d9d8de6fe74499b1d39f2a3276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f4cb6c455b868966244aa4ac9954d63aaf6d09ac36640b0c5b3de1f328e818b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4cb6c455b868966244aa4ac9954d63aaf6d09ac36640b0c5b3de1f328e818b->enter($__internal_0f4cb6c455b868966244aa4ac9954d63aaf6d09ac36640b0c5b3de1f328e818b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Don - Remerciements";
        
        $__internal_0f4cb6c455b868966244aa4ac9954d63aaf6d09ac36640b0c5b3de1f328e818b->leave($__internal_0f4cb6c455b868966244aa4ac9954d63aaf6d09ac36640b0c5b3de1f328e818b_prof);

        
        $__internal_afd21c2f38512fa2cb32f8139eec3c098f0a73d9d8de6fe74499b1d39f2a3276->leave($__internal_afd21c2f38512fa2cb32f8139eec3c098f0a73d9d8de6fe74499b1d39f2a3276_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cfe65d3a15b5c5878fc7b43d7573be878f4f377746a1254683904a03e528307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfe65d3a15b5c5878fc7b43d7573be878f4f377746a1254683904a03e528307->enter($__internal_8cfe65d3a15b5c5878fc7b43d7573be878f4f377746a1254683904a03e528307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2fd14da6a787f0d84944422fb636e2c4baacc3289092edd69d87f5b58e965056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd14da6a787f0d84944422fb636e2c4baacc3289092edd69d87f5b58e965056->enter($__internal_2fd14da6a787f0d84944422fb636e2c4baacc3289092edd69d87f5b58e965056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 <div class=\"container-fluid\" id=\"don\">
    <div class=\"white-filter\">
        <div class=\"container\" id=\"block-stripe\">
            <div class=\"row\">
                <div class=\"offset-1 col-10 col-md-5\" id=\"don-form\">
                    <h3>Merci !</h3>
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/don-blanc.svg"), "html", null, true);
        echo "\" width=\"80px\" height=\"80px\">

                    <p id=\"p-merci\">
                       L'association <strong>Nos Amis les Oiseaux</strong> vous remercie pour votre don !
                    </p>
                    <a id=\"btn-merci\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><button class=\"btn\">Retour à l'accueil</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_2fd14da6a787f0d84944422fb636e2c4baacc3289092edd69d87f5b58e965056->leave($__internal_2fd14da6a787f0d84944422fb636e2c4baacc3289092edd69d87f5b58e965056_prof);

        
        $__internal_8cfe65d3a15b5c5878fc7b43d7573be878f4f377746a1254683904a03e528307->leave($__internal_8cfe65d3a15b5c5878fc7b43d7573be878f4f377746a1254683904a03e528307_prof);

    }

    public function getTemplateName()
    {
        return "Don/merci.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Don - Remerciements{% endblock %}

{% block body %}

 <div class=\"container-fluid\" id=\"don\">
    <div class=\"white-filter\">
        <div class=\"container\" id=\"block-stripe\">
            <div class=\"row\">
                <div class=\"offset-1 col-10 col-md-5\" id=\"don-form\">
                    <h3>Merci !</h3>
                    <img src=\"{{ asset('build/img/don-blanc.svg') }}\" width=\"80px\" height=\"80px\">

                    <p id=\"p-merci\">
                       L'association <strong>Nos Amis les Oiseaux</strong> vous remercie pour votre don !
                    </p>
                    <a id=\"btn-merci\" href=\"{{ path('home') }}\"><button class=\"btn\">Retour à l'accueil</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "Don/merci.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Don\\merci.html.twig");
    }
}
