<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_fa859260f8f33e61847520b60dbe5a544f725e3ceaccc48ae3d7b73b367b318a extends Twig_Template
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
        $__internal_669d21e67f513f35f142674d53ac03c6a66c4099195b75919e6dc8e85e069c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669d21e67f513f35f142674d53ac03c6a66c4099195b75919e6dc8e85e069c82->enter($__internal_669d21e67f513f35f142674d53ac03c6a66c4099195b75919e6dc8e85e069c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_0b770be970c114a62643e281510e6489d83cca39dbe5d0e3d5d2243f6710abec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b770be970c114a62643e281510e6489d83cca39dbe5d0e3d5d2243f6710abec->enter($__internal_0b770be970c114a62643e281510e6489d83cca39dbe5d0e3d5d2243f6710abec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_669d21e67f513f35f142674d53ac03c6a66c4099195b75919e6dc8e85e069c82->leave($__internal_669d21e67f513f35f142674d53ac03c6a66c4099195b75919e6dc8e85e069c82_prof);

        
        $__internal_0b770be970c114a62643e281510e6489d83cca39dbe5d0e3d5d2243f6710abec->leave($__internal_0b770be970c114a62643e281510e6489d83cca39dbe5d0e3d5d2243f6710abec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
