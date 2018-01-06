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
        $__internal_5fe6ebdac7f673609d8644349ce7c8e9d3570cce2db3d481388483bf41363313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe6ebdac7f673609d8644349ce7c8e9d3570cce2db3d481388483bf41363313->enter($__internal_5fe6ebdac7f673609d8644349ce7c8e9d3570cce2db3d481388483bf41363313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4e94968409ef53ba7eb22bb0024aec0f13687dcc6c151117d7492000743d3513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e94968409ef53ba7eb22bb0024aec0f13687dcc6c151117d7492000743d3513->enter($__internal_4e94968409ef53ba7eb22bb0024aec0f13687dcc6c151117d7492000743d3513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5fe6ebdac7f673609d8644349ce7c8e9d3570cce2db3d481388483bf41363313->leave($__internal_5fe6ebdac7f673609d8644349ce7c8e9d3570cce2db3d481388483bf41363313_prof);

        
        $__internal_4e94968409ef53ba7eb22bb0024aec0f13687dcc6c151117d7492000743d3513->leave($__internal_4e94968409ef53ba7eb22bb0024aec0f13687dcc6c151117d7492000743d3513_prof);

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
