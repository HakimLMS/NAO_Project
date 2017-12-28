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
        $__internal_8a78607ca642ba579d8f0c3519f5acf1f092dd42feef474c29c6b5cdd7777164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a78607ca642ba579d8f0c3519f5acf1f092dd42feef474c29c6b5cdd7777164->enter($__internal_8a78607ca642ba579d8f0c3519f5acf1f092dd42feef474c29c6b5cdd7777164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_fcec8c22a5edc5c795b8999d5ad036d26e70a55eb1fc4d99d6c1212e9306ce27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcec8c22a5edc5c795b8999d5ad036d26e70a55eb1fc4d99d6c1212e9306ce27->enter($__internal_fcec8c22a5edc5c795b8999d5ad036d26e70a55eb1fc4d99d6c1212e9306ce27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8a78607ca642ba579d8f0c3519f5acf1f092dd42feef474c29c6b5cdd7777164->leave($__internal_8a78607ca642ba579d8f0c3519f5acf1f092dd42feef474c29c6b5cdd7777164_prof);

        
        $__internal_fcec8c22a5edc5c795b8999d5ad036d26e70a55eb1fc4d99d6c1212e9306ce27->leave($__internal_fcec8c22a5edc5c795b8999d5ad036d26e70a55eb1fc4d99d6c1212e9306ce27_prof);

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
