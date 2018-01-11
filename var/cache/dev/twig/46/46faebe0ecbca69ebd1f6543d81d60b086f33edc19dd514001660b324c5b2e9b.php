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
        $__internal_70c5b8915496f29b832ea1a5d1e64ff8270671e2e1cfe3a28e1e550b97bbf746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c5b8915496f29b832ea1a5d1e64ff8270671e2e1cfe3a28e1e550b97bbf746->enter($__internal_70c5b8915496f29b832ea1a5d1e64ff8270671e2e1cfe3a28e1e550b97bbf746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_dc81f0809fbdcbcd07eabd1d4d3e240e5e58397a85105def80910f955a061932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc81f0809fbdcbcd07eabd1d4d3e240e5e58397a85105def80910f955a061932->enter($__internal_dc81f0809fbdcbcd07eabd1d4d3e240e5e58397a85105def80910f955a061932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_70c5b8915496f29b832ea1a5d1e64ff8270671e2e1cfe3a28e1e550b97bbf746->leave($__internal_70c5b8915496f29b832ea1a5d1e64ff8270671e2e1cfe3a28e1e550b97bbf746_prof);

        
        $__internal_dc81f0809fbdcbcd07eabd1d4d3e240e5e58397a85105def80910f955a061932->leave($__internal_dc81f0809fbdcbcd07eabd1d4d3e240e5e58397a85105def80910f955a061932_prof);

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
