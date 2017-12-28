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
        $__internal_80acc6bbff55387cc2a94291f878a00f58148e12a59e88d15b46b3a262ed4560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80acc6bbff55387cc2a94291f878a00f58148e12a59e88d15b46b3a262ed4560->enter($__internal_80acc6bbff55387cc2a94291f878a00f58148e12a59e88d15b46b3a262ed4560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_23bec459823661353418b3e071db78e84db88fbe6afe9ab4d80335a3d90086e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bec459823661353418b3e071db78e84db88fbe6afe9ab4d80335a3d90086e5->enter($__internal_23bec459823661353418b3e071db78e84db88fbe6afe9ab4d80335a3d90086e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_80acc6bbff55387cc2a94291f878a00f58148e12a59e88d15b46b3a262ed4560->leave($__internal_80acc6bbff55387cc2a94291f878a00f58148e12a59e88d15b46b3a262ed4560_prof);

        
        $__internal_23bec459823661353418b3e071db78e84db88fbe6afe9ab4d80335a3d90086e5->leave($__internal_23bec459823661353418b3e071db78e84db88fbe6afe9ab4d80335a3d90086e5_prof);

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
