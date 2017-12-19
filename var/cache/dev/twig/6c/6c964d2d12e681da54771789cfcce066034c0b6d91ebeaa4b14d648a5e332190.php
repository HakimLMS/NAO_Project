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
        $__internal_d2f6cacd856764ca1dd7bff10da8bbfb0ebd1a30d359b3cfc3c6ee9a5586b675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f6cacd856764ca1dd7bff10da8bbfb0ebd1a30d359b3cfc3c6ee9a5586b675->enter($__internal_d2f6cacd856764ca1dd7bff10da8bbfb0ebd1a30d359b3cfc3c6ee9a5586b675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_eeb677c30799fd03dbad0e27beabe924be1754466fc5aa12831eefcf0619daf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb677c30799fd03dbad0e27beabe924be1754466fc5aa12831eefcf0619daf3->enter($__internal_eeb677c30799fd03dbad0e27beabe924be1754466fc5aa12831eefcf0619daf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d2f6cacd856764ca1dd7bff10da8bbfb0ebd1a30d359b3cfc3c6ee9a5586b675->leave($__internal_d2f6cacd856764ca1dd7bff10da8bbfb0ebd1a30d359b3cfc3c6ee9a5586b675_prof);

        
        $__internal_eeb677c30799fd03dbad0e27beabe924be1754466fc5aa12831eefcf0619daf3->leave($__internal_eeb677c30799fd03dbad0e27beabe924be1754466fc5aa12831eefcf0619daf3_prof);

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
", "@Framework/Form/choice_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
