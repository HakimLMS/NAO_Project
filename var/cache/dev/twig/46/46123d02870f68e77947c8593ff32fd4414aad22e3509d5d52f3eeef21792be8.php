<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9befff9c36ecb304a16f585a30c19f1a4d025f7481da052bc428276aea79cb57 extends Twig_Template
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
        $__internal_0af71f49c721e1740e86d4187e86bbe1252f622c4a1e986bcdf3d32d9f12ef77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af71f49c721e1740e86d4187e86bbe1252f622c4a1e986bcdf3d32d9f12ef77->enter($__internal_0af71f49c721e1740e86d4187e86bbe1252f622c4a1e986bcdf3d32d9f12ef77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_882bc71b672fa5053efb4aef807dab1ab560cef9d3249f7903e1b0ba9b9d4356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882bc71b672fa5053efb4aef807dab1ab560cef9d3249f7903e1b0ba9b9d4356->enter($__internal_882bc71b672fa5053efb4aef807dab1ab560cef9d3249f7903e1b0ba9b9d4356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0af71f49c721e1740e86d4187e86bbe1252f622c4a1e986bcdf3d32d9f12ef77->leave($__internal_0af71f49c721e1740e86d4187e86bbe1252f622c4a1e986bcdf3d32d9f12ef77_prof);

        
        $__internal_882bc71b672fa5053efb4aef807dab1ab560cef9d3249f7903e1b0ba9b9d4356->leave($__internal_882bc71b672fa5053efb4aef807dab1ab560cef9d3249f7903e1b0ba9b9d4356_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
