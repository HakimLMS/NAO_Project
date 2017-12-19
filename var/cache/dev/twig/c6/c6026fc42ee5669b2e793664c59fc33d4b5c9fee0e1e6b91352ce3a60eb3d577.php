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
        $__internal_4c26c72dc5e9909db2fcc760088653cc7ed3476294b3c251b99e8b8fbb82b736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c26c72dc5e9909db2fcc760088653cc7ed3476294b3c251b99e8b8fbb82b736->enter($__internal_4c26c72dc5e9909db2fcc760088653cc7ed3476294b3c251b99e8b8fbb82b736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2afdc0c7433864e57caeafc508b2dae6e4a0d35de9c94c9a42b92bfa5d296b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afdc0c7433864e57caeafc508b2dae6e4a0d35de9c94c9a42b92bfa5d296b1f->enter($__internal_2afdc0c7433864e57caeafc508b2dae6e4a0d35de9c94c9a42b92bfa5d296b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4c26c72dc5e9909db2fcc760088653cc7ed3476294b3c251b99e8b8fbb82b736->leave($__internal_4c26c72dc5e9909db2fcc760088653cc7ed3476294b3c251b99e8b8fbb82b736_prof);

        
        $__internal_2afdc0c7433864e57caeafc508b2dae6e4a0d35de9c94c9a42b92bfa5d296b1f->leave($__internal_2afdc0c7433864e57caeafc508b2dae6e4a0d35de9c94c9a42b92bfa5d296b1f_prof);

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
