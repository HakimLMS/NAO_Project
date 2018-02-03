<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_75fa465d4890385095c7a13e9218557ab084e619c3bd9681658371e4b229de04 extends Twig_Template
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
        $__internal_b6e2261705551bc0a61b63206940060d9c575a1d10fa0e0631df300f2ea8faaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e2261705551bc0a61b63206940060d9c575a1d10fa0e0631df300f2ea8faaa->enter($__internal_b6e2261705551bc0a61b63206940060d9c575a1d10fa0e0631df300f2ea8faaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1605ac2063ac10c6938c75e88c53dac24a33b30d932faa511c36c83efd0a56aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1605ac2063ac10c6938c75e88c53dac24a33b30d932faa511c36c83efd0a56aa->enter($__internal_1605ac2063ac10c6938c75e88c53dac24a33b30d932faa511c36c83efd0a56aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b6e2261705551bc0a61b63206940060d9c575a1d10fa0e0631df300f2ea8faaa->leave($__internal_b6e2261705551bc0a61b63206940060d9c575a1d10fa0e0631df300f2ea8faaa_prof);

        
        $__internal_1605ac2063ac10c6938c75e88c53dac24a33b30d932faa511c36c83efd0a56aa->leave($__internal_1605ac2063ac10c6938c75e88c53dac24a33b30d932faa511c36c83efd0a56aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
