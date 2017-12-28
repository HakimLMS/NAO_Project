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
        $__internal_5c71f3e20407eed6ee6206d3816882f21ebc3bb99217f36054c26eb4816e28ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c71f3e20407eed6ee6206d3816882f21ebc3bb99217f36054c26eb4816e28ae->enter($__internal_5c71f3e20407eed6ee6206d3816882f21ebc3bb99217f36054c26eb4816e28ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_463d4cf78799a43ce4cc8909b24c34e03c8a2a26aa1297adb103c46327f71c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463d4cf78799a43ce4cc8909b24c34e03c8a2a26aa1297adb103c46327f71c4a->enter($__internal_463d4cf78799a43ce4cc8909b24c34e03c8a2a26aa1297adb103c46327f71c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5c71f3e20407eed6ee6206d3816882f21ebc3bb99217f36054c26eb4816e28ae->leave($__internal_5c71f3e20407eed6ee6206d3816882f21ebc3bb99217f36054c26eb4816e28ae_prof);

        
        $__internal_463d4cf78799a43ce4cc8909b24c34e03c8a2a26aa1297adb103c46327f71c4a->leave($__internal_463d4cf78799a43ce4cc8909b24c34e03c8a2a26aa1297adb103c46327f71c4a_prof);

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
