<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2a0e3a6721c0be1e89d4d0185288be334bece078a60187ca2bfe6654ce0e08c2 extends Twig_Template
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
        $__internal_300d942d5b81380f8e3eddbd492ce15e7db15df54ef2f2b9c80fd8bb04391410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300d942d5b81380f8e3eddbd492ce15e7db15df54ef2f2b9c80fd8bb04391410->enter($__internal_300d942d5b81380f8e3eddbd492ce15e7db15df54ef2f2b9c80fd8bb04391410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_65dfae186252497ef93145e9cfb6ab22fa181b3e1a98533cbe49a9a8a030e3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65dfae186252497ef93145e9cfb6ab22fa181b3e1a98533cbe49a9a8a030e3f5->enter($__internal_65dfae186252497ef93145e9cfb6ab22fa181b3e1a98533cbe49a9a8a030e3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_300d942d5b81380f8e3eddbd492ce15e7db15df54ef2f2b9c80fd8bb04391410->leave($__internal_300d942d5b81380f8e3eddbd492ce15e7db15df54ef2f2b9c80fd8bb04391410_prof);

        
        $__internal_65dfae186252497ef93145e9cfb6ab22fa181b3e1a98533cbe49a9a8a030e3f5->leave($__internal_65dfae186252497ef93145e9cfb6ab22fa181b3e1a98533cbe49a9a8a030e3f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
