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
        $__internal_997ed17db0bc2dfa383caad3b3aa217ce3ad36c4dc638481d6a0bb2ca933daef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997ed17db0bc2dfa383caad3b3aa217ce3ad36c4dc638481d6a0bb2ca933daef->enter($__internal_997ed17db0bc2dfa383caad3b3aa217ce3ad36c4dc638481d6a0bb2ca933daef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c7c30fb6c472910c1be03bf477b206f6f050784a004b64327eaad970fd2248d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c30fb6c472910c1be03bf477b206f6f050784a004b64327eaad970fd2248d3->enter($__internal_c7c30fb6c472910c1be03bf477b206f6f050784a004b64327eaad970fd2248d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_997ed17db0bc2dfa383caad3b3aa217ce3ad36c4dc638481d6a0bb2ca933daef->leave($__internal_997ed17db0bc2dfa383caad3b3aa217ce3ad36c4dc638481d6a0bb2ca933daef_prof);

        
        $__internal_c7c30fb6c472910c1be03bf477b206f6f050784a004b64327eaad970fd2248d3->leave($__internal_c7c30fb6c472910c1be03bf477b206f6f050784a004b64327eaad970fd2248d3_prof);

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
