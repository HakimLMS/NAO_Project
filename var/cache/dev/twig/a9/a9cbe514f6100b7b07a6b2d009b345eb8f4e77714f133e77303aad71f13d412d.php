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
        $__internal_387d2c734aa571f51199d24dd1722c8d1282e5f4a699b03b855fce100e7b273d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_387d2c734aa571f51199d24dd1722c8d1282e5f4a699b03b855fce100e7b273d->enter($__internal_387d2c734aa571f51199d24dd1722c8d1282e5f4a699b03b855fce100e7b273d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a6fc27f22a7c5161e554e5c5e3c5116fb3ea772e2e292a7bc2b658a489a845b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fc27f22a7c5161e554e5c5e3c5116fb3ea772e2e292a7bc2b658a489a845b6->enter($__internal_a6fc27f22a7c5161e554e5c5e3c5116fb3ea772e2e292a7bc2b658a489a845b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_387d2c734aa571f51199d24dd1722c8d1282e5f4a699b03b855fce100e7b273d->leave($__internal_387d2c734aa571f51199d24dd1722c8d1282e5f4a699b03b855fce100e7b273d_prof);

        
        $__internal_a6fc27f22a7c5161e554e5c5e3c5116fb3ea772e2e292a7bc2b658a489a845b6->leave($__internal_a6fc27f22a7c5161e554e5c5e3c5116fb3ea772e2e292a7bc2b658a489a845b6_prof);

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
