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
        $__internal_1563335c4fc20d5801282091ff3ac8f96bde00d9ecedba983e50e60b2343caec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1563335c4fc20d5801282091ff3ac8f96bde00d9ecedba983e50e60b2343caec->enter($__internal_1563335c4fc20d5801282091ff3ac8f96bde00d9ecedba983e50e60b2343caec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6b8c7bda07b69869896ae181c93b07a6cdf5f775d2055f65114b93299d18cbc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8c7bda07b69869896ae181c93b07a6cdf5f775d2055f65114b93299d18cbc1->enter($__internal_6b8c7bda07b69869896ae181c93b07a6cdf5f775d2055f65114b93299d18cbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1563335c4fc20d5801282091ff3ac8f96bde00d9ecedba983e50e60b2343caec->leave($__internal_1563335c4fc20d5801282091ff3ac8f96bde00d9ecedba983e50e60b2343caec_prof);

        
        $__internal_6b8c7bda07b69869896ae181c93b07a6cdf5f775d2055f65114b93299d18cbc1->leave($__internal_6b8c7bda07b69869896ae181c93b07a6cdf5f775d2055f65114b93299d18cbc1_prof);

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
