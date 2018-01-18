<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_80d02f63201924a459e27289518963361ddd8007a9bf00e607f14050e743b37a extends Twig_Template
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
        $__internal_3d484a43cc8476b1c1aa8545306e8907ceea260f0b7804f40d8d66127b04532a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d484a43cc8476b1c1aa8545306e8907ceea260f0b7804f40d8d66127b04532a->enter($__internal_3d484a43cc8476b1c1aa8545306e8907ceea260f0b7804f40d8d66127b04532a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_23197ed312cdf19976c53d81465ab957bb968a845aae4d091e9d69a32bec1926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23197ed312cdf19976c53d81465ab957bb968a845aae4d091e9d69a32bec1926->enter($__internal_23197ed312cdf19976c53d81465ab957bb968a845aae4d091e9d69a32bec1926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3d484a43cc8476b1c1aa8545306e8907ceea260f0b7804f40d8d66127b04532a->leave($__internal_3d484a43cc8476b1c1aa8545306e8907ceea260f0b7804f40d8d66127b04532a_prof);

        
        $__internal_23197ed312cdf19976c53d81465ab957bb968a845aae4d091e9d69a32bec1926->leave($__internal_23197ed312cdf19976c53d81465ab957bb968a845aae4d091e9d69a32bec1926_prof);

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
