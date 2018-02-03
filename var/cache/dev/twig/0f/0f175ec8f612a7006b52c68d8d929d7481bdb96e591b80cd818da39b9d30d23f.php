<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6af44899a3189585123642642421d3a4caff8b7cd4a489f6a40cfc67a1bf39a1 extends Twig_Template
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
        $__internal_371aa7ae53ff7599a7dca1a32ad115997d88a1dd4e10864d9b0b286e2c9566d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371aa7ae53ff7599a7dca1a32ad115997d88a1dd4e10864d9b0b286e2c9566d0->enter($__internal_371aa7ae53ff7599a7dca1a32ad115997d88a1dd4e10864d9b0b286e2c9566d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_dbebe64255d97d852c7bc7c46d6a4f18686e4b31e5fdd9c443c5c1a226730f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbebe64255d97d852c7bc7c46d6a4f18686e4b31e5fdd9c443c5c1a226730f88->enter($__internal_dbebe64255d97d852c7bc7c46d6a4f18686e4b31e5fdd9c443c5c1a226730f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_371aa7ae53ff7599a7dca1a32ad115997d88a1dd4e10864d9b0b286e2c9566d0->leave($__internal_371aa7ae53ff7599a7dca1a32ad115997d88a1dd4e10864d9b0b286e2c9566d0_prof);

        
        $__internal_dbebe64255d97d852c7bc7c46d6a4f18686e4b31e5fdd9c443c5c1a226730f88->leave($__internal_dbebe64255d97d852c7bc7c46d6a4f18686e4b31e5fdd9c443c5c1a226730f88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
