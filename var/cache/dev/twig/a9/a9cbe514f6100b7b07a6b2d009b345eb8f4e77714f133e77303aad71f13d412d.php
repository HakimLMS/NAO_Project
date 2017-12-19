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
        $__internal_a527fae40491d3bf46b522a9107b8289a2a4c44bd9e1c6bd7ecbb8377943ecd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a527fae40491d3bf46b522a9107b8289a2a4c44bd9e1c6bd7ecbb8377943ecd8->enter($__internal_a527fae40491d3bf46b522a9107b8289a2a4c44bd9e1c6bd7ecbb8377943ecd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_07ffef619d5ca82753ce022d47b52b5003fcdc3449ede7696d2dfc0537b11d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ffef619d5ca82753ce022d47b52b5003fcdc3449ede7696d2dfc0537b11d7f->enter($__internal_07ffef619d5ca82753ce022d47b52b5003fcdc3449ede7696d2dfc0537b11d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a527fae40491d3bf46b522a9107b8289a2a4c44bd9e1c6bd7ecbb8377943ecd8->leave($__internal_a527fae40491d3bf46b522a9107b8289a2a4c44bd9e1c6bd7ecbb8377943ecd8_prof);

        
        $__internal_07ffef619d5ca82753ce022d47b52b5003fcdc3449ede7696d2dfc0537b11d7f->leave($__internal_07ffef619d5ca82753ce022d47b52b5003fcdc3449ede7696d2dfc0537b11d7f_prof);

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
