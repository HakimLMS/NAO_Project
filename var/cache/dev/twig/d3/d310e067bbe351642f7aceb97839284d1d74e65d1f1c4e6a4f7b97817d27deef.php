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
        $__internal_e111fec687907be0ff41962c472e5ebd8bfd37b0be688f0e55f77ca453e04a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e111fec687907be0ff41962c472e5ebd8bfd37b0be688f0e55f77ca453e04a32->enter($__internal_e111fec687907be0ff41962c472e5ebd8bfd37b0be688f0e55f77ca453e04a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2b8125f4b7353dfcca4a08263f5e8f1ca377629fbc5fbbbbf9a2f0ab3ba25832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8125f4b7353dfcca4a08263f5e8f1ca377629fbc5fbbbbf9a2f0ab3ba25832->enter($__internal_2b8125f4b7353dfcca4a08263f5e8f1ca377629fbc5fbbbbf9a2f0ab3ba25832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e111fec687907be0ff41962c472e5ebd8bfd37b0be688f0e55f77ca453e04a32->leave($__internal_e111fec687907be0ff41962c472e5ebd8bfd37b0be688f0e55f77ca453e04a32_prof);

        
        $__internal_2b8125f4b7353dfcca4a08263f5e8f1ca377629fbc5fbbbbf9a2f0ab3ba25832->leave($__internal_2b8125f4b7353dfcca4a08263f5e8f1ca377629fbc5fbbbbf9a2f0ab3ba25832_prof);

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
