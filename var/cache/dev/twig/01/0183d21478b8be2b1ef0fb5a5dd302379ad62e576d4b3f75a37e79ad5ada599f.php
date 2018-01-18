<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0fed2f55a441e18e7f04a41a61aa432b21720f7154c8d249b5cd640952353a58 extends Twig_Template
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
        $__internal_3c448dfbf7083f683d6c2337577438298ad826a7ea0e2badcf9f74cc4971a686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c448dfbf7083f683d6c2337577438298ad826a7ea0e2badcf9f74cc4971a686->enter($__internal_3c448dfbf7083f683d6c2337577438298ad826a7ea0e2badcf9f74cc4971a686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a0940d2d701b953c72959b2c4c285c57e56d47cce9049e5c63d301f5f80c5762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0940d2d701b953c72959b2c4c285c57e56d47cce9049e5c63d301f5f80c5762->enter($__internal_a0940d2d701b953c72959b2c4c285c57e56d47cce9049e5c63d301f5f80c5762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3c448dfbf7083f683d6c2337577438298ad826a7ea0e2badcf9f74cc4971a686->leave($__internal_3c448dfbf7083f683d6c2337577438298ad826a7ea0e2badcf9f74cc4971a686_prof);

        
        $__internal_a0940d2d701b953c72959b2c4c285c57e56d47cce9049e5c63d301f5f80c5762->leave($__internal_a0940d2d701b953c72959b2c4c285c57e56d47cce9049e5c63d301f5f80c5762_prof);

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
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
