<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3741b9de6cd1e4bc7140b3204a4b0d242ad6843666c9367c068344487fc3574a extends Twig_Template
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
        $__internal_c4e714d1acb25e7bced95855c8c6f0610c299cf395414be6415786d076c6536b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e714d1acb25e7bced95855c8c6f0610c299cf395414be6415786d076c6536b->enter($__internal_c4e714d1acb25e7bced95855c8c6f0610c299cf395414be6415786d076c6536b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_4d3077fd7a2d8a0fd9f537e9a9d3e2bc0f8a18b5b5d5cb8f5381d6def507dfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3077fd7a2d8a0fd9f537e9a9d3e2bc0f8a18b5b5d5cb8f5381d6def507dfb0->enter($__internal_4d3077fd7a2d8a0fd9f537e9a9d3e2bc0f8a18b5b5d5cb8f5381d6def507dfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c4e714d1acb25e7bced95855c8c6f0610c299cf395414be6415786d076c6536b->leave($__internal_c4e714d1acb25e7bced95855c8c6f0610c299cf395414be6415786d076c6536b_prof);

        
        $__internal_4d3077fd7a2d8a0fd9f537e9a9d3e2bc0f8a18b5b5d5cb8f5381d6def507dfb0->leave($__internal_4d3077fd7a2d8a0fd9f537e9a9d3e2bc0f8a18b5b5d5cb8f5381d6def507dfb0_prof);

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
