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
        $__internal_534a24e250ba5d0219040c3d988a8f74f3f46348d9bfffe6c97dcd0e26865531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534a24e250ba5d0219040c3d988a8f74f3f46348d9bfffe6c97dcd0e26865531->enter($__internal_534a24e250ba5d0219040c3d988a8f74f3f46348d9bfffe6c97dcd0e26865531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_507a053e4de3b6eb6e7a1e64df0f8ef11cd80667e5e4fad12076985c2a86258c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507a053e4de3b6eb6e7a1e64df0f8ef11cd80667e5e4fad12076985c2a86258c->enter($__internal_507a053e4de3b6eb6e7a1e64df0f8ef11cd80667e5e4fad12076985c2a86258c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_534a24e250ba5d0219040c3d988a8f74f3f46348d9bfffe6c97dcd0e26865531->leave($__internal_534a24e250ba5d0219040c3d988a8f74f3f46348d9bfffe6c97dcd0e26865531_prof);

        
        $__internal_507a053e4de3b6eb6e7a1e64df0f8ef11cd80667e5e4fad12076985c2a86258c->leave($__internal_507a053e4de3b6eb6e7a1e64df0f8ef11cd80667e5e4fad12076985c2a86258c_prof);

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
