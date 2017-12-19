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
        $__internal_c9d2f2d0ea1cbafd966efd42aa637e04f9e7a4ff26dd94f21bfec23f954be758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d2f2d0ea1cbafd966efd42aa637e04f9e7a4ff26dd94f21bfec23f954be758->enter($__internal_c9d2f2d0ea1cbafd966efd42aa637e04f9e7a4ff26dd94f21bfec23f954be758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_66b3d976153ab62f0385923725a46571a7c6e56e8a3dd8e5defc49b6de014231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b3d976153ab62f0385923725a46571a7c6e56e8a3dd8e5defc49b6de014231->enter($__internal_66b3d976153ab62f0385923725a46571a7c6e56e8a3dd8e5defc49b6de014231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c9d2f2d0ea1cbafd966efd42aa637e04f9e7a4ff26dd94f21bfec23f954be758->leave($__internal_c9d2f2d0ea1cbafd966efd42aa637e04f9e7a4ff26dd94f21bfec23f954be758_prof);

        
        $__internal_66b3d976153ab62f0385923725a46571a7c6e56e8a3dd8e5defc49b6de014231->leave($__internal_66b3d976153ab62f0385923725a46571a7c6e56e8a3dd8e5defc49b6de014231_prof);

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
