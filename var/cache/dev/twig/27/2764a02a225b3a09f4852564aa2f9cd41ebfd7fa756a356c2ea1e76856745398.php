<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_246af1dfa6f577de424dcfdc59ac57220aa54e7876600b2ca0d90ebb4ddefe73 extends Twig_Template
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
        $__internal_d813bff5ba1175060dd7c57e86f3d4508c2504f9bf1f1772928cd15f6c61b903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d813bff5ba1175060dd7c57e86f3d4508c2504f9bf1f1772928cd15f6c61b903->enter($__internal_d813bff5ba1175060dd7c57e86f3d4508c2504f9bf1f1772928cd15f6c61b903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_36b154ecc5e766a2fe0ea0a6630d49bf5d34094057331e8359d601d18630a2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b154ecc5e766a2fe0ea0a6630d49bf5d34094057331e8359d601d18630a2c8->enter($__internal_36b154ecc5e766a2fe0ea0a6630d49bf5d34094057331e8359d601d18630a2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d813bff5ba1175060dd7c57e86f3d4508c2504f9bf1f1772928cd15f6c61b903->leave($__internal_d813bff5ba1175060dd7c57e86f3d4508c2504f9bf1f1772928cd15f6c61b903_prof);

        
        $__internal_36b154ecc5e766a2fe0ea0a6630d49bf5d34094057331e8359d601d18630a2c8->leave($__internal_36b154ecc5e766a2fe0ea0a6630d49bf5d34094057331e8359d601d18630a2c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
