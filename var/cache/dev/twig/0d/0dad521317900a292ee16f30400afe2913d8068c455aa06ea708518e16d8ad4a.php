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
        $__internal_1ee5899538311de4c399a7aaec7a43fb9c558372671a25a1afc96c337084743c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee5899538311de4c399a7aaec7a43fb9c558372671a25a1afc96c337084743c->enter($__internal_1ee5899538311de4c399a7aaec7a43fb9c558372671a25a1afc96c337084743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_11d70956bb3b24307f4fd8fab98b27864ac65cbbd397af332103bf79dd12b6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d70956bb3b24307f4fd8fab98b27864ac65cbbd397af332103bf79dd12b6b7->enter($__internal_11d70956bb3b24307f4fd8fab98b27864ac65cbbd397af332103bf79dd12b6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1ee5899538311de4c399a7aaec7a43fb9c558372671a25a1afc96c337084743c->leave($__internal_1ee5899538311de4c399a7aaec7a43fb9c558372671a25a1afc96c337084743c_prof);

        
        $__internal_11d70956bb3b24307f4fd8fab98b27864ac65cbbd397af332103bf79dd12b6b7->leave($__internal_11d70956bb3b24307f4fd8fab98b27864ac65cbbd397af332103bf79dd12b6b7_prof);

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
