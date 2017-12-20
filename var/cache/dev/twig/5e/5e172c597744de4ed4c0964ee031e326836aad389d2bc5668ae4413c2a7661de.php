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
        $__internal_57d4622ed07864514940f0bae8c789795cd70b93ef853e2d2ca965da6ad0034a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d4622ed07864514940f0bae8c789795cd70b93ef853e2d2ca965da6ad0034a->enter($__internal_57d4622ed07864514940f0bae8c789795cd70b93ef853e2d2ca965da6ad0034a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0c92b65b32a90e8cf18f665419ce9f0668bbb5734a7a6431eb20d04d777c04e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c92b65b32a90e8cf18f665419ce9f0668bbb5734a7a6431eb20d04d777c04e8->enter($__internal_0c92b65b32a90e8cf18f665419ce9f0668bbb5734a7a6431eb20d04d777c04e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_57d4622ed07864514940f0bae8c789795cd70b93ef853e2d2ca965da6ad0034a->leave($__internal_57d4622ed07864514940f0bae8c789795cd70b93ef853e2d2ca965da6ad0034a_prof);

        
        $__internal_0c92b65b32a90e8cf18f665419ce9f0668bbb5734a7a6431eb20d04d777c04e8->leave($__internal_0c92b65b32a90e8cf18f665419ce9f0668bbb5734a7a6431eb20d04d777c04e8_prof);

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
