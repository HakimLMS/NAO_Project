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
        $__internal_3a652599928d89943c92a298ce4317a40816c94c0f251ea91a890dd104646e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a652599928d89943c92a298ce4317a40816c94c0f251ea91a890dd104646e87->enter($__internal_3a652599928d89943c92a298ce4317a40816c94c0f251ea91a890dd104646e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_def7f434d45203338e891ec52be5cada188e628ecb3a8f3e2dbbedfcdcf27a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def7f434d45203338e891ec52be5cada188e628ecb3a8f3e2dbbedfcdcf27a23->enter($__internal_def7f434d45203338e891ec52be5cada188e628ecb3a8f3e2dbbedfcdcf27a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3a652599928d89943c92a298ce4317a40816c94c0f251ea91a890dd104646e87->leave($__internal_3a652599928d89943c92a298ce4317a40816c94c0f251ea91a890dd104646e87_prof);

        
        $__internal_def7f434d45203338e891ec52be5cada188e628ecb3a8f3e2dbbedfcdcf27a23->leave($__internal_def7f434d45203338e891ec52be5cada188e628ecb3a8f3e2dbbedfcdcf27a23_prof);

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
