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
        $__internal_0271f05b6086fc6c734e9017b5ab6bfc74c38134e142fc0009cb14432348b6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0271f05b6086fc6c734e9017b5ab6bfc74c38134e142fc0009cb14432348b6c9->enter($__internal_0271f05b6086fc6c734e9017b5ab6bfc74c38134e142fc0009cb14432348b6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d556972f307c78a076f0ba1ee11f97351fe32070cb35322cd9d52a5235ec00af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d556972f307c78a076f0ba1ee11f97351fe32070cb35322cd9d52a5235ec00af->enter($__internal_d556972f307c78a076f0ba1ee11f97351fe32070cb35322cd9d52a5235ec00af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0271f05b6086fc6c734e9017b5ab6bfc74c38134e142fc0009cb14432348b6c9->leave($__internal_0271f05b6086fc6c734e9017b5ab6bfc74c38134e142fc0009cb14432348b6c9_prof);

        
        $__internal_d556972f307c78a076f0ba1ee11f97351fe32070cb35322cd9d52a5235ec00af->leave($__internal_d556972f307c78a076f0ba1ee11f97351fe32070cb35322cd9d52a5235ec00af_prof);

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
