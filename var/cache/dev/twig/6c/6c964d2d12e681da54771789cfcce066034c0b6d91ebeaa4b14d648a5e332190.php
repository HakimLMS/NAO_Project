<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_86ee718f3d1e47f32a4924b18c7d7b60eac32a2f1bfc6654367dc5581f23aac3 extends Twig_Template
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
        $__internal_370396127cbbf114a795339a63537b5db6d1982eeb44b6b5b5c95bd7d3d90472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370396127cbbf114a795339a63537b5db6d1982eeb44b6b5b5c95bd7d3d90472->enter($__internal_370396127cbbf114a795339a63537b5db6d1982eeb44b6b5b5c95bd7d3d90472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ccc647adfedb29a7fc1a7a6ca46746cd35c58de6a672fd440ec0204380f1c9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc647adfedb29a7fc1a7a6ca46746cd35c58de6a672fd440ec0204380f1c9c4->enter($__internal_ccc647adfedb29a7fc1a7a6ca46746cd35c58de6a672fd440ec0204380f1c9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_370396127cbbf114a795339a63537b5db6d1982eeb44b6b5b5c95bd7d3d90472->leave($__internal_370396127cbbf114a795339a63537b5db6d1982eeb44b6b5b5c95bd7d3d90472_prof);

        
        $__internal_ccc647adfedb29a7fc1a7a6ca46746cd35c58de6a672fd440ec0204380f1c9c4->leave($__internal_ccc647adfedb29a7fc1a7a6ca46746cd35c58de6a672fd440ec0204380f1c9c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
