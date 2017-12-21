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
        $__internal_f353f857c62612fe5df81bb997c435d86c3e3178be9be3efeeba5e0b018f499c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f353f857c62612fe5df81bb997c435d86c3e3178be9be3efeeba5e0b018f499c->enter($__internal_f353f857c62612fe5df81bb997c435d86c3e3178be9be3efeeba5e0b018f499c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8e6066d5fb3c75b8d7c8d7ccb873af2f7d6dac7e01686e49feacf5aff1aced62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6066d5fb3c75b8d7c8d7ccb873af2f7d6dac7e01686e49feacf5aff1aced62->enter($__internal_8e6066d5fb3c75b8d7c8d7ccb873af2f7d6dac7e01686e49feacf5aff1aced62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f353f857c62612fe5df81bb997c435d86c3e3178be9be3efeeba5e0b018f499c->leave($__internal_f353f857c62612fe5df81bb997c435d86c3e3178be9be3efeeba5e0b018f499c_prof);

        
        $__internal_8e6066d5fb3c75b8d7c8d7ccb873af2f7d6dac7e01686e49feacf5aff1aced62->leave($__internal_8e6066d5fb3c75b8d7c8d7ccb873af2f7d6dac7e01686e49feacf5aff1aced62_prof);

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
