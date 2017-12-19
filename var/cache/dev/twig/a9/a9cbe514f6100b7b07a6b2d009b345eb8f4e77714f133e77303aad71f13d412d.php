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
        $__internal_329d010d0fc8fc7be76d7cbadd187453c1ee423afda3f6b21f42615e2930150b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329d010d0fc8fc7be76d7cbadd187453c1ee423afda3f6b21f42615e2930150b->enter($__internal_329d010d0fc8fc7be76d7cbadd187453c1ee423afda3f6b21f42615e2930150b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_21765d1169eba54316666e2068db12b86e1d4cbe066e5eafdff70b74674978df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21765d1169eba54316666e2068db12b86e1d4cbe066e5eafdff70b74674978df->enter($__internal_21765d1169eba54316666e2068db12b86e1d4cbe066e5eafdff70b74674978df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_329d010d0fc8fc7be76d7cbadd187453c1ee423afda3f6b21f42615e2930150b->leave($__internal_329d010d0fc8fc7be76d7cbadd187453c1ee423afda3f6b21f42615e2930150b_prof);

        
        $__internal_21765d1169eba54316666e2068db12b86e1d4cbe066e5eafdff70b74674978df->leave($__internal_21765d1169eba54316666e2068db12b86e1d4cbe066e5eafdff70b74674978df_prof);

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
", "@Framework/Form/textarea_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
