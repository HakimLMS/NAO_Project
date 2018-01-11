<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9befff9c36ecb304a16f585a30c19f1a4d025f7481da052bc428276aea79cb57 extends Twig_Template
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
        $__internal_a948f00b52fcb9f33bb3d5e876f9c6f97df75d6973756cde39181d98fc84fe30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a948f00b52fcb9f33bb3d5e876f9c6f97df75d6973756cde39181d98fc84fe30->enter($__internal_a948f00b52fcb9f33bb3d5e876f9c6f97df75d6973756cde39181d98fc84fe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ca34479089aa36c88b1ffefd9abccd2ad4dedeaa22c482bc6a0acd595ce0e4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca34479089aa36c88b1ffefd9abccd2ad4dedeaa22c482bc6a0acd595ce0e4ae->enter($__internal_ca34479089aa36c88b1ffefd9abccd2ad4dedeaa22c482bc6a0acd595ce0e4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a948f00b52fcb9f33bb3d5e876f9c6f97df75d6973756cde39181d98fc84fe30->leave($__internal_a948f00b52fcb9f33bb3d5e876f9c6f97df75d6973756cde39181d98fc84fe30_prof);

        
        $__internal_ca34479089aa36c88b1ffefd9abccd2ad4dedeaa22c482bc6a0acd595ce0e4ae->leave($__internal_ca34479089aa36c88b1ffefd9abccd2ad4dedeaa22c482bc6a0acd595ce0e4ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
