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
        $__internal_2b480044788c0e46985f876878f0a4c2c81dc19d7180244d0998487a3ecda176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b480044788c0e46985f876878f0a4c2c81dc19d7180244d0998487a3ecda176->enter($__internal_2b480044788c0e46985f876878f0a4c2c81dc19d7180244d0998487a3ecda176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_91d73298b70a4a988f81cf91a9377d6fb0ae32a574e57251cf1f096094a837cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d73298b70a4a988f81cf91a9377d6fb0ae32a574e57251cf1f096094a837cf->enter($__internal_91d73298b70a4a988f81cf91a9377d6fb0ae32a574e57251cf1f096094a837cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2b480044788c0e46985f876878f0a4c2c81dc19d7180244d0998487a3ecda176->leave($__internal_2b480044788c0e46985f876878f0a4c2c81dc19d7180244d0998487a3ecda176_prof);

        
        $__internal_91d73298b70a4a988f81cf91a9377d6fb0ae32a574e57251cf1f096094a837cf->leave($__internal_91d73298b70a4a988f81cf91a9377d6fb0ae32a574e57251cf1f096094a837cf_prof);

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
