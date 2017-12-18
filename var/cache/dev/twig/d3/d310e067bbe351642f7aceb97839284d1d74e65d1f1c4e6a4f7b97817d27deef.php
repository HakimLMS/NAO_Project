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
        $__internal_9c4fd0e2ce8bf9d31537211b0d5db6ff01e6348ebc39ab8266e45f16a27dbbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4fd0e2ce8bf9d31537211b0d5db6ff01e6348ebc39ab8266e45f16a27dbbc4->enter($__internal_9c4fd0e2ce8bf9d31537211b0d5db6ff01e6348ebc39ab8266e45f16a27dbbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a242472a0a765dd8c4fc9d053bbc2a238c825d13c374b48bab894b22347a03d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a242472a0a765dd8c4fc9d053bbc2a238c825d13c374b48bab894b22347a03d9->enter($__internal_a242472a0a765dd8c4fc9d053bbc2a238c825d13c374b48bab894b22347a03d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9c4fd0e2ce8bf9d31537211b0d5db6ff01e6348ebc39ab8266e45f16a27dbbc4->leave($__internal_9c4fd0e2ce8bf9d31537211b0d5db6ff01e6348ebc39ab8266e45f16a27dbbc4_prof);

        
        $__internal_a242472a0a765dd8c4fc9d053bbc2a238c825d13c374b48bab894b22347a03d9->leave($__internal_a242472a0a765dd8c4fc9d053bbc2a238c825d13c374b48bab894b22347a03d9_prof);

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
