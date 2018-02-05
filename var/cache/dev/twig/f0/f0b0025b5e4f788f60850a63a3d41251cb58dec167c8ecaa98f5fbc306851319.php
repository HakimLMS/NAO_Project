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
        $__internal_6b1f127edcc2f57225c98a6752ccc5199b29bf37879733ffd424e88fb4da48a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1f127edcc2f57225c98a6752ccc5199b29bf37879733ffd424e88fb4da48a4->enter($__internal_6b1f127edcc2f57225c98a6752ccc5199b29bf37879733ffd424e88fb4da48a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_47f7bd516d52185e5f8885a2446a19155052b58553c861022534e47e14e78681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f7bd516d52185e5f8885a2446a19155052b58553c861022534e47e14e78681->enter($__internal_47f7bd516d52185e5f8885a2446a19155052b58553c861022534e47e14e78681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6b1f127edcc2f57225c98a6752ccc5199b29bf37879733ffd424e88fb4da48a4->leave($__internal_6b1f127edcc2f57225c98a6752ccc5199b29bf37879733ffd424e88fb4da48a4_prof);

        
        $__internal_47f7bd516d52185e5f8885a2446a19155052b58553c861022534e47e14e78681->leave($__internal_47f7bd516d52185e5f8885a2446a19155052b58553c861022534e47e14e78681_prof);

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
", "@Framework/Form/button_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
