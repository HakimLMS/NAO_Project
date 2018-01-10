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
        $__internal_dba09e08452eb98dbf469e8096651787c31f7b4cab550cd684f048cde96c1f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba09e08452eb98dbf469e8096651787c31f7b4cab550cd684f048cde96c1f13->enter($__internal_dba09e08452eb98dbf469e8096651787c31f7b4cab550cd684f048cde96c1f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a41c43b721d37d9d331a69acc71fc81f9e3f4821643d32aea046c22677754763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41c43b721d37d9d331a69acc71fc81f9e3f4821643d32aea046c22677754763->enter($__internal_a41c43b721d37d9d331a69acc71fc81f9e3f4821643d32aea046c22677754763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_dba09e08452eb98dbf469e8096651787c31f7b4cab550cd684f048cde96c1f13->leave($__internal_dba09e08452eb98dbf469e8096651787c31f7b4cab550cd684f048cde96c1f13_prof);

        
        $__internal_a41c43b721d37d9d331a69acc71fc81f9e3f4821643d32aea046c22677754763->leave($__internal_a41c43b721d37d9d331a69acc71fc81f9e3f4821643d32aea046c22677754763_prof);

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
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
