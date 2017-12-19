<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_73a0cab12b70b9c06ff7be7a6bd319772a39b28fd59a29532e966fc83b2cc1cb extends Twig_Template
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
        $__internal_0e7619e3c8bde168a60824598ac47b17950b81650605c3a7ad7fe61aaa105d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7619e3c8bde168a60824598ac47b17950b81650605c3a7ad7fe61aaa105d89->enter($__internal_0e7619e3c8bde168a60824598ac47b17950b81650605c3a7ad7fe61aaa105d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e2b1479afb6dd1fc623dff6f9f85ebe7d0500d21e40210d1a9f6608e5c3f5b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b1479afb6dd1fc623dff6f9f85ebe7d0500d21e40210d1a9f6608e5c3f5b08->enter($__internal_e2b1479afb6dd1fc623dff6f9f85ebe7d0500d21e40210d1a9f6608e5c3f5b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0e7619e3c8bde168a60824598ac47b17950b81650605c3a7ad7fe61aaa105d89->leave($__internal_0e7619e3c8bde168a60824598ac47b17950b81650605c3a7ad7fe61aaa105d89_prof);

        
        $__internal_e2b1479afb6dd1fc623dff6f9f85ebe7d0500d21e40210d1a9f6608e5c3f5b08->leave($__internal_e2b1479afb6dd1fc623dff6f9f85ebe7d0500d21e40210d1a9f6608e5c3f5b08_prof);

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
", "@Framework/Form/email_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
