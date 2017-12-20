<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9e417e9835b218452b31ba26cda5119878fa069c4b19d64c052d3b64f8f99f41 extends Twig_Template
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
        $__internal_a1607b604c0eecd98f0cbb8c932e6c942ca43fde6b2a2e650e81d14b37cd9faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1607b604c0eecd98f0cbb8c932e6c942ca43fde6b2a2e650e81d14b37cd9faa->enter($__internal_a1607b604c0eecd98f0cbb8c932e6c942ca43fde6b2a2e650e81d14b37cd9faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6e16fbe529fbca396ef5e0e6943dafac25416930d0011ad72feaf0e5c468a5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e16fbe529fbca396ef5e0e6943dafac25416930d0011ad72feaf0e5c468a5d3->enter($__internal_6e16fbe529fbca396ef5e0e6943dafac25416930d0011ad72feaf0e5c468a5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a1607b604c0eecd98f0cbb8c932e6c942ca43fde6b2a2e650e81d14b37cd9faa->leave($__internal_a1607b604c0eecd98f0cbb8c932e6c942ca43fde6b2a2e650e81d14b37cd9faa_prof);

        
        $__internal_6e16fbe529fbca396ef5e0e6943dafac25416930d0011ad72feaf0e5c468a5d3->leave($__internal_6e16fbe529fbca396ef5e0e6943dafac25416930d0011ad72feaf0e5c468a5d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
