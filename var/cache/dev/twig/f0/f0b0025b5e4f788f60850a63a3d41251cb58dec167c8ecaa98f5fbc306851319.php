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
        $__internal_250e45348753009eb96af6e63bece0aa56673e00eeeb1dd0812a47ed75485d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250e45348753009eb96af6e63bece0aa56673e00eeeb1dd0812a47ed75485d23->enter($__internal_250e45348753009eb96af6e63bece0aa56673e00eeeb1dd0812a47ed75485d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_c8fa067754fc4c8a81a08114f0f03aaaad838b003420cb8346a653fd1946cf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fa067754fc4c8a81a08114f0f03aaaad838b003420cb8346a653fd1946cf8e->enter($__internal_c8fa067754fc4c8a81a08114f0f03aaaad838b003420cb8346a653fd1946cf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_250e45348753009eb96af6e63bece0aa56673e00eeeb1dd0812a47ed75485d23->leave($__internal_250e45348753009eb96af6e63bece0aa56673e00eeeb1dd0812a47ed75485d23_prof);

        
        $__internal_c8fa067754fc4c8a81a08114f0f03aaaad838b003420cb8346a653fd1946cf8e->leave($__internal_c8fa067754fc4c8a81a08114f0f03aaaad838b003420cb8346a653fd1946cf8e_prof);

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
