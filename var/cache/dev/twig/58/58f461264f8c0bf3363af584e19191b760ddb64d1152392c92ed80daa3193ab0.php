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
        $__internal_2efa6b540af14c6a28f53fc4e5ed9beb5cbf26cc1f1cd3e6738e8a10a29b041b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efa6b540af14c6a28f53fc4e5ed9beb5cbf26cc1f1cd3e6738e8a10a29b041b->enter($__internal_2efa6b540af14c6a28f53fc4e5ed9beb5cbf26cc1f1cd3e6738e8a10a29b041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_68695f0d157e9d5dbc5f6f116cca8bd65ce221e2c50ce778c7488840275df0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68695f0d157e9d5dbc5f6f116cca8bd65ce221e2c50ce778c7488840275df0e7->enter($__internal_68695f0d157e9d5dbc5f6f116cca8bd65ce221e2c50ce778c7488840275df0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2efa6b540af14c6a28f53fc4e5ed9beb5cbf26cc1f1cd3e6738e8a10a29b041b->leave($__internal_2efa6b540af14c6a28f53fc4e5ed9beb5cbf26cc1f1cd3e6738e8a10a29b041b_prof);

        
        $__internal_68695f0d157e9d5dbc5f6f116cca8bd65ce221e2c50ce778c7488840275df0e7->leave($__internal_68695f0d157e9d5dbc5f6f116cca8bd65ce221e2c50ce778c7488840275df0e7_prof);

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
