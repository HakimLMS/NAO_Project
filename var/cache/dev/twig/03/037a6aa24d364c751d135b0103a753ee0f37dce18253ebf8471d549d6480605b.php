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
        $__internal_6e2a445b7f525dd4ba720c84807426c28116d5b607ba25e51b13baf05e4227d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2a445b7f525dd4ba720c84807426c28116d5b607ba25e51b13baf05e4227d4->enter($__internal_6e2a445b7f525dd4ba720c84807426c28116d5b607ba25e51b13baf05e4227d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0c3538842389976374923ee2970f8406736a1c91b3ac8cb9dc92cc6df79af0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3538842389976374923ee2970f8406736a1c91b3ac8cb9dc92cc6df79af0cf->enter($__internal_0c3538842389976374923ee2970f8406736a1c91b3ac8cb9dc92cc6df79af0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6e2a445b7f525dd4ba720c84807426c28116d5b607ba25e51b13baf05e4227d4->leave($__internal_6e2a445b7f525dd4ba720c84807426c28116d5b607ba25e51b13baf05e4227d4_prof);

        
        $__internal_0c3538842389976374923ee2970f8406736a1c91b3ac8cb9dc92cc6df79af0cf->leave($__internal_0c3538842389976374923ee2970f8406736a1c91b3ac8cb9dc92cc6df79af0cf_prof);

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
