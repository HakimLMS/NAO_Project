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
        $__internal_efe5e6023511cca85af9e592d119629ab5d58fcc1094490f94264ccd5e29b83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe5e6023511cca85af9e592d119629ab5d58fcc1094490f94264ccd5e29b83a->enter($__internal_efe5e6023511cca85af9e592d119629ab5d58fcc1094490f94264ccd5e29b83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c76907fcf4df9c7357010919e325ca11e3176c02615ecb753b56c7812450e9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76907fcf4df9c7357010919e325ca11e3176c02615ecb753b56c7812450e9d3->enter($__internal_c76907fcf4df9c7357010919e325ca11e3176c02615ecb753b56c7812450e9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_efe5e6023511cca85af9e592d119629ab5d58fcc1094490f94264ccd5e29b83a->leave($__internal_efe5e6023511cca85af9e592d119629ab5d58fcc1094490f94264ccd5e29b83a_prof);

        
        $__internal_c76907fcf4df9c7357010919e325ca11e3176c02615ecb753b56c7812450e9d3->leave($__internal_c76907fcf4df9c7357010919e325ca11e3176c02615ecb753b56c7812450e9d3_prof);

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
