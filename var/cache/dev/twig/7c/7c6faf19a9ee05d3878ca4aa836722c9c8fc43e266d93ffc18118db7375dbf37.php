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
        $__internal_8c1fd7a837bf1baad5398afe1820cb4049a4501e6acaf35b003413ef5433d8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1fd7a837bf1baad5398afe1820cb4049a4501e6acaf35b003413ef5433d8e2->enter($__internal_8c1fd7a837bf1baad5398afe1820cb4049a4501e6acaf35b003413ef5433d8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ff4d027cde7be0a169b23cf144f7cdd24a25139acda1c658209777a4767a7e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4d027cde7be0a169b23cf144f7cdd24a25139acda1c658209777a4767a7e8f->enter($__internal_ff4d027cde7be0a169b23cf144f7cdd24a25139acda1c658209777a4767a7e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8c1fd7a837bf1baad5398afe1820cb4049a4501e6acaf35b003413ef5433d8e2->leave($__internal_8c1fd7a837bf1baad5398afe1820cb4049a4501e6acaf35b003413ef5433d8e2_prof);

        
        $__internal_ff4d027cde7be0a169b23cf144f7cdd24a25139acda1c658209777a4767a7e8f->leave($__internal_ff4d027cde7be0a169b23cf144f7cdd24a25139acda1c658209777a4767a7e8f_prof);

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
