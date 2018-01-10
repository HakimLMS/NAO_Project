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
        $__internal_4251d07cfb7421eab76d0a4e006b289492d13fcffac684fbdff12ac3a091bef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4251d07cfb7421eab76d0a4e006b289492d13fcffac684fbdff12ac3a091bef0->enter($__internal_4251d07cfb7421eab76d0a4e006b289492d13fcffac684fbdff12ac3a091bef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_437d691829ee7206b78af2051c8c113579fbe92009324c36bfcbeadf06e51470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437d691829ee7206b78af2051c8c113579fbe92009324c36bfcbeadf06e51470->enter($__internal_437d691829ee7206b78af2051c8c113579fbe92009324c36bfcbeadf06e51470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4251d07cfb7421eab76d0a4e006b289492d13fcffac684fbdff12ac3a091bef0->leave($__internal_4251d07cfb7421eab76d0a4e006b289492d13fcffac684fbdff12ac3a091bef0_prof);

        
        $__internal_437d691829ee7206b78af2051c8c113579fbe92009324c36bfcbeadf06e51470->leave($__internal_437d691829ee7206b78af2051c8c113579fbe92009324c36bfcbeadf06e51470_prof);

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
