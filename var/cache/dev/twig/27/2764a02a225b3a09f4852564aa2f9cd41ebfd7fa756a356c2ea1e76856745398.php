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
        $__internal_a1048c02dad94c43d349b12707a8f4ca28ad44a5f79813e3108071bead535c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1048c02dad94c43d349b12707a8f4ca28ad44a5f79813e3108071bead535c81->enter($__internal_a1048c02dad94c43d349b12707a8f4ca28ad44a5f79813e3108071bead535c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_fba70f8d7b0f664b903c62f187759608b4c0f1b99a55e17522f44e4849106ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba70f8d7b0f664b903c62f187759608b4c0f1b99a55e17522f44e4849106ce2->enter($__internal_fba70f8d7b0f664b903c62f187759608b4c0f1b99a55e17522f44e4849106ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a1048c02dad94c43d349b12707a8f4ca28ad44a5f79813e3108071bead535c81->leave($__internal_a1048c02dad94c43d349b12707a8f4ca28ad44a5f79813e3108071bead535c81_prof);

        
        $__internal_fba70f8d7b0f664b903c62f187759608b4c0f1b99a55e17522f44e4849106ce2->leave($__internal_fba70f8d7b0f664b903c62f187759608b4c0f1b99a55e17522f44e4849106ce2_prof);

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
