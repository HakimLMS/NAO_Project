<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_a53a6a8110e8b5054f36424a464e5fb60c90a321b8b794fd23d407a405b82c1c extends Twig_Template
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
        $__internal_3025468b012ecd62fd1d019c78d69e517cbc125baabcc866b6e2339f2907cf2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3025468b012ecd62fd1d019c78d69e517cbc125baabcc866b6e2339f2907cf2a->enter($__internal_3025468b012ecd62fd1d019c78d69e517cbc125baabcc866b6e2339f2907cf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1bfa0ce9707fed0b35f924b6bbc497e5fd74f4b1654f66353cc1865103c68e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfa0ce9707fed0b35f924b6bbc497e5fd74f4b1654f66353cc1865103c68e96->enter($__internal_1bfa0ce9707fed0b35f924b6bbc497e5fd74f4b1654f66353cc1865103c68e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3025468b012ecd62fd1d019c78d69e517cbc125baabcc866b6e2339f2907cf2a->leave($__internal_3025468b012ecd62fd1d019c78d69e517cbc125baabcc866b6e2339f2907cf2a_prof);

        
        $__internal_1bfa0ce9707fed0b35f924b6bbc497e5fd74f4b1654f66353cc1865103c68e96->leave($__internal_1bfa0ce9707fed0b35f924b6bbc497e5fd74f4b1654f66353cc1865103c68e96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
