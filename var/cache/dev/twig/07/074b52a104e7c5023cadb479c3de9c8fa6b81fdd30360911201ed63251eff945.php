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
        $__internal_c14d754f7efbc500699217f960d2a547ee0242fa7cd50a65a45cdde4113c1e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14d754f7efbc500699217f960d2a547ee0242fa7cd50a65a45cdde4113c1e27->enter($__internal_c14d754f7efbc500699217f960d2a547ee0242fa7cd50a65a45cdde4113c1e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8e9a65785fc9161eeb28560a865b988b5f0042dd96591e8d9ce06b7c0f83cc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9a65785fc9161eeb28560a865b988b5f0042dd96591e8d9ce06b7c0f83cc3e->enter($__internal_8e9a65785fc9161eeb28560a865b988b5f0042dd96591e8d9ce06b7c0f83cc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c14d754f7efbc500699217f960d2a547ee0242fa7cd50a65a45cdde4113c1e27->leave($__internal_c14d754f7efbc500699217f960d2a547ee0242fa7cd50a65a45cdde4113c1e27_prof);

        
        $__internal_8e9a65785fc9161eeb28560a865b988b5f0042dd96591e8d9ce06b7c0f83cc3e->leave($__internal_8e9a65785fc9161eeb28560a865b988b5f0042dd96591e8d9ce06b7c0f83cc3e_prof);

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
