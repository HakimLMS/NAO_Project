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
        $__internal_cb65f7464b600585a1e23755b9a9cc372f3ffe949319de605a7d31c1f6f08f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb65f7464b600585a1e23755b9a9cc372f3ffe949319de605a7d31c1f6f08f0a->enter($__internal_cb65f7464b600585a1e23755b9a9cc372f3ffe949319de605a7d31c1f6f08f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_17a0fca1806a7828263dffcab9fd3947ba0e1c512f3cc22502df911bb54c1e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a0fca1806a7828263dffcab9fd3947ba0e1c512f3cc22502df911bb54c1e75->enter($__internal_17a0fca1806a7828263dffcab9fd3947ba0e1c512f3cc22502df911bb54c1e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_cb65f7464b600585a1e23755b9a9cc372f3ffe949319de605a7d31c1f6f08f0a->leave($__internal_cb65f7464b600585a1e23755b9a9cc372f3ffe949319de605a7d31c1f6f08f0a_prof);

        
        $__internal_17a0fca1806a7828263dffcab9fd3947ba0e1c512f3cc22502df911bb54c1e75->leave($__internal_17a0fca1806a7828263dffcab9fd3947ba0e1c512f3cc22502df911bb54c1e75_prof);

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
