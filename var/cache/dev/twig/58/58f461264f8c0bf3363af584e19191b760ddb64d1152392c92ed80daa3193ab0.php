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
        $__internal_6cbf1040c175e39430a27e08540a7415748d96e80b1c4cca85263deb8f48ae72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbf1040c175e39430a27e08540a7415748d96e80b1c4cca85263deb8f48ae72->enter($__internal_6cbf1040c175e39430a27e08540a7415748d96e80b1c4cca85263deb8f48ae72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_cacc607b986d0f610bf67783f03261bbe27fc92457b249c9c162abdf5307e34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cacc607b986d0f610bf67783f03261bbe27fc92457b249c9c162abdf5307e34a->enter($__internal_cacc607b986d0f610bf67783f03261bbe27fc92457b249c9c162abdf5307e34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6cbf1040c175e39430a27e08540a7415748d96e80b1c4cca85263deb8f48ae72->leave($__internal_6cbf1040c175e39430a27e08540a7415748d96e80b1c4cca85263deb8f48ae72_prof);

        
        $__internal_cacc607b986d0f610bf67783f03261bbe27fc92457b249c9c162abdf5307e34a->leave($__internal_cacc607b986d0f610bf67783f03261bbe27fc92457b249c9c162abdf5307e34a_prof);

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
