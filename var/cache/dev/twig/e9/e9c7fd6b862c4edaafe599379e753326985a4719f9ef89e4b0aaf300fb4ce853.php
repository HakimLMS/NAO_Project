<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9f86a4cad2d7db3a2126e9c8acee6464133d68dbcc647dccadfa5a401a06268e extends Twig_Template
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
        $__internal_f5e86ca0be236e45f82bbc02d7c0892aa61c6c67430bde7b0a723e097e15391e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e86ca0be236e45f82bbc02d7c0892aa61c6c67430bde7b0a723e097e15391e->enter($__internal_f5e86ca0be236e45f82bbc02d7c0892aa61c6c67430bde7b0a723e097e15391e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c4d3359f6cdbe08b95066f2382859d267cbb690a59ef91b07ed62a7f5f091898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d3359f6cdbe08b95066f2382859d267cbb690a59ef91b07ed62a7f5f091898->enter($__internal_c4d3359f6cdbe08b95066f2382859d267cbb690a59ef91b07ed62a7f5f091898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f5e86ca0be236e45f82bbc02d7c0892aa61c6c67430bde7b0a723e097e15391e->leave($__internal_f5e86ca0be236e45f82bbc02d7c0892aa61c6c67430bde7b0a723e097e15391e_prof);

        
        $__internal_c4d3359f6cdbe08b95066f2382859d267cbb690a59ef91b07ed62a7f5f091898->leave($__internal_c4d3359f6cdbe08b95066f2382859d267cbb690a59ef91b07ed62a7f5f091898_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
