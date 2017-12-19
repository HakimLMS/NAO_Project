<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9e417e9835b218452b31ba26cda5119878fa069c4b19d64c052d3b64f8f99f41 extends Twig_Template
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
        $__internal_26b411df4dba80a02dff8badbbf4485f42b2de48f4cddbbc9ab3f1102b1602a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b411df4dba80a02dff8badbbf4485f42b2de48f4cddbbc9ab3f1102b1602a7->enter($__internal_26b411df4dba80a02dff8badbbf4485f42b2de48f4cddbbc9ab3f1102b1602a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_541d47f4d69bf35460d1024a98d9e6455f0873f8838b0ffe736e682bb6506a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541d47f4d69bf35460d1024a98d9e6455f0873f8838b0ffe736e682bb6506a1b->enter($__internal_541d47f4d69bf35460d1024a98d9e6455f0873f8838b0ffe736e682bb6506a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_26b411df4dba80a02dff8badbbf4485f42b2de48f4cddbbc9ab3f1102b1602a7->leave($__internal_26b411df4dba80a02dff8badbbf4485f42b2de48f4cddbbc9ab3f1102b1602a7_prof);

        
        $__internal_541d47f4d69bf35460d1024a98d9e6455f0873f8838b0ffe736e682bb6506a1b->leave($__internal_541d47f4d69bf35460d1024a98d9e6455f0873f8838b0ffe736e682bb6506a1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
