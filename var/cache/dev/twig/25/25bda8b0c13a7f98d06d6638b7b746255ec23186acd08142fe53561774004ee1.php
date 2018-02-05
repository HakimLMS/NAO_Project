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
        $__internal_7936a824795e97402171c5c90780c26c44901a119ad1496ada3e822e09e7d638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7936a824795e97402171c5c90780c26c44901a119ad1496ada3e822e09e7d638->enter($__internal_7936a824795e97402171c5c90780c26c44901a119ad1496ada3e822e09e7d638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_da3b7a2f570c3bfd7de0c428d898702a9a5db4dddb39856a1c1f6f687d882574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3b7a2f570c3bfd7de0c428d898702a9a5db4dddb39856a1c1f6f687d882574->enter($__internal_da3b7a2f570c3bfd7de0c428d898702a9a5db4dddb39856a1c1f6f687d882574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7936a824795e97402171c5c90780c26c44901a119ad1496ada3e822e09e7d638->leave($__internal_7936a824795e97402171c5c90780c26c44901a119ad1496ada3e822e09e7d638_prof);

        
        $__internal_da3b7a2f570c3bfd7de0c428d898702a9a5db4dddb39856a1c1f6f687d882574->leave($__internal_da3b7a2f570c3bfd7de0c428d898702a9a5db4dddb39856a1c1f6f687d882574_prof);

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
