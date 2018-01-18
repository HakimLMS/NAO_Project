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
        $__internal_351f7ae724c2e3ad560c14b3f5601895b39b7b19c53c426d8d184a3fb800831d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351f7ae724c2e3ad560c14b3f5601895b39b7b19c53c426d8d184a3fb800831d->enter($__internal_351f7ae724c2e3ad560c14b3f5601895b39b7b19c53c426d8d184a3fb800831d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_7492dab95676de0d37d04f94f7cbbc83b3d93df0b67683b9f46f42a635247738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7492dab95676de0d37d04f94f7cbbc83b3d93df0b67683b9f46f42a635247738->enter($__internal_7492dab95676de0d37d04f94f7cbbc83b3d93df0b67683b9f46f42a635247738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_351f7ae724c2e3ad560c14b3f5601895b39b7b19c53c426d8d184a3fb800831d->leave($__internal_351f7ae724c2e3ad560c14b3f5601895b39b7b19c53c426d8d184a3fb800831d_prof);

        
        $__internal_7492dab95676de0d37d04f94f7cbbc83b3d93df0b67683b9f46f42a635247738->leave($__internal_7492dab95676de0d37d04f94f7cbbc83b3d93df0b67683b9f46f42a635247738_prof);

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
