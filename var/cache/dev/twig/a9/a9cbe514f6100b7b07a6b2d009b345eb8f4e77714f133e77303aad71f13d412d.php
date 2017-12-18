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
        $__internal_419422f4848dbd3806d7753f27df732cee48a0b881b55a5f86eaf404eec6fe8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419422f4848dbd3806d7753f27df732cee48a0b881b55a5f86eaf404eec6fe8d->enter($__internal_419422f4848dbd3806d7753f27df732cee48a0b881b55a5f86eaf404eec6fe8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_cb868ad64fcfed579ade2dd6140be6a3181bfeedfb0cb6ff71ad7c656d0027e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb868ad64fcfed579ade2dd6140be6a3181bfeedfb0cb6ff71ad7c656d0027e8->enter($__internal_cb868ad64fcfed579ade2dd6140be6a3181bfeedfb0cb6ff71ad7c656d0027e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_419422f4848dbd3806d7753f27df732cee48a0b881b55a5f86eaf404eec6fe8d->leave($__internal_419422f4848dbd3806d7753f27df732cee48a0b881b55a5f86eaf404eec6fe8d_prof);

        
        $__internal_cb868ad64fcfed579ade2dd6140be6a3181bfeedfb0cb6ff71ad7c656d0027e8->leave($__internal_cb868ad64fcfed579ade2dd6140be6a3181bfeedfb0cb6ff71ad7c656d0027e8_prof);

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
