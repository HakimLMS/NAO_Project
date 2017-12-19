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
        $__internal_20628be404d84beec28832391c3809ec8f2999204da5d4a9fae13e3e4193b7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20628be404d84beec28832391c3809ec8f2999204da5d4a9fae13e3e4193b7e3->enter($__internal_20628be404d84beec28832391c3809ec8f2999204da5d4a9fae13e3e4193b7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_91cd3a40d2cfc1616bdc5ce5d72854b4cbb20144ad2781d96ea2f744df646ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cd3a40d2cfc1616bdc5ce5d72854b4cbb20144ad2781d96ea2f744df646ed6->enter($__internal_91cd3a40d2cfc1616bdc5ce5d72854b4cbb20144ad2781d96ea2f744df646ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_20628be404d84beec28832391c3809ec8f2999204da5d4a9fae13e3e4193b7e3->leave($__internal_20628be404d84beec28832391c3809ec8f2999204da5d4a9fae13e3e4193b7e3_prof);

        
        $__internal_91cd3a40d2cfc1616bdc5ce5d72854b4cbb20144ad2781d96ea2f744df646ed6->leave($__internal_91cd3a40d2cfc1616bdc5ce5d72854b4cbb20144ad2781d96ea2f744df646ed6_prof);

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
