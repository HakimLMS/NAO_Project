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
        $__internal_dd839976c6fcbb9085dc67c63963a248a16993b32d1194f8cf59c3cb89f3a000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd839976c6fcbb9085dc67c63963a248a16993b32d1194f8cf59c3cb89f3a000->enter($__internal_dd839976c6fcbb9085dc67c63963a248a16993b32d1194f8cf59c3cb89f3a000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f29fb43a66b3c7dc8664f422ec27fb7f12c5c3f9dd5b0fc5789a39f3ec8dc952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29fb43a66b3c7dc8664f422ec27fb7f12c5c3f9dd5b0fc5789a39f3ec8dc952->enter($__internal_f29fb43a66b3c7dc8664f422ec27fb7f12c5c3f9dd5b0fc5789a39f3ec8dc952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_dd839976c6fcbb9085dc67c63963a248a16993b32d1194f8cf59c3cb89f3a000->leave($__internal_dd839976c6fcbb9085dc67c63963a248a16993b32d1194f8cf59c3cb89f3a000_prof);

        
        $__internal_f29fb43a66b3c7dc8664f422ec27fb7f12c5c3f9dd5b0fc5789a39f3ec8dc952->leave($__internal_f29fb43a66b3c7dc8664f422ec27fb7f12c5c3f9dd5b0fc5789a39f3ec8dc952_prof);

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
