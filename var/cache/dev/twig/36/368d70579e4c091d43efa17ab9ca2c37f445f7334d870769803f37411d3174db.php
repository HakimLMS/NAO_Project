<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3a9c3e8d977c37532f13c91841dc4e9aac51245b9a714c7fad283b42eec59b01 extends Twig_Template
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
        $__internal_ebc7581654e5a5dec54e92789bd40a9e72b26598753a0069a8ea8974ab459e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc7581654e5a5dec54e92789bd40a9e72b26598753a0069a8ea8974ab459e9d->enter($__internal_ebc7581654e5a5dec54e92789bd40a9e72b26598753a0069a8ea8974ab459e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_eca67479b8903a0137da114567f323879deccf8829f12f315128c99c0f135f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca67479b8903a0137da114567f323879deccf8829f12f315128c99c0f135f1f->enter($__internal_eca67479b8903a0137da114567f323879deccf8829f12f315128c99c0f135f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ebc7581654e5a5dec54e92789bd40a9e72b26598753a0069a8ea8974ab459e9d->leave($__internal_ebc7581654e5a5dec54e92789bd40a9e72b26598753a0069a8ea8974ab459e9d_prof);

        
        $__internal_eca67479b8903a0137da114567f323879deccf8829f12f315128c99c0f135f1f->leave($__internal_eca67479b8903a0137da114567f323879deccf8829f12f315128c99c0f135f1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
