<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d066144c1064ab64a0695132add2b004517ec286a4a237fe0127f6391484456c extends Twig_Template
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
        $__internal_b7d5f3ae52de1307bd78f2bc5280f63c2b0051b0615de028a3550f2cf7115d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d5f3ae52de1307bd78f2bc5280f63c2b0051b0615de028a3550f2cf7115d53->enter($__internal_b7d5f3ae52de1307bd78f2bc5280f63c2b0051b0615de028a3550f2cf7115d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d1dc8ff2f9cc52613ef41f8ee7af21cc344fcedbc42d92731e4edea0537ea0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1dc8ff2f9cc52613ef41f8ee7af21cc344fcedbc42d92731e4edea0537ea0a3->enter($__internal_d1dc8ff2f9cc52613ef41f8ee7af21cc344fcedbc42d92731e4edea0537ea0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b7d5f3ae52de1307bd78f2bc5280f63c2b0051b0615de028a3550f2cf7115d53->leave($__internal_b7d5f3ae52de1307bd78f2bc5280f63c2b0051b0615de028a3550f2cf7115d53_prof);

        
        $__internal_d1dc8ff2f9cc52613ef41f8ee7af21cc344fcedbc42d92731e4edea0537ea0a3->leave($__internal_d1dc8ff2f9cc52613ef41f8ee7af21cc344fcedbc42d92731e4edea0537ea0a3_prof);

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
", "@Framework/Form/money_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
