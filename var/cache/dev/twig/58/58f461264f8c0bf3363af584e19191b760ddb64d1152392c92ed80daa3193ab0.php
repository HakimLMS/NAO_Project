<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_282989014d51c432269a37484b0f8e2316f4b5df1edf1e3d7410e312b744513d extends Twig_Template
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
        $__internal_9f10d7eb409ab4719666f5e1da51406ce445329fec4153e62cd4dd73b7fe60ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f10d7eb409ab4719666f5e1da51406ce445329fec4153e62cd4dd73b7fe60ad->enter($__internal_9f10d7eb409ab4719666f5e1da51406ce445329fec4153e62cd4dd73b7fe60ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c925c1f003825198b75b2edaac46e527593862e6fb334d86b4c437bd2a5877fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c925c1f003825198b75b2edaac46e527593862e6fb334d86b4c437bd2a5877fe->enter($__internal_c925c1f003825198b75b2edaac46e527593862e6fb334d86b4c437bd2a5877fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9f10d7eb409ab4719666f5e1da51406ce445329fec4153e62cd4dd73b7fe60ad->leave($__internal_9f10d7eb409ab4719666f5e1da51406ce445329fec4153e62cd4dd73b7fe60ad_prof);

        
        $__internal_c925c1f003825198b75b2edaac46e527593862e6fb334d86b4c437bd2a5877fe->leave($__internal_c925c1f003825198b75b2edaac46e527593862e6fb334d86b4c437bd2a5877fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
