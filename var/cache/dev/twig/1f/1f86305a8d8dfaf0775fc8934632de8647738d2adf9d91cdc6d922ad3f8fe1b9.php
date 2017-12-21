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
        $__internal_d653124327353ee854389bd9e496f120dd6deb8ede61467eddbf3c05192d9027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d653124327353ee854389bd9e496f120dd6deb8ede61467eddbf3c05192d9027->enter($__internal_d653124327353ee854389bd9e496f120dd6deb8ede61467eddbf3c05192d9027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_7a747d83f9f845cb55d725743e85c4c230d9a9b16d3bc82d312d5a078b3fd7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a747d83f9f845cb55d725743e85c4c230d9a9b16d3bc82d312d5a078b3fd7fa->enter($__internal_7a747d83f9f845cb55d725743e85c4c230d9a9b16d3bc82d312d5a078b3fd7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d653124327353ee854389bd9e496f120dd6deb8ede61467eddbf3c05192d9027->leave($__internal_d653124327353ee854389bd9e496f120dd6deb8ede61467eddbf3c05192d9027_prof);

        
        $__internal_7a747d83f9f845cb55d725743e85c4c230d9a9b16d3bc82d312d5a078b3fd7fa->leave($__internal_7a747d83f9f845cb55d725743e85c4c230d9a9b16d3bc82d312d5a078b3fd7fa_prof);

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
