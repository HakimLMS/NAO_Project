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
        $__internal_0d19c58a195f7595d8bf2c16737c3232d946b7f6ee113e9bf8a258974a8c99df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d19c58a195f7595d8bf2c16737c3232d946b7f6ee113e9bf8a258974a8c99df->enter($__internal_0d19c58a195f7595d8bf2c16737c3232d946b7f6ee113e9bf8a258974a8c99df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0e9149d713a3d53d123840838b2b812393f87051d2d71dc9cfc106574258e29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9149d713a3d53d123840838b2b812393f87051d2d71dc9cfc106574258e29e->enter($__internal_0e9149d713a3d53d123840838b2b812393f87051d2d71dc9cfc106574258e29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0d19c58a195f7595d8bf2c16737c3232d946b7f6ee113e9bf8a258974a8c99df->leave($__internal_0d19c58a195f7595d8bf2c16737c3232d946b7f6ee113e9bf8a258974a8c99df_prof);

        
        $__internal_0e9149d713a3d53d123840838b2b812393f87051d2d71dc9cfc106574258e29e->leave($__internal_0e9149d713a3d53d123840838b2b812393f87051d2d71dc9cfc106574258e29e_prof);

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
