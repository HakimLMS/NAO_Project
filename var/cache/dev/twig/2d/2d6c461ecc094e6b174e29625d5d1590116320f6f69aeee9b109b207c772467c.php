<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_75fa465d4890385095c7a13e9218557ab084e619c3bd9681658371e4b229de04 extends Twig_Template
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
        $__internal_9ccb84ee8f6afec10a45cf30d2a52f9545c07cfbf46ae8aea52b5b58e2c5caf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccb84ee8f6afec10a45cf30d2a52f9545c07cfbf46ae8aea52b5b58e2c5caf1->enter($__internal_9ccb84ee8f6afec10a45cf30d2a52f9545c07cfbf46ae8aea52b5b58e2c5caf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_15b665c38691191c906899bbd365b6052b58dbd9ceda0bdd5da5eb306df21b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b665c38691191c906899bbd365b6052b58dbd9ceda0bdd5da5eb306df21b2d->enter($__internal_15b665c38691191c906899bbd365b6052b58dbd9ceda0bdd5da5eb306df21b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9ccb84ee8f6afec10a45cf30d2a52f9545c07cfbf46ae8aea52b5b58e2c5caf1->leave($__internal_9ccb84ee8f6afec10a45cf30d2a52f9545c07cfbf46ae8aea52b5b58e2c5caf1_prof);

        
        $__internal_15b665c38691191c906899bbd365b6052b58dbd9ceda0bdd5da5eb306df21b2d->leave($__internal_15b665c38691191c906899bbd365b6052b58dbd9ceda0bdd5da5eb306df21b2d_prof);

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
", "@Framework/Form/url_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
