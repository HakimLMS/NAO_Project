<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0ef9d984b538bd3d84bfaeb12c283505a90dbfee1eab9b0aee8dabeb4d3a327a extends Twig_Template
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
        $__internal_099979923866afb3a2827877685bdbe7c78a6cf2e70fd22ed4e67b4d3404454b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099979923866afb3a2827877685bdbe7c78a6cf2e70fd22ed4e67b4d3404454b->enter($__internal_099979923866afb3a2827877685bdbe7c78a6cf2e70fd22ed4e67b4d3404454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a3734cd086c77f38e77caf2731e68c094d188cf9d3594bdeaddfbf9a77e75a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3734cd086c77f38e77caf2731e68c094d188cf9d3594bdeaddfbf9a77e75a71->enter($__internal_a3734cd086c77f38e77caf2731e68c094d188cf9d3594bdeaddfbf9a77e75a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_099979923866afb3a2827877685bdbe7c78a6cf2e70fd22ed4e67b4d3404454b->leave($__internal_099979923866afb3a2827877685bdbe7c78a6cf2e70fd22ed4e67b4d3404454b_prof);

        
        $__internal_a3734cd086c77f38e77caf2731e68c094d188cf9d3594bdeaddfbf9a77e75a71->leave($__internal_a3734cd086c77f38e77caf2731e68c094d188cf9d3594bdeaddfbf9a77e75a71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
