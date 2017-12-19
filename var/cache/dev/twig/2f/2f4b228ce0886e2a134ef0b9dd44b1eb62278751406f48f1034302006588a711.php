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
        $__internal_c6624f58280bfc9c73aecadb16bb25571fa709b3b77b039476c01f74c141ddb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6624f58280bfc9c73aecadb16bb25571fa709b3b77b039476c01f74c141ddb6->enter($__internal_c6624f58280bfc9c73aecadb16bb25571fa709b3b77b039476c01f74c141ddb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c0b27811971f050eb9906ef55b6d50df34e54a7feb768ce80d73308a6e31cfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b27811971f050eb9906ef55b6d50df34e54a7feb768ce80d73308a6e31cfcc->enter($__internal_c0b27811971f050eb9906ef55b6d50df34e54a7feb768ce80d73308a6e31cfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c6624f58280bfc9c73aecadb16bb25571fa709b3b77b039476c01f74c141ddb6->leave($__internal_c6624f58280bfc9c73aecadb16bb25571fa709b3b77b039476c01f74c141ddb6_prof);

        
        $__internal_c0b27811971f050eb9906ef55b6d50df34e54a7feb768ce80d73308a6e31cfcc->leave($__internal_c0b27811971f050eb9906ef55b6d50df34e54a7feb768ce80d73308a6e31cfcc_prof);

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
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
