<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_80d02f63201924a459e27289518963361ddd8007a9bf00e607f14050e743b37a extends Twig_Template
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
        $__internal_f88efc1c11e4b4c133135edc9f42a3aa2f8e685a89d037c97c9ea593f42f9ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88efc1c11e4b4c133135edc9f42a3aa2f8e685a89d037c97c9ea593f42f9ae2->enter($__internal_f88efc1c11e4b4c133135edc9f42a3aa2f8e685a89d037c97c9ea593f42f9ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_00da46e9432871868f173e5de07fa2b159c1cd064ae9ca131f6aad9fe9b85487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00da46e9432871868f173e5de07fa2b159c1cd064ae9ca131f6aad9fe9b85487->enter($__internal_00da46e9432871868f173e5de07fa2b159c1cd064ae9ca131f6aad9fe9b85487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f88efc1c11e4b4c133135edc9f42a3aa2f8e685a89d037c97c9ea593f42f9ae2->leave($__internal_f88efc1c11e4b4c133135edc9f42a3aa2f8e685a89d037c97c9ea593f42f9ae2_prof);

        
        $__internal_00da46e9432871868f173e5de07fa2b159c1cd064ae9ca131f6aad9fe9b85487->leave($__internal_00da46e9432871868f173e5de07fa2b159c1cd064ae9ca131f6aad9fe9b85487_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
