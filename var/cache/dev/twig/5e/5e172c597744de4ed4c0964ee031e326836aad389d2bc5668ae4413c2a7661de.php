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
        $__internal_7e1bf7fd1122e0c99ed0d28f1260d2558b7e2116eb732103801a634f35a730bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1bf7fd1122e0c99ed0d28f1260d2558b7e2116eb732103801a634f35a730bf->enter($__internal_7e1bf7fd1122e0c99ed0d28f1260d2558b7e2116eb732103801a634f35a730bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2e5fed2df6a8a9d695bafd6ac3170a36a9659f0f64ae872700e683d525b0ebfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5fed2df6a8a9d695bafd6ac3170a36a9659f0f64ae872700e683d525b0ebfd->enter($__internal_2e5fed2df6a8a9d695bafd6ac3170a36a9659f0f64ae872700e683d525b0ebfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7e1bf7fd1122e0c99ed0d28f1260d2558b7e2116eb732103801a634f35a730bf->leave($__internal_7e1bf7fd1122e0c99ed0d28f1260d2558b7e2116eb732103801a634f35a730bf_prof);

        
        $__internal_2e5fed2df6a8a9d695bafd6ac3170a36a9659f0f64ae872700e683d525b0ebfd->leave($__internal_2e5fed2df6a8a9d695bafd6ac3170a36a9659f0f64ae872700e683d525b0ebfd_prof);

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
