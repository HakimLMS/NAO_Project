<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c5a89bfb13e97539c6202907575a1b04c60cba7680c9be36f1344eba84de2761 extends Twig_Template
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
        $__internal_beff545daf7f832719dc9f195b1628fd70f58553ad88ae64a111fb5d127363ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beff545daf7f832719dc9f195b1628fd70f58553ad88ae64a111fb5d127363ce->enter($__internal_beff545daf7f832719dc9f195b1628fd70f58553ad88ae64a111fb5d127363ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1867ffbd363d6d021d58cc9d4e139c13d12f84f73e5b1720aa6508076257cfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1867ffbd363d6d021d58cc9d4e139c13d12f84f73e5b1720aa6508076257cfaa->enter($__internal_1867ffbd363d6d021d58cc9d4e139c13d12f84f73e5b1720aa6508076257cfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_beff545daf7f832719dc9f195b1628fd70f58553ad88ae64a111fb5d127363ce->leave($__internal_beff545daf7f832719dc9f195b1628fd70f58553ad88ae64a111fb5d127363ce_prof);

        
        $__internal_1867ffbd363d6d021d58cc9d4e139c13d12f84f73e5b1720aa6508076257cfaa->leave($__internal_1867ffbd363d6d021d58cc9d4e139c13d12f84f73e5b1720aa6508076257cfaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
