<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b29d9d7b601760fcc34c421b1eb30042a7b2126d6dc2ce17aa70f9e5d1752695 extends Twig_Template
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
        $__internal_9a7084f6a3789973d23024d1f95ec649bc0b4efaf895099122c460004a786e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7084f6a3789973d23024d1f95ec649bc0b4efaf895099122c460004a786e63->enter($__internal_9a7084f6a3789973d23024d1f95ec649bc0b4efaf895099122c460004a786e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f28dc68690439bc00945d298917f0a3ef0c5f9f0d2646b1bbb6817811193de7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28dc68690439bc00945d298917f0a3ef0c5f9f0d2646b1bbb6817811193de7c->enter($__internal_f28dc68690439bc00945d298917f0a3ef0c5f9f0d2646b1bbb6817811193de7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9a7084f6a3789973d23024d1f95ec649bc0b4efaf895099122c460004a786e63->leave($__internal_9a7084f6a3789973d23024d1f95ec649bc0b4efaf895099122c460004a786e63_prof);

        
        $__internal_f28dc68690439bc00945d298917f0a3ef0c5f9f0d2646b1bbb6817811193de7c->leave($__internal_f28dc68690439bc00945d298917f0a3ef0c5f9f0d2646b1bbb6817811193de7c_prof);

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
