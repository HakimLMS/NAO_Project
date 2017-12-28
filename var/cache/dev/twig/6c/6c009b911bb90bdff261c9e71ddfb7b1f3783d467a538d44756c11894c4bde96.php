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
        $__internal_3ede5023918ad4c8a0a1b42616686541c4a41d244ceedcda0823f3cf218d09fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ede5023918ad4c8a0a1b42616686541c4a41d244ceedcda0823f3cf218d09fe->enter($__internal_3ede5023918ad4c8a0a1b42616686541c4a41d244ceedcda0823f3cf218d09fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e1cb247f68d0a73b067c2bf04abfa870e361e5e99a4dfa6b3e919eba6942e457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cb247f68d0a73b067c2bf04abfa870e361e5e99a4dfa6b3e919eba6942e457->enter($__internal_e1cb247f68d0a73b067c2bf04abfa870e361e5e99a4dfa6b3e919eba6942e457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3ede5023918ad4c8a0a1b42616686541c4a41d244ceedcda0823f3cf218d09fe->leave($__internal_3ede5023918ad4c8a0a1b42616686541c4a41d244ceedcda0823f3cf218d09fe_prof);

        
        $__internal_e1cb247f68d0a73b067c2bf04abfa870e361e5e99a4dfa6b3e919eba6942e457->leave($__internal_e1cb247f68d0a73b067c2bf04abfa870e361e5e99a4dfa6b3e919eba6942e457_prof);

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
