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
        $__internal_45d1a8aeff0b37d48ceb62c7e67e52c17e6fd0f27efce29265a020ea3f557395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d1a8aeff0b37d48ceb62c7e67e52c17e6fd0f27efce29265a020ea3f557395->enter($__internal_45d1a8aeff0b37d48ceb62c7e67e52c17e6fd0f27efce29265a020ea3f557395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a2ac82ffa0ca27295a85919fa65a0ff29e865de011d5a6ec21c4e0543ff8e31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ac82ffa0ca27295a85919fa65a0ff29e865de011d5a6ec21c4e0543ff8e31f->enter($__internal_a2ac82ffa0ca27295a85919fa65a0ff29e865de011d5a6ec21c4e0543ff8e31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_45d1a8aeff0b37d48ceb62c7e67e52c17e6fd0f27efce29265a020ea3f557395->leave($__internal_45d1a8aeff0b37d48ceb62c7e67e52c17e6fd0f27efce29265a020ea3f557395_prof);

        
        $__internal_a2ac82ffa0ca27295a85919fa65a0ff29e865de011d5a6ec21c4e0543ff8e31f->leave($__internal_a2ac82ffa0ca27295a85919fa65a0ff29e865de011d5a6ec21c4e0543ff8e31f_prof);

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
