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
        $__internal_68ad823f2ae168e5f87a018b6a162af15083f8af9f941d1b78f3a47b7ad79f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ad823f2ae168e5f87a018b6a162af15083f8af9f941d1b78f3a47b7ad79f09->enter($__internal_68ad823f2ae168e5f87a018b6a162af15083f8af9f941d1b78f3a47b7ad79f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2674638d227898981be87fa9ccbad8109ef25dfe4d84ef47152477494addf693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2674638d227898981be87fa9ccbad8109ef25dfe4d84ef47152477494addf693->enter($__internal_2674638d227898981be87fa9ccbad8109ef25dfe4d84ef47152477494addf693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_68ad823f2ae168e5f87a018b6a162af15083f8af9f941d1b78f3a47b7ad79f09->leave($__internal_68ad823f2ae168e5f87a018b6a162af15083f8af9f941d1b78f3a47b7ad79f09_prof);

        
        $__internal_2674638d227898981be87fa9ccbad8109ef25dfe4d84ef47152477494addf693->leave($__internal_2674638d227898981be87fa9ccbad8109ef25dfe4d84ef47152477494addf693_prof);

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
