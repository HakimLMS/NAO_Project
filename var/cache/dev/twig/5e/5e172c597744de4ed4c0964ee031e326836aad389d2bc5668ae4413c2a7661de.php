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
        $__internal_682e5a1d9c005e1fa9e4bd8cad2d56c77e96aa8e85e9aef77d79ef255b3b9278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682e5a1d9c005e1fa9e4bd8cad2d56c77e96aa8e85e9aef77d79ef255b3b9278->enter($__internal_682e5a1d9c005e1fa9e4bd8cad2d56c77e96aa8e85e9aef77d79ef255b3b9278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_b4c36c5beccacf5a883ea40168537360cf189cb4c8a0d2f53c393c71740e720f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c36c5beccacf5a883ea40168537360cf189cb4c8a0d2f53c393c71740e720f->enter($__internal_b4c36c5beccacf5a883ea40168537360cf189cb4c8a0d2f53c393c71740e720f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_682e5a1d9c005e1fa9e4bd8cad2d56c77e96aa8e85e9aef77d79ef255b3b9278->leave($__internal_682e5a1d9c005e1fa9e4bd8cad2d56c77e96aa8e85e9aef77d79ef255b3b9278_prof);

        
        $__internal_b4c36c5beccacf5a883ea40168537360cf189cb4c8a0d2f53c393c71740e720f->leave($__internal_b4c36c5beccacf5a883ea40168537360cf189cb4c8a0d2f53c393c71740e720f_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
