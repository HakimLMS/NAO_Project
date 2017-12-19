<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_fa859260f8f33e61847520b60dbe5a544f725e3ceaccc48ae3d7b73b367b318a extends Twig_Template
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
        $__internal_fa537899879ee02193f1c287ca99b0c7753e59a3b9ac8b8c015cdf371dfa5cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa537899879ee02193f1c287ca99b0c7753e59a3b9ac8b8c015cdf371dfa5cc6->enter($__internal_fa537899879ee02193f1c287ca99b0c7753e59a3b9ac8b8c015cdf371dfa5cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_89247962a017d4d842875addebd90e7f0876914887a2f9358889713ae61c8370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89247962a017d4d842875addebd90e7f0876914887a2f9358889713ae61c8370->enter($__internal_89247962a017d4d842875addebd90e7f0876914887a2f9358889713ae61c8370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fa537899879ee02193f1c287ca99b0c7753e59a3b9ac8b8c015cdf371dfa5cc6->leave($__internal_fa537899879ee02193f1c287ca99b0c7753e59a3b9ac8b8c015cdf371dfa5cc6_prof);

        
        $__internal_89247962a017d4d842875addebd90e7f0876914887a2f9358889713ae61c8370->leave($__internal_89247962a017d4d842875addebd90e7f0876914887a2f9358889713ae61c8370_prof);

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
