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
        $__internal_5bc5e197a4ccb8093c46d58da0c707adc15831c79cc2f4c6f764c027d8366de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc5e197a4ccb8093c46d58da0c707adc15831c79cc2f4c6f764c027d8366de7->enter($__internal_5bc5e197a4ccb8093c46d58da0c707adc15831c79cc2f4c6f764c027d8366de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_68042ee5fc083382e4d1c7961b25b5f9d2cfae5ad28fac115f56b78968cebe95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68042ee5fc083382e4d1c7961b25b5f9d2cfae5ad28fac115f56b78968cebe95->enter($__internal_68042ee5fc083382e4d1c7961b25b5f9d2cfae5ad28fac115f56b78968cebe95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5bc5e197a4ccb8093c46d58da0c707adc15831c79cc2f4c6f764c027d8366de7->leave($__internal_5bc5e197a4ccb8093c46d58da0c707adc15831c79cc2f4c6f764c027d8366de7_prof);

        
        $__internal_68042ee5fc083382e4d1c7961b25b5f9d2cfae5ad28fac115f56b78968cebe95->leave($__internal_68042ee5fc083382e4d1c7961b25b5f9d2cfae5ad28fac115f56b78968cebe95_prof);

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
