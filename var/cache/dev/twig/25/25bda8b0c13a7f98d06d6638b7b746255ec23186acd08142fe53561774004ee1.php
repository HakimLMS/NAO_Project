<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bad335dd2203c70d736867e3e11a2f5e372edc4b88002f0f21e790335b12bcdd extends Twig_Template
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
        $__internal_e7d9531539011aae888b76a3f948ed9bf145fb2409fbd7112e5471c41e7c6d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d9531539011aae888b76a3f948ed9bf145fb2409fbd7112e5471c41e7c6d9d->enter($__internal_e7d9531539011aae888b76a3f948ed9bf145fb2409fbd7112e5471c41e7c6d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4fb6fb139d11b396cfd65bcb7cfb0d671711b0d1959a4213c3892b581ea736bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb6fb139d11b396cfd65bcb7cfb0d671711b0d1959a4213c3892b581ea736bc->enter($__internal_4fb6fb139d11b396cfd65bcb7cfb0d671711b0d1959a4213c3892b581ea736bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e7d9531539011aae888b76a3f948ed9bf145fb2409fbd7112e5471c41e7c6d9d->leave($__internal_e7d9531539011aae888b76a3f948ed9bf145fb2409fbd7112e5471c41e7c6d9d_prof);

        
        $__internal_4fb6fb139d11b396cfd65bcb7cfb0d671711b0d1959a4213c3892b581ea736bc->leave($__internal_4fb6fb139d11b396cfd65bcb7cfb0d671711b0d1959a4213c3892b581ea736bc_prof);

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
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
