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
        $__internal_93b8a6ef05f33899d30ae5fe06c252f365de468ace7556fc0f22e0e4dc4177e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b8a6ef05f33899d30ae5fe06c252f365de468ace7556fc0f22e0e4dc4177e8->enter($__internal_93b8a6ef05f33899d30ae5fe06c252f365de468ace7556fc0f22e0e4dc4177e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_92fbb912edf8381164a28d007143b09d0aa5fa391b2428139a33ff16f7ba2773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fbb912edf8381164a28d007143b09d0aa5fa391b2428139a33ff16f7ba2773->enter($__internal_92fbb912edf8381164a28d007143b09d0aa5fa391b2428139a33ff16f7ba2773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_93b8a6ef05f33899d30ae5fe06c252f365de468ace7556fc0f22e0e4dc4177e8->leave($__internal_93b8a6ef05f33899d30ae5fe06c252f365de468ace7556fc0f22e0e4dc4177e8_prof);

        
        $__internal_92fbb912edf8381164a28d007143b09d0aa5fa391b2428139a33ff16f7ba2773->leave($__internal_92fbb912edf8381164a28d007143b09d0aa5fa391b2428139a33ff16f7ba2773_prof);

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
