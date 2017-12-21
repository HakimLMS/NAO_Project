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
        $__internal_686c1326ebe3ff411d8069292c8696bb42850b09e9d2d168979555fc710febcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686c1326ebe3ff411d8069292c8696bb42850b09e9d2d168979555fc710febcf->enter($__internal_686c1326ebe3ff411d8069292c8696bb42850b09e9d2d168979555fc710febcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_da707ec1d61fc29d7412d93378c4e0b7285ef0267548d43351d72b0a942c3fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da707ec1d61fc29d7412d93378c4e0b7285ef0267548d43351d72b0a942c3fd6->enter($__internal_da707ec1d61fc29d7412d93378c4e0b7285ef0267548d43351d72b0a942c3fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_686c1326ebe3ff411d8069292c8696bb42850b09e9d2d168979555fc710febcf->leave($__internal_686c1326ebe3ff411d8069292c8696bb42850b09e9d2d168979555fc710febcf_prof);

        
        $__internal_da707ec1d61fc29d7412d93378c4e0b7285ef0267548d43351d72b0a942c3fd6->leave($__internal_da707ec1d61fc29d7412d93378c4e0b7285ef0267548d43351d72b0a942c3fd6_prof);

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
