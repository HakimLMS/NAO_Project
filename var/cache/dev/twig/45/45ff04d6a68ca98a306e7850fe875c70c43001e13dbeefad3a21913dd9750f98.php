<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_003e0f0140e53be7130c206136732ad1856f9e32c0bc3dc81ef76081c77eca30 extends Twig_Template
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
        $__internal_4bb6a21f0233f4b0c3f4815fc76122bb4341c1a4f26ce729d36736561e426daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb6a21f0233f4b0c3f4815fc76122bb4341c1a4f26ce729d36736561e426daf->enter($__internal_4bb6a21f0233f4b0c3f4815fc76122bb4341c1a4f26ce729d36736561e426daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d60252e55d4a7cd148b00ef8ecfa93a44881890c660f48d01a6fddc5b9834aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60252e55d4a7cd148b00ef8ecfa93a44881890c660f48d01a6fddc5b9834aff->enter($__internal_d60252e55d4a7cd148b00ef8ecfa93a44881890c660f48d01a6fddc5b9834aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4bb6a21f0233f4b0c3f4815fc76122bb4341c1a4f26ce729d36736561e426daf->leave($__internal_4bb6a21f0233f4b0c3f4815fc76122bb4341c1a4f26ce729d36736561e426daf_prof);

        
        $__internal_d60252e55d4a7cd148b00ef8ecfa93a44881890c660f48d01a6fddc5b9834aff->leave($__internal_d60252e55d4a7cd148b00ef8ecfa93a44881890c660f48d01a6fddc5b9834aff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
