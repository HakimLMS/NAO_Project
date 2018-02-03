<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4d234813f8a7f08eeee6b2e6f9516b605c9eeabf04cc74049326d5e11a4a37cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d90015a30deaeec1500ff524e63866922891a5d9312cd8d20fb6ccdc5a541ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90015a30deaeec1500ff524e63866922891a5d9312cd8d20fb6ccdc5a541ab8->enter($__internal_d90015a30deaeec1500ff524e63866922891a5d9312cd8d20fb6ccdc5a541ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_510b0037bf6b9ef24773694dea10842a292bb91caa534040c69a9be974050425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510b0037bf6b9ef24773694dea10842a292bb91caa534040c69a9be974050425->enter($__internal_510b0037bf6b9ef24773694dea10842a292bb91caa534040c69a9be974050425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d90015a30deaeec1500ff524e63866922891a5d9312cd8d20fb6ccdc5a541ab8->leave($__internal_d90015a30deaeec1500ff524e63866922891a5d9312cd8d20fb6ccdc5a541ab8_prof);

        
        $__internal_510b0037bf6b9ef24773694dea10842a292bb91caa534040c69a9be974050425->leave($__internal_510b0037bf6b9ef24773694dea10842a292bb91caa534040c69a9be974050425_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
