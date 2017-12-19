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
        $__internal_e55e20e4d904b35d200e1b3c51366f9bb70963a8dec8215d34bf5a7e07b64d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55e20e4d904b35d200e1b3c51366f9bb70963a8dec8215d34bf5a7e07b64d89->enter($__internal_e55e20e4d904b35d200e1b3c51366f9bb70963a8dec8215d34bf5a7e07b64d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0bbdbb6581c37f098389707fefeb5dddb9e5b83089768634db39ed0ddda119e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbdbb6581c37f098389707fefeb5dddb9e5b83089768634db39ed0ddda119e3->enter($__internal_0bbdbb6581c37f098389707fefeb5dddb9e5b83089768634db39ed0ddda119e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e55e20e4d904b35d200e1b3c51366f9bb70963a8dec8215d34bf5a7e07b64d89->leave($__internal_e55e20e4d904b35d200e1b3c51366f9bb70963a8dec8215d34bf5a7e07b64d89_prof);

        
        $__internal_0bbdbb6581c37f098389707fefeb5dddb9e5b83089768634db39ed0ddda119e3->leave($__internal_0bbdbb6581c37f098389707fefeb5dddb9e5b83089768634db39ed0ddda119e3_prof);

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
