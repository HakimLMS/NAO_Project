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
        $__internal_df96b424c0ba6f25f78d37371294887c34350b7c384f577d47da88064915f004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df96b424c0ba6f25f78d37371294887c34350b7c384f577d47da88064915f004->enter($__internal_df96b424c0ba6f25f78d37371294887c34350b7c384f577d47da88064915f004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/merci.html.twig"));

        $__internal_8dff2b7a1d954b0e48350c38aca59669704514db7a1291dfd9ac0e7004e806c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dff2b7a1d954b0e48350c38aca59669704514db7a1291dfd9ac0e7004e806c1->enter($__internal_8dff2b7a1d954b0e48350c38aca59669704514db7a1291dfd9ac0e7004e806c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/merci.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df96b424c0ba6f25f78d37371294887c34350b7c384f577d47da88064915f004->leave($__internal_df96b424c0ba6f25f78d37371294887c34350b7c384f577d47da88064915f004_prof);

        
        $__internal_8dff2b7a1d954b0e48350c38aca59669704514db7a1291dfd9ac0e7004e806c1->leave($__internal_8dff2b7a1d954b0e48350c38aca59669704514db7a1291dfd9ac0e7004e806c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44cec5eb1a330ab9630dfb3bf5f72a399756da745cd931abf4b5987f63399498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cec5eb1a330ab9630dfb3bf5f72a399756da745cd931abf4b5987f63399498->enter($__internal_44cec5eb1a330ab9630dfb3bf5f72a399756da745cd931abf4b5987f63399498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b5e9794e14e15c6a5e500257147e9e8f63e98de08a55f59bfaf7d0e95ec85c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5e9794e14e15c6a5e500257147e9e8f63e98de08a55f59bfaf7d0e95ec85c8->enter($__internal_7b5e9794e14e15c6a5e500257147e9e8f63e98de08a55f59bfaf7d0e95ec85c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Don - Remerciements";
        
        $__internal_7b5e9794e14e15c6a5e500257147e9e8f63e98de08a55f59bfaf7d0e95ec85c8->leave($__internal_7b5e9794e14e15c6a5e500257147e9e8f63e98de08a55f59bfaf7d0e95ec85c8_prof);

        
        $__internal_44cec5eb1a330ab9630dfb3bf5f72a399756da745cd931abf4b5987f63399498->leave($__internal_44cec5eb1a330ab9630dfb3bf5f72a399756da745cd931abf4b5987f63399498_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb0d787d20c1dccd9a7b5323c0f835dcb7037c406e808b2702bd1e750d6edbec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0d787d20c1dccd9a7b5323c0f835dcb7037c406e808b2702bd1e750d6edbec->enter($__internal_cb0d787d20c1dccd9a7b5323c0f835dcb7037c406e808b2702bd1e750d6edbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e847c46e6173326680bea65f8436231c58acc671f7cc5b644047471c497217f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e847c46e6173326680bea65f8436231c58acc671f7cc5b644047471c497217f->enter($__internal_8e847c46e6173326680bea65f8436231c58acc671f7cc5b644047471c497217f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e847c46e6173326680bea65f8436231c58acc671f7cc5b644047471c497217f->leave($__internal_8e847c46e6173326680bea65f8436231c58acc671f7cc5b644047471c497217f_prof);

        
        $__internal_cb0d787d20c1dccd9a7b5323c0f835dcb7037c406e808b2702bd1e750d6edbec->leave($__internal_cb0d787d20c1dccd9a7b5323c0f835dcb7037c406e808b2702bd1e750d6edbec_prof);

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
