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
        $__internal_8c7856a7e6cd3460b168399ecc2847d27efd0b70248e3d06739f6fc3f5d6c806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7856a7e6cd3460b168399ecc2847d27efd0b70248e3d06739f6fc3f5d6c806->enter($__internal_8c7856a7e6cd3460b168399ecc2847d27efd0b70248e3d06739f6fc3f5d6c806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_3880465488d89d4af611c534ed684c5ae1d7cba5c624ee367c6f98457b01b96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3880465488d89d4af611c534ed684c5ae1d7cba5c624ee367c6f98457b01b96b->enter($__internal_3880465488d89d4af611c534ed684c5ae1d7cba5c624ee367c6f98457b01b96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8c7856a7e6cd3460b168399ecc2847d27efd0b70248e3d06739f6fc3f5d6c806->leave($__internal_8c7856a7e6cd3460b168399ecc2847d27efd0b70248e3d06739f6fc3f5d6c806_prof);

        
        $__internal_3880465488d89d4af611c534ed684c5ae1d7cba5c624ee367c6f98457b01b96b->leave($__internal_3880465488d89d4af611c534ed684c5ae1d7cba5c624ee367c6f98457b01b96b_prof);

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
