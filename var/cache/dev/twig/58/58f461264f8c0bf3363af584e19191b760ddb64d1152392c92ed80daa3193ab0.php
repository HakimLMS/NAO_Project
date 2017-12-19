<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_282989014d51c432269a37484b0f8e2316f4b5df1edf1e3d7410e312b744513d extends Twig_Template
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
        $__internal_363644e86c6a5253a1b829ad802b1e6db4aed9d3a4b7f9a1de28da4315a2586c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363644e86c6a5253a1b829ad802b1e6db4aed9d3a4b7f9a1de28da4315a2586c->enter($__internal_363644e86c6a5253a1b829ad802b1e6db4aed9d3a4b7f9a1de28da4315a2586c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ff9057b2aee33c573bef031ff3200bdc8a95310c286a6f75fdde053bac42c55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9057b2aee33c573bef031ff3200bdc8a95310c286a6f75fdde053bac42c55d->enter($__internal_ff9057b2aee33c573bef031ff3200bdc8a95310c286a6f75fdde053bac42c55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_363644e86c6a5253a1b829ad802b1e6db4aed9d3a4b7f9a1de28da4315a2586c->leave($__internal_363644e86c6a5253a1b829ad802b1e6db4aed9d3a4b7f9a1de28da4315a2586c_prof);

        
        $__internal_ff9057b2aee33c573bef031ff3200bdc8a95310c286a6f75fdde053bac42c55d->leave($__internal_ff9057b2aee33c573bef031ff3200bdc8a95310c286a6f75fdde053bac42c55d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
