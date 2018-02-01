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
        $__internal_8a4222bc6b6d35f9b564efb50d9c010dc32681183171a1f138e74c5bbf0f1685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4222bc6b6d35f9b564efb50d9c010dc32681183171a1f138e74c5bbf0f1685->enter($__internal_8a4222bc6b6d35f9b564efb50d9c010dc32681183171a1f138e74c5bbf0f1685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_d8a74374e87202510a4926fe17b1b831eb1bf410aaeba403e2def1e85e9b1d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a74374e87202510a4926fe17b1b831eb1bf410aaeba403e2def1e85e9b1d6c->enter($__internal_d8a74374e87202510a4926fe17b1b831eb1bf410aaeba403e2def1e85e9b1d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8a4222bc6b6d35f9b564efb50d9c010dc32681183171a1f138e74c5bbf0f1685->leave($__internal_8a4222bc6b6d35f9b564efb50d9c010dc32681183171a1f138e74c5bbf0f1685_prof);

        
        $__internal_d8a74374e87202510a4926fe17b1b831eb1bf410aaeba403e2def1e85e9b1d6c->leave($__internal_d8a74374e87202510a4926fe17b1b831eb1bf410aaeba403e2def1e85e9b1d6c_prof);

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
