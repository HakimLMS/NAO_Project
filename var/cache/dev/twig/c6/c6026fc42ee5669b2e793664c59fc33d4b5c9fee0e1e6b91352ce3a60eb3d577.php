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
        $__internal_289406988cfbac7b0e5fd4adca6d354d675c96af93ec0e14b4eff353356669b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289406988cfbac7b0e5fd4adca6d354d675c96af93ec0e14b4eff353356669b2->enter($__internal_289406988cfbac7b0e5fd4adca6d354d675c96af93ec0e14b4eff353356669b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d3b1002a3cef08fb69902341a3aec4652b37e312dedaec0527a15a4a51719e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b1002a3cef08fb69902341a3aec4652b37e312dedaec0527a15a4a51719e93->enter($__internal_d3b1002a3cef08fb69902341a3aec4652b37e312dedaec0527a15a4a51719e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_289406988cfbac7b0e5fd4adca6d354d675c96af93ec0e14b4eff353356669b2->leave($__internal_289406988cfbac7b0e5fd4adca6d354d675c96af93ec0e14b4eff353356669b2_prof);

        
        $__internal_d3b1002a3cef08fb69902341a3aec4652b37e312dedaec0527a15a4a51719e93->leave($__internal_d3b1002a3cef08fb69902341a3aec4652b37e312dedaec0527a15a4a51719e93_prof);

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
