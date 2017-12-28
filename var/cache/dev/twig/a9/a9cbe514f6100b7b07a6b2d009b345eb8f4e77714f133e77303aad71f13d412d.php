<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9927e15d5e96a2afdf9bf86a760475c67d0b70de9f3d2f5ec17794a1401e62c1 extends Twig_Template
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
        $__internal_f1584f3d0e21a5ef262c9a20bb5f582b88c1f30dfadbd4ec93d0a4e680156310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1584f3d0e21a5ef262c9a20bb5f582b88c1f30dfadbd4ec93d0a4e680156310->enter($__internal_f1584f3d0e21a5ef262c9a20bb5f582b88c1f30dfadbd4ec93d0a4e680156310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1a1454ceecfa997b155f55a541a52a0737ea0ac9e0be66175f3f074acacaa68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1454ceecfa997b155f55a541a52a0737ea0ac9e0be66175f3f074acacaa68f->enter($__internal_1a1454ceecfa997b155f55a541a52a0737ea0ac9e0be66175f3f074acacaa68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f1584f3d0e21a5ef262c9a20bb5f582b88c1f30dfadbd4ec93d0a4e680156310->leave($__internal_f1584f3d0e21a5ef262c9a20bb5f582b88c1f30dfadbd4ec93d0a4e680156310_prof);

        
        $__internal_1a1454ceecfa997b155f55a541a52a0737ea0ac9e0be66175f3f074acacaa68f->leave($__internal_1a1454ceecfa997b155f55a541a52a0737ea0ac9e0be66175f3f074acacaa68f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
