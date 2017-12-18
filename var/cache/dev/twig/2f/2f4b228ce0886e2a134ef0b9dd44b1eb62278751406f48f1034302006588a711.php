<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_515e5d846bd0dd07296b293269fa27a5e4b3c0d4887c3dab5d7424a485a560ef extends Twig_Template
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
        $__internal_7a5d3d3316ddc0e94f1d3f62bb0bd91c77a01434a31c7b5b75af5235f05cef03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5d3d3316ddc0e94f1d3f62bb0bd91c77a01434a31c7b5b75af5235f05cef03->enter($__internal_7a5d3d3316ddc0e94f1d3f62bb0bd91c77a01434a31c7b5b75af5235f05cef03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2e29cc3a2aff3efeae0a583164cccd8ef7b8c06254056d8115a9580989d5f5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e29cc3a2aff3efeae0a583164cccd8ef7b8c06254056d8115a9580989d5f5c7->enter($__internal_2e29cc3a2aff3efeae0a583164cccd8ef7b8c06254056d8115a9580989d5f5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7a5d3d3316ddc0e94f1d3f62bb0bd91c77a01434a31c7b5b75af5235f05cef03->leave($__internal_7a5d3d3316ddc0e94f1d3f62bb0bd91c77a01434a31c7b5b75af5235f05cef03_prof);

        
        $__internal_2e29cc3a2aff3efeae0a583164cccd8ef7b8c06254056d8115a9580989d5f5c7->leave($__internal_2e29cc3a2aff3efeae0a583164cccd8ef7b8c06254056d8115a9580989d5f5c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
