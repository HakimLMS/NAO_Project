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
        $__internal_f94534966306fbbbb82c1b51c612a3a8eef60839fa427c8d0501114fd176efdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f94534966306fbbbb82c1b51c612a3a8eef60839fa427c8d0501114fd176efdf->enter($__internal_f94534966306fbbbb82c1b51c612a3a8eef60839fa427c8d0501114fd176efdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_6edc5e0dfff038e6f103e539edd6811f32d891ae7a8a276342c4d3bf21dd1239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6edc5e0dfff038e6f103e539edd6811f32d891ae7a8a276342c4d3bf21dd1239->enter($__internal_6edc5e0dfff038e6f103e539edd6811f32d891ae7a8a276342c4d3bf21dd1239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f94534966306fbbbb82c1b51c612a3a8eef60839fa427c8d0501114fd176efdf->leave($__internal_f94534966306fbbbb82c1b51c612a3a8eef60839fa427c8d0501114fd176efdf_prof);

        
        $__internal_6edc5e0dfff038e6f103e539edd6811f32d891ae7a8a276342c4d3bf21dd1239->leave($__internal_6edc5e0dfff038e6f103e539edd6811f32d891ae7a8a276342c4d3bf21dd1239_prof);

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
