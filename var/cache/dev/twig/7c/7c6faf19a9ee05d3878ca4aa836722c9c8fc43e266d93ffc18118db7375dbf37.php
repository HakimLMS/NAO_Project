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
        $__internal_785c47aec552f878d09d92d4d21a830c1359432b11529315f1b6b9de99f053d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785c47aec552f878d09d92d4d21a830c1359432b11529315f1b6b9de99f053d6->enter($__internal_785c47aec552f878d09d92d4d21a830c1359432b11529315f1b6b9de99f053d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a580da857c69870280f6ca86f8c44685cdafbd85ded62b28482dd59771ec33db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a580da857c69870280f6ca86f8c44685cdafbd85ded62b28482dd59771ec33db->enter($__internal_a580da857c69870280f6ca86f8c44685cdafbd85ded62b28482dd59771ec33db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_785c47aec552f878d09d92d4d21a830c1359432b11529315f1b6b9de99f053d6->leave($__internal_785c47aec552f878d09d92d4d21a830c1359432b11529315f1b6b9de99f053d6_prof);

        
        $__internal_a580da857c69870280f6ca86f8c44685cdafbd85ded62b28482dd59771ec33db->leave($__internal_a580da857c69870280f6ca86f8c44685cdafbd85ded62b28482dd59771ec33db_prof);

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
