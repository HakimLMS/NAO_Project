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
        $__internal_87f18a7294e1091c1f74c4ecb3a4102220b87ee98d980a673d64a95e6ab64422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f18a7294e1091c1f74c4ecb3a4102220b87ee98d980a673d64a95e6ab64422->enter($__internal_87f18a7294e1091c1f74c4ecb3a4102220b87ee98d980a673d64a95e6ab64422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_6339aebbef5f66a057d8b95e4945f48fbebbafe925a8f70f0b0d83d1e68c4396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6339aebbef5f66a057d8b95e4945f48fbebbafe925a8f70f0b0d83d1e68c4396->enter($__internal_6339aebbef5f66a057d8b95e4945f48fbebbafe925a8f70f0b0d83d1e68c4396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_87f18a7294e1091c1f74c4ecb3a4102220b87ee98d980a673d64a95e6ab64422->leave($__internal_87f18a7294e1091c1f74c4ecb3a4102220b87ee98d980a673d64a95e6ab64422_prof);

        
        $__internal_6339aebbef5f66a057d8b95e4945f48fbebbafe925a8f70f0b0d83d1e68c4396->leave($__internal_6339aebbef5f66a057d8b95e4945f48fbebbafe925a8f70f0b0d83d1e68c4396_prof);

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
