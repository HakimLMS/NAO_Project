<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a4ef1ff315a5fa70276e5c3bf29c4f6ce6b675723f389dbac3ed2297e138a517 extends Twig_Template
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
        $__internal_cd61e0134bca858f7b4016a7f1e9c9e50c7337fdeb00a09abd16591cb930be41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd61e0134bca858f7b4016a7f1e9c9e50c7337fdeb00a09abd16591cb930be41->enter($__internal_cd61e0134bca858f7b4016a7f1e9c9e50c7337fdeb00a09abd16591cb930be41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d88eeb6cf44e8de1901ca42db17a74dc3d0aa16efc14ffb2af4f05de8375b890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88eeb6cf44e8de1901ca42db17a74dc3d0aa16efc14ffb2af4f05de8375b890->enter($__internal_d88eeb6cf44e8de1901ca42db17a74dc3d0aa16efc14ffb2af4f05de8375b890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_cd61e0134bca858f7b4016a7f1e9c9e50c7337fdeb00a09abd16591cb930be41->leave($__internal_cd61e0134bca858f7b4016a7f1e9c9e50c7337fdeb00a09abd16591cb930be41_prof);

        
        $__internal_d88eeb6cf44e8de1901ca42db17a74dc3d0aa16efc14ffb2af4f05de8375b890->leave($__internal_d88eeb6cf44e8de1901ca42db17a74dc3d0aa16efc14ffb2af4f05de8375b890_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
