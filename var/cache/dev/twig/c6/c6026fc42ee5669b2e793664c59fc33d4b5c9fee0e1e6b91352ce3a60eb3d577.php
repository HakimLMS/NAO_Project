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
        $__internal_eac37e7927f75b72b1a149261b00624e08d0e0c0f6e1aed6a5ca091544050572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac37e7927f75b72b1a149261b00624e08d0e0c0f6e1aed6a5ca091544050572->enter($__internal_eac37e7927f75b72b1a149261b00624e08d0e0c0f6e1aed6a5ca091544050572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7398b7f3a72d31e1d0af71a4edc628656cc60ac07368304af9618e8a73884c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7398b7f3a72d31e1d0af71a4edc628656cc60ac07368304af9618e8a73884c19->enter($__internal_7398b7f3a72d31e1d0af71a4edc628656cc60ac07368304af9618e8a73884c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_eac37e7927f75b72b1a149261b00624e08d0e0c0f6e1aed6a5ca091544050572->leave($__internal_eac37e7927f75b72b1a149261b00624e08d0e0c0f6e1aed6a5ca091544050572_prof);

        
        $__internal_7398b7f3a72d31e1d0af71a4edc628656cc60ac07368304af9618e8a73884c19->leave($__internal_7398b7f3a72d31e1d0af71a4edc628656cc60ac07368304af9618e8a73884c19_prof);

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
