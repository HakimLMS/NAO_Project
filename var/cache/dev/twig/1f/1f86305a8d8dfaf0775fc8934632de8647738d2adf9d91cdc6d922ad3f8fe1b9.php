<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3741b9de6cd1e4bc7140b3204a4b0d242ad6843666c9367c068344487fc3574a extends Twig_Template
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
        $__internal_c7b89053ea17e52ad10678905c500e21f522f9fd55f010adc1494617ad6e69ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b89053ea17e52ad10678905c500e21f522f9fd55f010adc1494617ad6e69ea->enter($__internal_c7b89053ea17e52ad10678905c500e21f522f9fd55f010adc1494617ad6e69ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_c519485946a290e5129e5e78091c09d956b0b75b1b5b6837d6bc412b56114126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c519485946a290e5129e5e78091c09d956b0b75b1b5b6837d6bc412b56114126->enter($__internal_c519485946a290e5129e5e78091c09d956b0b75b1b5b6837d6bc412b56114126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c7b89053ea17e52ad10678905c500e21f522f9fd55f010adc1494617ad6e69ea->leave($__internal_c7b89053ea17e52ad10678905c500e21f522f9fd55f010adc1494617ad6e69ea_prof);

        
        $__internal_c519485946a290e5129e5e78091c09d956b0b75b1b5b6837d6bc412b56114126->leave($__internal_c519485946a290e5129e5e78091c09d956b0b75b1b5b6837d6bc412b56114126_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
