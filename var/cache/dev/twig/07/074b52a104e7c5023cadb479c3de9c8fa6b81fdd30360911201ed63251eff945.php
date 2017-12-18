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
        $__internal_c009900cde1dd31c2faa04a8d41d65c04dcc2c70531f86df8b60475b9e9b8aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c009900cde1dd31c2faa04a8d41d65c04dcc2c70531f86df8b60475b9e9b8aaf->enter($__internal_c009900cde1dd31c2faa04a8d41d65c04dcc2c70531f86df8b60475b9e9b8aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2b9e4031e8b869177298eda9cc35c0e497b4df99d426f56e87997213ca8f9269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9e4031e8b869177298eda9cc35c0e497b4df99d426f56e87997213ca8f9269->enter($__internal_2b9e4031e8b869177298eda9cc35c0e497b4df99d426f56e87997213ca8f9269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c009900cde1dd31c2faa04a8d41d65c04dcc2c70531f86df8b60475b9e9b8aaf->leave($__internal_c009900cde1dd31c2faa04a8d41d65c04dcc2c70531f86df8b60475b9e9b8aaf_prof);

        
        $__internal_2b9e4031e8b869177298eda9cc35c0e497b4df99d426f56e87997213ca8f9269->leave($__internal_2b9e4031e8b869177298eda9cc35c0e497b4df99d426f56e87997213ca8f9269_prof);

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
", "@Framework/Form/collection_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
