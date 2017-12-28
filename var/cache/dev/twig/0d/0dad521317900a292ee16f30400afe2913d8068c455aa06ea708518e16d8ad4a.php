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
        $__internal_2654255152182cef1dc96a5863b76ae72bef276fb4f20624ef9bb27bbb9c7991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2654255152182cef1dc96a5863b76ae72bef276fb4f20624ef9bb27bbb9c7991->enter($__internal_2654255152182cef1dc96a5863b76ae72bef276fb4f20624ef9bb27bbb9c7991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a493228b4c86821c4643cf17c76502ddebb54cb99836a5d3dd21b56154beb801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a493228b4c86821c4643cf17c76502ddebb54cb99836a5d3dd21b56154beb801->enter($__internal_a493228b4c86821c4643cf17c76502ddebb54cb99836a5d3dd21b56154beb801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2654255152182cef1dc96a5863b76ae72bef276fb4f20624ef9bb27bbb9c7991->leave($__internal_2654255152182cef1dc96a5863b76ae72bef276fb4f20624ef9bb27bbb9c7991_prof);

        
        $__internal_a493228b4c86821c4643cf17c76502ddebb54cb99836a5d3dd21b56154beb801->leave($__internal_a493228b4c86821c4643cf17c76502ddebb54cb99836a5d3dd21b56154beb801_prof);

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
