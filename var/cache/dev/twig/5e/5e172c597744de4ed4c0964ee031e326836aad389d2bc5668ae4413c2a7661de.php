<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e710190d82739942928179f96cb938533150158cf3c564580d1af243efc35dd6 extends Twig_Template
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
        $__internal_e05c9f056f0d35e5b9235a9fcafac76af16ff7feb62820455d77cc1f8a83fa18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05c9f056f0d35e5b9235a9fcafac76af16ff7feb62820455d77cc1f8a83fa18->enter($__internal_e05c9f056f0d35e5b9235a9fcafac76af16ff7feb62820455d77cc1f8a83fa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_9a1fe7d76453435d31213abfd173d90c528ae9259bf670eb9baffe9f28581927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1fe7d76453435d31213abfd173d90c528ae9259bf670eb9baffe9f28581927->enter($__internal_9a1fe7d76453435d31213abfd173d90c528ae9259bf670eb9baffe9f28581927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e05c9f056f0d35e5b9235a9fcafac76af16ff7feb62820455d77cc1f8a83fa18->leave($__internal_e05c9f056f0d35e5b9235a9fcafac76af16ff7feb62820455d77cc1f8a83fa18_prof);

        
        $__internal_9a1fe7d76453435d31213abfd173d90c528ae9259bf670eb9baffe9f28581927->leave($__internal_9a1fe7d76453435d31213abfd173d90c528ae9259bf670eb9baffe9f28581927_prof);

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
