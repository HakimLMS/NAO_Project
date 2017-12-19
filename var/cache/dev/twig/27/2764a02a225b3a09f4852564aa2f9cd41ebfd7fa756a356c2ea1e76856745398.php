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
        $__internal_89e9520b9dcdf6e23fa9b4d3e0a838befbaa034aa67921a2cf6db2338f555701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e9520b9dcdf6e23fa9b4d3e0a838befbaa034aa67921a2cf6db2338f555701->enter($__internal_89e9520b9dcdf6e23fa9b4d3e0a838befbaa034aa67921a2cf6db2338f555701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_9abf1e7d6d756252ef77541d72da89c658aa6e93dd22ef77f7709d63e9d9fcd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abf1e7d6d756252ef77541d72da89c658aa6e93dd22ef77f7709d63e9d9fcd7->enter($__internal_9abf1e7d6d756252ef77541d72da89c658aa6e93dd22ef77f7709d63e9d9fcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_89e9520b9dcdf6e23fa9b4d3e0a838befbaa034aa67921a2cf6db2338f555701->leave($__internal_89e9520b9dcdf6e23fa9b4d3e0a838befbaa034aa67921a2cf6db2338f555701_prof);

        
        $__internal_9abf1e7d6d756252ef77541d72da89c658aa6e93dd22ef77f7709d63e9d9fcd7->leave($__internal_9abf1e7d6d756252ef77541d72da89c658aa6e93dd22ef77f7709d63e9d9fcd7_prof);

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
