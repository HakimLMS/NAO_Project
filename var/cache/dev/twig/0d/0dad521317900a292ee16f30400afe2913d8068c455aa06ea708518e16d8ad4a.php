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
        $__internal_8cef484e93775f09cc11624a88c8f4127f402e9f1c62ce02d5e91071c1227e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cef484e93775f09cc11624a88c8f4127f402e9f1c62ce02d5e91071c1227e25->enter($__internal_8cef484e93775f09cc11624a88c8f4127f402e9f1c62ce02d5e91071c1227e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_48166c2e90a61590a49934dc4c6a67a7c63d5e08bc55fc2b7ac67e6a576ceaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48166c2e90a61590a49934dc4c6a67a7c63d5e08bc55fc2b7ac67e6a576ceaea->enter($__internal_48166c2e90a61590a49934dc4c6a67a7c63d5e08bc55fc2b7ac67e6a576ceaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8cef484e93775f09cc11624a88c8f4127f402e9f1c62ce02d5e91071c1227e25->leave($__internal_8cef484e93775f09cc11624a88c8f4127f402e9f1c62ce02d5e91071c1227e25_prof);

        
        $__internal_48166c2e90a61590a49934dc4c6a67a7c63d5e08bc55fc2b7ac67e6a576ceaea->leave($__internal_48166c2e90a61590a49934dc4c6a67a7c63d5e08bc55fc2b7ac67e6a576ceaea_prof);

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
