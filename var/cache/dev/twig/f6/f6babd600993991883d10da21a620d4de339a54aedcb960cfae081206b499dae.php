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
        $__internal_7b308461023e5e3eda28ad7d4ae2b826e616c3a8fa9fd36d1b6d608885146541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b308461023e5e3eda28ad7d4ae2b826e616c3a8fa9fd36d1b6d608885146541->enter($__internal_7b308461023e5e3eda28ad7d4ae2b826e616c3a8fa9fd36d1b6d608885146541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d3f31ce6427248df31f8bcb5e210f33b56b137c724576aff5bc395648ce4173d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f31ce6427248df31f8bcb5e210f33b56b137c724576aff5bc395648ce4173d->enter($__internal_d3f31ce6427248df31f8bcb5e210f33b56b137c724576aff5bc395648ce4173d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7b308461023e5e3eda28ad7d4ae2b826e616c3a8fa9fd36d1b6d608885146541->leave($__internal_7b308461023e5e3eda28ad7d4ae2b826e616c3a8fa9fd36d1b6d608885146541_prof);

        
        $__internal_d3f31ce6427248df31f8bcb5e210f33b56b137c724576aff5bc395648ce4173d->leave($__internal_d3f31ce6427248df31f8bcb5e210f33b56b137c724576aff5bc395648ce4173d_prof);

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
