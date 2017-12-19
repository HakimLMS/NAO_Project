<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_03542dd852a14eeac2a98c532413aa3aacb127b004014dd4869b3022d1959e0d extends Twig_Template
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
        $__internal_447b83c36d1fc410ff1f8e3a2e391d95045463f35ea728b16e378c2557a0266d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447b83c36d1fc410ff1f8e3a2e391d95045463f35ea728b16e378c2557a0266d->enter($__internal_447b83c36d1fc410ff1f8e3a2e391d95045463f35ea728b16e378c2557a0266d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0d0448f731611a6d00fde51eb500c775b7cc34b67dc428ac06391c5496c217b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0448f731611a6d00fde51eb500c775b7cc34b67dc428ac06391c5496c217b6->enter($__internal_0d0448f731611a6d00fde51eb500c775b7cc34b67dc428ac06391c5496c217b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_447b83c36d1fc410ff1f8e3a2e391d95045463f35ea728b16e378c2557a0266d->leave($__internal_447b83c36d1fc410ff1f8e3a2e391d95045463f35ea728b16e378c2557a0266d_prof);

        
        $__internal_0d0448f731611a6d00fde51eb500c775b7cc34b67dc428ac06391c5496c217b6->leave($__internal_0d0448f731611a6d00fde51eb500c775b7cc34b67dc428ac06391c5496c217b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
