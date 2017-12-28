<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_87dd8a5fa973cccffc6c518901a6877f3058045d699583ca5466004d6d6376a8 extends Twig_Template
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
        $__internal_6e3f3e79713f900862daeeb4ea5fc764b334d514e3694e57a5c97480e59ca918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3f3e79713f900862daeeb4ea5fc764b334d514e3694e57a5c97480e59ca918->enter($__internal_6e3f3e79713f900862daeeb4ea5fc764b334d514e3694e57a5c97480e59ca918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_0c0f87d83762543b46dbfc408b58300cbff0575c1c7e2410dcdd50925d0893e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0f87d83762543b46dbfc408b58300cbff0575c1c7e2410dcdd50925d0893e5->enter($__internal_0c0f87d83762543b46dbfc408b58300cbff0575c1c7e2410dcdd50925d0893e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6e3f3e79713f900862daeeb4ea5fc764b334d514e3694e57a5c97480e59ca918->leave($__internal_6e3f3e79713f900862daeeb4ea5fc764b334d514e3694e57a5c97480e59ca918_prof);

        
        $__internal_0c0f87d83762543b46dbfc408b58300cbff0575c1c7e2410dcdd50925d0893e5->leave($__internal_0c0f87d83762543b46dbfc408b58300cbff0575c1c7e2410dcdd50925d0893e5_prof);

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
