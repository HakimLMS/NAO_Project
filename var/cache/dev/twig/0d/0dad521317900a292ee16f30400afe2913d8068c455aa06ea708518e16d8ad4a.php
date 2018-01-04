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
        $__internal_ed1dd066c8c2c9de853da3f59e475d8325586b5c0cf2e5ce4f5711ad1924f24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1dd066c8c2c9de853da3f59e475d8325586b5c0cf2e5ce4f5711ad1924f24f->enter($__internal_ed1dd066c8c2c9de853da3f59e475d8325586b5c0cf2e5ce4f5711ad1924f24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_083e7bb77c8272e02da92b6c8c8ce25fa907c1d3e4bb840ef437fae900bb91f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083e7bb77c8272e02da92b6c8c8ce25fa907c1d3e4bb840ef437fae900bb91f1->enter($__internal_083e7bb77c8272e02da92b6c8c8ce25fa907c1d3e4bb840ef437fae900bb91f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ed1dd066c8c2c9de853da3f59e475d8325586b5c0cf2e5ce4f5711ad1924f24f->leave($__internal_ed1dd066c8c2c9de853da3f59e475d8325586b5c0cf2e5ce4f5711ad1924f24f_prof);

        
        $__internal_083e7bb77c8272e02da92b6c8c8ce25fa907c1d3e4bb840ef437fae900bb91f1->leave($__internal_083e7bb77c8272e02da92b6c8c8ce25fa907c1d3e4bb840ef437fae900bb91f1_prof);

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
