<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2b648f8a55138f24463339b839bf659b1d8c8632e2d50760a7f9cc8301ab65fd extends Twig_Template
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
        $__internal_a7eec8340df2bd2d807681f4ad4f5595dab43dc67d1ce8975a2667ff8f0ae294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7eec8340df2bd2d807681f4ad4f5595dab43dc67d1ce8975a2667ff8f0ae294->enter($__internal_a7eec8340df2bd2d807681f4ad4f5595dab43dc67d1ce8975a2667ff8f0ae294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ad52e0897439ae6238a1e43b261b1201094833b514973bd765dedf894d0b2f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad52e0897439ae6238a1e43b261b1201094833b514973bd765dedf894d0b2f2c->enter($__internal_ad52e0897439ae6238a1e43b261b1201094833b514973bd765dedf894d0b2f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a7eec8340df2bd2d807681f4ad4f5595dab43dc67d1ce8975a2667ff8f0ae294->leave($__internal_a7eec8340df2bd2d807681f4ad4f5595dab43dc67d1ce8975a2667ff8f0ae294_prof);

        
        $__internal_ad52e0897439ae6238a1e43b261b1201094833b514973bd765dedf894d0b2f2c->leave($__internal_ad52e0897439ae6238a1e43b261b1201094833b514973bd765dedf894d0b2f2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
