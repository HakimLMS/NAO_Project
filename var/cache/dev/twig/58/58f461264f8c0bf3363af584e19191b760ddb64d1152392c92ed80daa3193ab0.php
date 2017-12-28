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
        $__internal_12290957b672ae8e568e90af262483e669a508f46445370080795ddd7b6f2bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12290957b672ae8e568e90af262483e669a508f46445370080795ddd7b6f2bda->enter($__internal_12290957b672ae8e568e90af262483e669a508f46445370080795ddd7b6f2bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_bfc5499331fd22a3f691481f0b5ebed39a128a0d3fbf9196a12b0fa01f9b0769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc5499331fd22a3f691481f0b5ebed39a128a0d3fbf9196a12b0fa01f9b0769->enter($__internal_bfc5499331fd22a3f691481f0b5ebed39a128a0d3fbf9196a12b0fa01f9b0769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_12290957b672ae8e568e90af262483e669a508f46445370080795ddd7b6f2bda->leave($__internal_12290957b672ae8e568e90af262483e669a508f46445370080795ddd7b6f2bda_prof);

        
        $__internal_bfc5499331fd22a3f691481f0b5ebed39a128a0d3fbf9196a12b0fa01f9b0769->leave($__internal_bfc5499331fd22a3f691481f0b5ebed39a128a0d3fbf9196a12b0fa01f9b0769_prof);

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
