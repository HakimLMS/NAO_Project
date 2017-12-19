<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f2d58f29dfa6ef85aaa2d861b7edee9deff288dff07879fa21a5741247c6c804 extends Twig_Template
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
        $__internal_14e26b9a9fd1c5d4e40db43ad72e13fdc71e69255449b8ca5f40a5c9eed5bfc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e26b9a9fd1c5d4e40db43ad72e13fdc71e69255449b8ca5f40a5c9eed5bfc0->enter($__internal_14e26b9a9fd1c5d4e40db43ad72e13fdc71e69255449b8ca5f40a5c9eed5bfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c24e8fc35c8737bc3fa092956cb4b31e894042adcdcce7758aa4bc6a94ea14e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24e8fc35c8737bc3fa092956cb4b31e894042adcdcce7758aa4bc6a94ea14e6->enter($__internal_c24e8fc35c8737bc3fa092956cb4b31e894042adcdcce7758aa4bc6a94ea14e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_14e26b9a9fd1c5d4e40db43ad72e13fdc71e69255449b8ca5f40a5c9eed5bfc0->leave($__internal_14e26b9a9fd1c5d4e40db43ad72e13fdc71e69255449b8ca5f40a5c9eed5bfc0_prof);

        
        $__internal_c24e8fc35c8737bc3fa092956cb4b31e894042adcdcce7758aa4bc6a94ea14e6->leave($__internal_c24e8fc35c8737bc3fa092956cb4b31e894042adcdcce7758aa4bc6a94ea14e6_prof);

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
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
