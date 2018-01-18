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
        $__internal_221da8fd73c6514cd6dea04750cfb0d0f64c5539da53771cf68efb3383b53c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221da8fd73c6514cd6dea04750cfb0d0f64c5539da53771cf68efb3383b53c2f->enter($__internal_221da8fd73c6514cd6dea04750cfb0d0f64c5539da53771cf68efb3383b53c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c3ea19360b7f117ab2644028eb7ab1b56693315f11cd3a687b5473e5d4a12efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ea19360b7f117ab2644028eb7ab1b56693315f11cd3a687b5473e5d4a12efd->enter($__internal_c3ea19360b7f117ab2644028eb7ab1b56693315f11cd3a687b5473e5d4a12efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_221da8fd73c6514cd6dea04750cfb0d0f64c5539da53771cf68efb3383b53c2f->leave($__internal_221da8fd73c6514cd6dea04750cfb0d0f64c5539da53771cf68efb3383b53c2f_prof);

        
        $__internal_c3ea19360b7f117ab2644028eb7ab1b56693315f11cd3a687b5473e5d4a12efd->leave($__internal_c3ea19360b7f117ab2644028eb7ab1b56693315f11cd3a687b5473e5d4a12efd_prof);

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
