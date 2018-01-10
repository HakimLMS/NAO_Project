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
        $__internal_c874ae08ce57cab9944d278447ce510296d86312dcc51e558a6006df4d264943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c874ae08ce57cab9944d278447ce510296d86312dcc51e558a6006df4d264943->enter($__internal_c874ae08ce57cab9944d278447ce510296d86312dcc51e558a6006df4d264943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3e8a5af6de4d1350599d75c2b3fca0bf3d8ef0fa1749577d2f9cf610a2cd20b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8a5af6de4d1350599d75c2b3fca0bf3d8ef0fa1749577d2f9cf610a2cd20b0->enter($__internal_3e8a5af6de4d1350599d75c2b3fca0bf3d8ef0fa1749577d2f9cf610a2cd20b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c874ae08ce57cab9944d278447ce510296d86312dcc51e558a6006df4d264943->leave($__internal_c874ae08ce57cab9944d278447ce510296d86312dcc51e558a6006df4d264943_prof);

        
        $__internal_3e8a5af6de4d1350599d75c2b3fca0bf3d8ef0fa1749577d2f9cf610a2cd20b0->leave($__internal_3e8a5af6de4d1350599d75c2b3fca0bf3d8ef0fa1749577d2f9cf610a2cd20b0_prof);

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
