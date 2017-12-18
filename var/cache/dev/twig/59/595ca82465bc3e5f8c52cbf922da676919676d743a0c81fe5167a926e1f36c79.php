<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_651a6e6e36005918cf94111409d1feeb4f2660694fcfd728b158fdde0625d7e3 extends Twig_Template
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
        $__internal_7249ddd292f190ba05ac342134e113e5652ea6383df9152bf8d7b78a910f4e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7249ddd292f190ba05ac342134e113e5652ea6383df9152bf8d7b78a910f4e09->enter($__internal_7249ddd292f190ba05ac342134e113e5652ea6383df9152bf8d7b78a910f4e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_74b90020a83b3a4e9fa0521823a5685177e90418cbfc045baed03ab7b235d7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b90020a83b3a4e9fa0521823a5685177e90418cbfc045baed03ab7b235d7bd->enter($__internal_74b90020a83b3a4e9fa0521823a5685177e90418cbfc045baed03ab7b235d7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7249ddd292f190ba05ac342134e113e5652ea6383df9152bf8d7b78a910f4e09->leave($__internal_7249ddd292f190ba05ac342134e113e5652ea6383df9152bf8d7b78a910f4e09_prof);

        
        $__internal_74b90020a83b3a4e9fa0521823a5685177e90418cbfc045baed03ab7b235d7bd->leave($__internal_74b90020a83b3a4e9fa0521823a5685177e90418cbfc045baed03ab7b235d7bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
