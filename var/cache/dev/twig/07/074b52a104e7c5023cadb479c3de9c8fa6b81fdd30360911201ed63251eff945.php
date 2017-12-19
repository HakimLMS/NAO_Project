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
        $__internal_db65746c63f18c98f9fe2ac5d4dd6c9b48ba46f423ca6faf4429032413748a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db65746c63f18c98f9fe2ac5d4dd6c9b48ba46f423ca6faf4429032413748a60->enter($__internal_db65746c63f18c98f9fe2ac5d4dd6c9b48ba46f423ca6faf4429032413748a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_82e25991a003771cf58e46221900001e6680bc12b803b8f6f2283bbc4ffc12eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e25991a003771cf58e46221900001e6680bc12b803b8f6f2283bbc4ffc12eb->enter($__internal_82e25991a003771cf58e46221900001e6680bc12b803b8f6f2283bbc4ffc12eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_db65746c63f18c98f9fe2ac5d4dd6c9b48ba46f423ca6faf4429032413748a60->leave($__internal_db65746c63f18c98f9fe2ac5d4dd6c9b48ba46f423ca6faf4429032413748a60_prof);

        
        $__internal_82e25991a003771cf58e46221900001e6680bc12b803b8f6f2283bbc4ffc12eb->leave($__internal_82e25991a003771cf58e46221900001e6680bc12b803b8f6f2283bbc4ffc12eb_prof);

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
