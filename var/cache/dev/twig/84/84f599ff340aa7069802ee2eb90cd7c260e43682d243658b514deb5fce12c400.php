<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4405ed7a96c20fae48611ac333110ee1a08da1d31b1b224acf6fbf8fab85210a extends Twig_Template
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
        $__internal_666c09c0efb42a651f96edfabe10e4427ac6c4025adfaa8dbdd522d8c2cd6ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666c09c0efb42a651f96edfabe10e4427ac6c4025adfaa8dbdd522d8c2cd6ca1->enter($__internal_666c09c0efb42a651f96edfabe10e4427ac6c4025adfaa8dbdd522d8c2cd6ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fb04b696a60b358f3b3c352c19ce9a7593a9e23ea78f30850866bff608b94547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb04b696a60b358f3b3c352c19ce9a7593a9e23ea78f30850866bff608b94547->enter($__internal_fb04b696a60b358f3b3c352c19ce9a7593a9e23ea78f30850866bff608b94547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_666c09c0efb42a651f96edfabe10e4427ac6c4025adfaa8dbdd522d8c2cd6ca1->leave($__internal_666c09c0efb42a651f96edfabe10e4427ac6c4025adfaa8dbdd522d8c2cd6ca1_prof);

        
        $__internal_fb04b696a60b358f3b3c352c19ce9a7593a9e23ea78f30850866bff608b94547->leave($__internal_fb04b696a60b358f3b3c352c19ce9a7593a9e23ea78f30850866bff608b94547_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
