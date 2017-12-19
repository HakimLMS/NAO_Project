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
        $__internal_a615acb9d86f6e022390b7d2f9986b41d5c6cea6c2e7b6c598a3c5d1a87a10f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a615acb9d86f6e022390b7d2f9986b41d5c6cea6c2e7b6c598a3c5d1a87a10f0->enter($__internal_a615acb9d86f6e022390b7d2f9986b41d5c6cea6c2e7b6c598a3c5d1a87a10f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ba0a4c9e36a55a921a51cfa0635b84f6977774dfbe1f26361c499fa7a84f12f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0a4c9e36a55a921a51cfa0635b84f6977774dfbe1f26361c499fa7a84f12f0->enter($__internal_ba0a4c9e36a55a921a51cfa0635b84f6977774dfbe1f26361c499fa7a84f12f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a615acb9d86f6e022390b7d2f9986b41d5c6cea6c2e7b6c598a3c5d1a87a10f0->leave($__internal_a615acb9d86f6e022390b7d2f9986b41d5c6cea6c2e7b6c598a3c5d1a87a10f0_prof);

        
        $__internal_ba0a4c9e36a55a921a51cfa0635b84f6977774dfbe1f26361c499fa7a84f12f0->leave($__internal_ba0a4c9e36a55a921a51cfa0635b84f6977774dfbe1f26361c499fa7a84f12f0_prof);

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
