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
        $__internal_dc966efe9f66cd97972f27c2f946c9379fd659fb2e871d37f61f9b1dedf5db6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc966efe9f66cd97972f27c2f946c9379fd659fb2e871d37f61f9b1dedf5db6e->enter($__internal_dc966efe9f66cd97972f27c2f946c9379fd659fb2e871d37f61f9b1dedf5db6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ec74a5f47917876ba24867d4722dae35011ebec99f1c066c170636d76090f63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec74a5f47917876ba24867d4722dae35011ebec99f1c066c170636d76090f63e->enter($__internal_ec74a5f47917876ba24867d4722dae35011ebec99f1c066c170636d76090f63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dc966efe9f66cd97972f27c2f946c9379fd659fb2e871d37f61f9b1dedf5db6e->leave($__internal_dc966efe9f66cd97972f27c2f946c9379fd659fb2e871d37f61f9b1dedf5db6e_prof);

        
        $__internal_ec74a5f47917876ba24867d4722dae35011ebec99f1c066c170636d76090f63e->leave($__internal_ec74a5f47917876ba24867d4722dae35011ebec99f1c066c170636d76090f63e_prof);

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
