<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_aa78e339e33de094840b0a6929674e6e6a7232e9623bfc8962991eac816a1833 extends Twig_Template
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
        $__internal_f31368a8e1eae550f214ec9896af67258d718f2126b5b28970218ad187ea8930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31368a8e1eae550f214ec9896af67258d718f2126b5b28970218ad187ea8930->enter($__internal_f31368a8e1eae550f214ec9896af67258d718f2126b5b28970218ad187ea8930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8bb0ad985062633db362d0e665f512d0be5f026c1e92f20021ef79239171d7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb0ad985062633db362d0e665f512d0be5f026c1e92f20021ef79239171d7e7->enter($__internal_8bb0ad985062633db362d0e665f512d0be5f026c1e92f20021ef79239171d7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f31368a8e1eae550f214ec9896af67258d718f2126b5b28970218ad187ea8930->leave($__internal_f31368a8e1eae550f214ec9896af67258d718f2126b5b28970218ad187ea8930_prof);

        
        $__internal_8bb0ad985062633db362d0e665f512d0be5f026c1e92f20021ef79239171d7e7->leave($__internal_8bb0ad985062633db362d0e665f512d0be5f026c1e92f20021ef79239171d7e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
