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
        $__internal_112ea2904df6eb69f530337aedcac4e18ce8a703a78b90820180f5254d720afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112ea2904df6eb69f530337aedcac4e18ce8a703a78b90820180f5254d720afc->enter($__internal_112ea2904df6eb69f530337aedcac4e18ce8a703a78b90820180f5254d720afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_78204d8c0c6602569770b0afb9cbe98dfdda3a99e7417e029b9ab62020b740ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78204d8c0c6602569770b0afb9cbe98dfdda3a99e7417e029b9ab62020b740ad->enter($__internal_78204d8c0c6602569770b0afb9cbe98dfdda3a99e7417e029b9ab62020b740ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_112ea2904df6eb69f530337aedcac4e18ce8a703a78b90820180f5254d720afc->leave($__internal_112ea2904df6eb69f530337aedcac4e18ce8a703a78b90820180f5254d720afc_prof);

        
        $__internal_78204d8c0c6602569770b0afb9cbe98dfdda3a99e7417e029b9ab62020b740ad->leave($__internal_78204d8c0c6602569770b0afb9cbe98dfdda3a99e7417e029b9ab62020b740ad_prof);

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
