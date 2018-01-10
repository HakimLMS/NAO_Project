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
        $__internal_568fc4f42681f14eef1e235898602cef29d6c5d400d6bffab65945928daf8f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568fc4f42681f14eef1e235898602cef29d6c5d400d6bffab65945928daf8f5d->enter($__internal_568fc4f42681f14eef1e235898602cef29d6c5d400d6bffab65945928daf8f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5125bae6644ac91956b2d4c650536857a1d386c3ab806dd0ef5823868cb8e48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5125bae6644ac91956b2d4c650536857a1d386c3ab806dd0ef5823868cb8e48b->enter($__internal_5125bae6644ac91956b2d4c650536857a1d386c3ab806dd0ef5823868cb8e48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_568fc4f42681f14eef1e235898602cef29d6c5d400d6bffab65945928daf8f5d->leave($__internal_568fc4f42681f14eef1e235898602cef29d6c5d400d6bffab65945928daf8f5d_prof);

        
        $__internal_5125bae6644ac91956b2d4c650536857a1d386c3ab806dd0ef5823868cb8e48b->leave($__internal_5125bae6644ac91956b2d4c650536857a1d386c3ab806dd0ef5823868cb8e48b_prof);

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
