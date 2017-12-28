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
        $__internal_de4467542403f27ec6a172e338d1eb89bf3d19ad99e93a25e090771201b912b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de4467542403f27ec6a172e338d1eb89bf3d19ad99e93a25e090771201b912b9->enter($__internal_de4467542403f27ec6a172e338d1eb89bf3d19ad99e93a25e090771201b912b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_65381c684ccfbb3bf4bb77a931a0b273284e324230bd52d2c8df325f24940556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65381c684ccfbb3bf4bb77a931a0b273284e324230bd52d2c8df325f24940556->enter($__internal_65381c684ccfbb3bf4bb77a931a0b273284e324230bd52d2c8df325f24940556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_de4467542403f27ec6a172e338d1eb89bf3d19ad99e93a25e090771201b912b9->leave($__internal_de4467542403f27ec6a172e338d1eb89bf3d19ad99e93a25e090771201b912b9_prof);

        
        $__internal_65381c684ccfbb3bf4bb77a931a0b273284e324230bd52d2c8df325f24940556->leave($__internal_65381c684ccfbb3bf4bb77a931a0b273284e324230bd52d2c8df325f24940556_prof);

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
