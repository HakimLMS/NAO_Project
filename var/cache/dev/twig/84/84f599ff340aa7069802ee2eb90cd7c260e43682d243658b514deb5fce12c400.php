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
        $__internal_a839f64556565c5d99be581f237bdb69cdbbe74ffae206098590538bc8e49d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a839f64556565c5d99be581f237bdb69cdbbe74ffae206098590538bc8e49d74->enter($__internal_a839f64556565c5d99be581f237bdb69cdbbe74ffae206098590538bc8e49d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b361e9747fa04ef0371712141084757a7b23da4a1fa0911e81598588eabd33a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b361e9747fa04ef0371712141084757a7b23da4a1fa0911e81598588eabd33a3->enter($__internal_b361e9747fa04ef0371712141084757a7b23da4a1fa0911e81598588eabd33a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a839f64556565c5d99be581f237bdb69cdbbe74ffae206098590538bc8e49d74->leave($__internal_a839f64556565c5d99be581f237bdb69cdbbe74ffae206098590538bc8e49d74_prof);

        
        $__internal_b361e9747fa04ef0371712141084757a7b23da4a1fa0911e81598588eabd33a3->leave($__internal_b361e9747fa04ef0371712141084757a7b23da4a1fa0911e81598588eabd33a3_prof);

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
