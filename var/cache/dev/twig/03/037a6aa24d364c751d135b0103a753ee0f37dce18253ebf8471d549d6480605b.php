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
        $__internal_b733b706e14993fed838cc37e0065f2f25c89d1c1be7a84a68a1a7ed4ed2ed64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b733b706e14993fed838cc37e0065f2f25c89d1c1be7a84a68a1a7ed4ed2ed64->enter($__internal_b733b706e14993fed838cc37e0065f2f25c89d1c1be7a84a68a1a7ed4ed2ed64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_58280d1c6c634ac13e7366363ba42b83da98f8a39c8c508102e47a0d4d3ccab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58280d1c6c634ac13e7366363ba42b83da98f8a39c8c508102e47a0d4d3ccab2->enter($__internal_58280d1c6c634ac13e7366363ba42b83da98f8a39c8c508102e47a0d4d3ccab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b733b706e14993fed838cc37e0065f2f25c89d1c1be7a84a68a1a7ed4ed2ed64->leave($__internal_b733b706e14993fed838cc37e0065f2f25c89d1c1be7a84a68a1a7ed4ed2ed64_prof);

        
        $__internal_58280d1c6c634ac13e7366363ba42b83da98f8a39c8c508102e47a0d4d3ccab2->leave($__internal_58280d1c6c634ac13e7366363ba42b83da98f8a39c8c508102e47a0d4d3ccab2_prof);

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
