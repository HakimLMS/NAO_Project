<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_87dd8a5fa973cccffc6c518901a6877f3058045d699583ca5466004d6d6376a8 extends Twig_Template
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
        $__internal_bcd8c48907b35988fcd7af7a486209bfcba0e92b8449d9854c9d6f3a5c2ea0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd8c48907b35988fcd7af7a486209bfcba0e92b8449d9854c9d6f3a5c2ea0ec->enter($__internal_bcd8c48907b35988fcd7af7a486209bfcba0e92b8449d9854c9d6f3a5c2ea0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e24c4d32b308507425d49f74b6bdda14d1dc038e6131ed7bbcb799cb14e0f113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24c4d32b308507425d49f74b6bdda14d1dc038e6131ed7bbcb799cb14e0f113->enter($__internal_e24c4d32b308507425d49f74b6bdda14d1dc038e6131ed7bbcb799cb14e0f113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_bcd8c48907b35988fcd7af7a486209bfcba0e92b8449d9854c9d6f3a5c2ea0ec->leave($__internal_bcd8c48907b35988fcd7af7a486209bfcba0e92b8449d9854c9d6f3a5c2ea0ec_prof);

        
        $__internal_e24c4d32b308507425d49f74b6bdda14d1dc038e6131ed7bbcb799cb14e0f113->leave($__internal_e24c4d32b308507425d49f74b6bdda14d1dc038e6131ed7bbcb799cb14e0f113_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
