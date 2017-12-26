<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ea82829497568c692d3504e62b7d3a21ce773202c79e898f0d826c70f2df997a extends Twig_Template
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
        $__internal_879b56d6b546fc5977b12c0e8509ee2573be062d29a63ccac7898eccccc2dde7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879b56d6b546fc5977b12c0e8509ee2573be062d29a63ccac7898eccccc2dde7->enter($__internal_879b56d6b546fc5977b12c0e8509ee2573be062d29a63ccac7898eccccc2dde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b19c4a88f7c86245db15c7ffa9f2da92e61003a357fac04a203db9314e0dafe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19c4a88f7c86245db15c7ffa9f2da92e61003a357fac04a203db9314e0dafe4->enter($__internal_b19c4a88f7c86245db15c7ffa9f2da92e61003a357fac04a203db9314e0dafe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_879b56d6b546fc5977b12c0e8509ee2573be062d29a63ccac7898eccccc2dde7->leave($__internal_879b56d6b546fc5977b12c0e8509ee2573be062d29a63ccac7898eccccc2dde7_prof);

        
        $__internal_b19c4a88f7c86245db15c7ffa9f2da92e61003a357fac04a203db9314e0dafe4->leave($__internal_b19c4a88f7c86245db15c7ffa9f2da92e61003a357fac04a203db9314e0dafe4_prof);

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
