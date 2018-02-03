<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2a712492e610c8ebdadeb612d8ecf38b0edfe42ba2bbce37be44f9f49de92d11 extends Twig_Template
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
        $__internal_362754b7141ed4a2d48c4d728c467821e4a3b13e87ae8f3eeaf56979082eb7dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362754b7141ed4a2d48c4d728c467821e4a3b13e87ae8f3eeaf56979082eb7dd->enter($__internal_362754b7141ed4a2d48c4d728c467821e4a3b13e87ae8f3eeaf56979082eb7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_bcb3ebe08ed8b854b5245c66b1f721323eac4d044f355c12775e24895e206219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb3ebe08ed8b854b5245c66b1f721323eac4d044f355c12775e24895e206219->enter($__internal_bcb3ebe08ed8b854b5245c66b1f721323eac4d044f355c12775e24895e206219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_362754b7141ed4a2d48c4d728c467821e4a3b13e87ae8f3eeaf56979082eb7dd->leave($__internal_362754b7141ed4a2d48c4d728c467821e4a3b13e87ae8f3eeaf56979082eb7dd_prof);

        
        $__internal_bcb3ebe08ed8b854b5245c66b1f721323eac4d044f355c12775e24895e206219->leave($__internal_bcb3ebe08ed8b854b5245c66b1f721323eac4d044f355c12775e24895e206219_prof);

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
