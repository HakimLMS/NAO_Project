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
        $__internal_21931a24bf67b4d28d83049e473fded9612966d3d481b29d23e1a34c74e568ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21931a24bf67b4d28d83049e473fded9612966d3d481b29d23e1a34c74e568ea->enter($__internal_21931a24bf67b4d28d83049e473fded9612966d3d481b29d23e1a34c74e568ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_48a948f9d65aeae9e0efc92fa01341a321a088d4d243a58fc369fd3aecfd8e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a948f9d65aeae9e0efc92fa01341a321a088d4d243a58fc369fd3aecfd8e4c->enter($__internal_48a948f9d65aeae9e0efc92fa01341a321a088d4d243a58fc369fd3aecfd8e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_21931a24bf67b4d28d83049e473fded9612966d3d481b29d23e1a34c74e568ea->leave($__internal_21931a24bf67b4d28d83049e473fded9612966d3d481b29d23e1a34c74e568ea_prof);

        
        $__internal_48a948f9d65aeae9e0efc92fa01341a321a088d4d243a58fc369fd3aecfd8e4c->leave($__internal_48a948f9d65aeae9e0efc92fa01341a321a088d4d243a58fc369fd3aecfd8e4c_prof);

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
