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
        $__internal_881851e9729cc73646e5851d0031f074fd96dc6234e841e935b2795cb8eb07e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881851e9729cc73646e5851d0031f074fd96dc6234e841e935b2795cb8eb07e1->enter($__internal_881851e9729cc73646e5851d0031f074fd96dc6234e841e935b2795cb8eb07e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c907f6ed31e9046b983a3f50aa064f67bf94ebf067433c2334d22da4cbcb21e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c907f6ed31e9046b983a3f50aa064f67bf94ebf067433c2334d22da4cbcb21e4->enter($__internal_c907f6ed31e9046b983a3f50aa064f67bf94ebf067433c2334d22da4cbcb21e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_881851e9729cc73646e5851d0031f074fd96dc6234e841e935b2795cb8eb07e1->leave($__internal_881851e9729cc73646e5851d0031f074fd96dc6234e841e935b2795cb8eb07e1_prof);

        
        $__internal_c907f6ed31e9046b983a3f50aa064f67bf94ebf067433c2334d22da4cbcb21e4->leave($__internal_c907f6ed31e9046b983a3f50aa064f67bf94ebf067433c2334d22da4cbcb21e4_prof);

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
