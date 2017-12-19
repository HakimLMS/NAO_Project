<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_515e5d846bd0dd07296b293269fa27a5e4b3c0d4887c3dab5d7424a485a560ef extends Twig_Template
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
        $__internal_cc26f31174bffc9c028f9759bf3b550fcd7beab5244f2f46e29762184d9450d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc26f31174bffc9c028f9759bf3b550fcd7beab5244f2f46e29762184d9450d9->enter($__internal_cc26f31174bffc9c028f9759bf3b550fcd7beab5244f2f46e29762184d9450d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7d2bafebc1d1529a723b67d2db9f31adf935385790b7e7f4a099404f91f07e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2bafebc1d1529a723b67d2db9f31adf935385790b7e7f4a099404f91f07e9e->enter($__internal_7d2bafebc1d1529a723b67d2db9f31adf935385790b7e7f4a099404f91f07e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cc26f31174bffc9c028f9759bf3b550fcd7beab5244f2f46e29762184d9450d9->leave($__internal_cc26f31174bffc9c028f9759bf3b550fcd7beab5244f2f46e29762184d9450d9_prof);

        
        $__internal_7d2bafebc1d1529a723b67d2db9f31adf935385790b7e7f4a099404f91f07e9e->leave($__internal_7d2bafebc1d1529a723b67d2db9f31adf935385790b7e7f4a099404f91f07e9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
