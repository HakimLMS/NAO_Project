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
        $__internal_7f21823b0a26dd9c6f0eefea399329503ee80aa8c592bf800e551682fa2c80e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f21823b0a26dd9c6f0eefea399329503ee80aa8c592bf800e551682fa2c80e0->enter($__internal_7f21823b0a26dd9c6f0eefea399329503ee80aa8c592bf800e551682fa2c80e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0d74095cefc2eb09263dd388d74f010192d87a568482d68c680d53b0c56b7f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d74095cefc2eb09263dd388d74f010192d87a568482d68c680d53b0c56b7f96->enter($__internal_0d74095cefc2eb09263dd388d74f010192d87a568482d68c680d53b0c56b7f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7f21823b0a26dd9c6f0eefea399329503ee80aa8c592bf800e551682fa2c80e0->leave($__internal_7f21823b0a26dd9c6f0eefea399329503ee80aa8c592bf800e551682fa2c80e0_prof);

        
        $__internal_0d74095cefc2eb09263dd388d74f010192d87a568482d68c680d53b0c56b7f96->leave($__internal_0d74095cefc2eb09263dd388d74f010192d87a568482d68c680d53b0c56b7f96_prof);

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
