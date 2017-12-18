<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_daf02719bdf8b51f682704b324bcdac793d05f19f1b6a08cea10f5d889b4165f extends Twig_Template
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
        $__internal_ba7140e3ec88e082fe303c6f06369fcb11b1bf3c8cd8ee2579d44c588b767cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7140e3ec88e082fe303c6f06369fcb11b1bf3c8cd8ee2579d44c588b767cba->enter($__internal_ba7140e3ec88e082fe303c6f06369fcb11b1bf3c8cd8ee2579d44c588b767cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_bd800c7cb56b3696363a49e59bd72007154beec0a3852b58bd1067a3e17a008b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd800c7cb56b3696363a49e59bd72007154beec0a3852b58bd1067a3e17a008b->enter($__internal_bd800c7cb56b3696363a49e59bd72007154beec0a3852b58bd1067a3e17a008b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ba7140e3ec88e082fe303c6f06369fcb11b1bf3c8cd8ee2579d44c588b767cba->leave($__internal_ba7140e3ec88e082fe303c6f06369fcb11b1bf3c8cd8ee2579d44c588b767cba_prof);

        
        $__internal_bd800c7cb56b3696363a49e59bd72007154beec0a3852b58bd1067a3e17a008b->leave($__internal_bd800c7cb56b3696363a49e59bd72007154beec0a3852b58bd1067a3e17a008b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
