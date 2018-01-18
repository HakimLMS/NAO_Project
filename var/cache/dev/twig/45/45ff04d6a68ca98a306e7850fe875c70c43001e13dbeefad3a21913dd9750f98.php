<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_003e0f0140e53be7130c206136732ad1856f9e32c0bc3dc81ef76081c77eca30 extends Twig_Template
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
        $__internal_43b1343e1a8c77f44c1a30adcc5d49dea842ec2188d13b0733452cc90bc199ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b1343e1a8c77f44c1a30adcc5d49dea842ec2188d13b0733452cc90bc199ca->enter($__internal_43b1343e1a8c77f44c1a30adcc5d49dea842ec2188d13b0733452cc90bc199ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_32e90a15785d5dc52df66fbe307d5ea7bc42c8d0e292dff4c52e618387c5b86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e90a15785d5dc52df66fbe307d5ea7bc42c8d0e292dff4c52e618387c5b86b->enter($__internal_32e90a15785d5dc52df66fbe307d5ea7bc42c8d0e292dff4c52e618387c5b86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_43b1343e1a8c77f44c1a30adcc5d49dea842ec2188d13b0733452cc90bc199ca->leave($__internal_43b1343e1a8c77f44c1a30adcc5d49dea842ec2188d13b0733452cc90bc199ca_prof);

        
        $__internal_32e90a15785d5dc52df66fbe307d5ea7bc42c8d0e292dff4c52e618387c5b86b->leave($__internal_32e90a15785d5dc52df66fbe307d5ea7bc42c8d0e292dff4c52e618387c5b86b_prof);

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
