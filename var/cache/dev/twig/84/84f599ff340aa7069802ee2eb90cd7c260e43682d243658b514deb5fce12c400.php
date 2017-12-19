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
        $__internal_ec210e0bf51d19f529c0d023ddc643e855c36a10c7671663794964449d3363c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec210e0bf51d19f529c0d023ddc643e855c36a10c7671663794964449d3363c2->enter($__internal_ec210e0bf51d19f529c0d023ddc643e855c36a10c7671663794964449d3363c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c003a7e4a332dd3955810cdc07c163e8b0fd6e42e3a7aa590faa30f6708339d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c003a7e4a332dd3955810cdc07c163e8b0fd6e42e3a7aa590faa30f6708339d1->enter($__internal_c003a7e4a332dd3955810cdc07c163e8b0fd6e42e3a7aa590faa30f6708339d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ec210e0bf51d19f529c0d023ddc643e855c36a10c7671663794964449d3363c2->leave($__internal_ec210e0bf51d19f529c0d023ddc643e855c36a10c7671663794964449d3363c2_prof);

        
        $__internal_c003a7e4a332dd3955810cdc07c163e8b0fd6e42e3a7aa590faa30f6708339d1->leave($__internal_c003a7e4a332dd3955810cdc07c163e8b0fd6e42e3a7aa590faa30f6708339d1_prof);

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
