<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e4b3ae1c64899f7845e234bbf0396b68377ded4f49bc0fc844c6c736c78980e2 extends Twig_Template
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
        $__internal_1639e607bf39d8e1fa1222ec1800d7534d668cfaafbca716c48c4538efbff24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1639e607bf39d8e1fa1222ec1800d7534d668cfaafbca716c48c4538efbff24f->enter($__internal_1639e607bf39d8e1fa1222ec1800d7534d668cfaafbca716c48c4538efbff24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f687f24f5ede28bf673f358d3c1d6128a041d6b4507a6b5eeb61ba1c395cca77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f687f24f5ede28bf673f358d3c1d6128a041d6b4507a6b5eeb61ba1c395cca77->enter($__internal_f687f24f5ede28bf673f358d3c1d6128a041d6b4507a6b5eeb61ba1c395cca77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1639e607bf39d8e1fa1222ec1800d7534d668cfaafbca716c48c4538efbff24f->leave($__internal_1639e607bf39d8e1fa1222ec1800d7534d668cfaafbca716c48c4538efbff24f_prof);

        
        $__internal_f687f24f5ede28bf673f358d3c1d6128a041d6b4507a6b5eeb61ba1c395cca77->leave($__internal_f687f24f5ede28bf673f358d3c1d6128a041d6b4507a6b5eeb61ba1c395cca77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
