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
        $__internal_82a78cfeb99766a9406d36e0c8805445a78766c7b0ad27afeba2f836f66a12e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a78cfeb99766a9406d36e0c8805445a78766c7b0ad27afeba2f836f66a12e2->enter($__internal_82a78cfeb99766a9406d36e0c8805445a78766c7b0ad27afeba2f836f66a12e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_99aa48e3f4591713ce22c12d163d99861e6736cd215fb525f4fdd7b68f37e403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99aa48e3f4591713ce22c12d163d99861e6736cd215fb525f4fdd7b68f37e403->enter($__internal_99aa48e3f4591713ce22c12d163d99861e6736cd215fb525f4fdd7b68f37e403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_82a78cfeb99766a9406d36e0c8805445a78766c7b0ad27afeba2f836f66a12e2->leave($__internal_82a78cfeb99766a9406d36e0c8805445a78766c7b0ad27afeba2f836f66a12e2_prof);

        
        $__internal_99aa48e3f4591713ce22c12d163d99861e6736cd215fb525f4fdd7b68f37e403->leave($__internal_99aa48e3f4591713ce22c12d163d99861e6736cd215fb525f4fdd7b68f37e403_prof);

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
