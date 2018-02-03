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
        $__internal_b703efed7590fea583a2bde855ea2245093e9b5d82063e6a1ea9a3117984f641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b703efed7590fea583a2bde855ea2245093e9b5d82063e6a1ea9a3117984f641->enter($__internal_b703efed7590fea583a2bde855ea2245093e9b5d82063e6a1ea9a3117984f641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8eb2b817d52717c19ac387d85f91f04fb91a2c124eb8f005d7bf8ec580865da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb2b817d52717c19ac387d85f91f04fb91a2c124eb8f005d7bf8ec580865da7->enter($__internal_8eb2b817d52717c19ac387d85f91f04fb91a2c124eb8f005d7bf8ec580865da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b703efed7590fea583a2bde855ea2245093e9b5d82063e6a1ea9a3117984f641->leave($__internal_b703efed7590fea583a2bde855ea2245093e9b5d82063e6a1ea9a3117984f641_prof);

        
        $__internal_8eb2b817d52717c19ac387d85f91f04fb91a2c124eb8f005d7bf8ec580865da7->leave($__internal_8eb2b817d52717c19ac387d85f91f04fb91a2c124eb8f005d7bf8ec580865da7_prof);

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
