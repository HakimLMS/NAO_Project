<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2a5fd5b3999a6a6e53295c30a0c6dc369156bcbecd87308d6be069aa3069a3b2 extends Twig_Template
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
        $__internal_4376f77c8e743ea62bdc276c15044252668b48586a778768b6c8b8f23552500a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4376f77c8e743ea62bdc276c15044252668b48586a778768b6c8b8f23552500a->enter($__internal_4376f77c8e743ea62bdc276c15044252668b48586a778768b6c8b8f23552500a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3bba4b88eeb53fb4f2663ba3310c04cc068e9cc5c50565a08972e675dd82f05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bba4b88eeb53fb4f2663ba3310c04cc068e9cc5c50565a08972e675dd82f05c->enter($__internal_3bba4b88eeb53fb4f2663ba3310c04cc068e9cc5c50565a08972e675dd82f05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4376f77c8e743ea62bdc276c15044252668b48586a778768b6c8b8f23552500a->leave($__internal_4376f77c8e743ea62bdc276c15044252668b48586a778768b6c8b8f23552500a_prof);

        
        $__internal_3bba4b88eeb53fb4f2663ba3310c04cc068e9cc5c50565a08972e675dd82f05c->leave($__internal_3bba4b88eeb53fb4f2663ba3310c04cc068e9cc5c50565a08972e675dd82f05c_prof);

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
