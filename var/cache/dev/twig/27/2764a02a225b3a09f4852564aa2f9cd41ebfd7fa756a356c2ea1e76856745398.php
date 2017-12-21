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
        $__internal_869a816bce0f3445bf7a7f7e4c32d2c3a52c2f426e9e4ba542ec9cc7d60f5f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869a816bce0f3445bf7a7f7e4c32d2c3a52c2f426e9e4ba542ec9cc7d60f5f1b->enter($__internal_869a816bce0f3445bf7a7f7e4c32d2c3a52c2f426e9e4ba542ec9cc7d60f5f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_6946e46068fb94c4a27b786dfc9df6bc1200e87824ff31d4e5626770a7772bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6946e46068fb94c4a27b786dfc9df6bc1200e87824ff31d4e5626770a7772bb8->enter($__internal_6946e46068fb94c4a27b786dfc9df6bc1200e87824ff31d4e5626770a7772bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_869a816bce0f3445bf7a7f7e4c32d2c3a52c2f426e9e4ba542ec9cc7d60f5f1b->leave($__internal_869a816bce0f3445bf7a7f7e4c32d2c3a52c2f426e9e4ba542ec9cc7d60f5f1b_prof);

        
        $__internal_6946e46068fb94c4a27b786dfc9df6bc1200e87824ff31d4e5626770a7772bb8->leave($__internal_6946e46068fb94c4a27b786dfc9df6bc1200e87824ff31d4e5626770a7772bb8_prof);

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
