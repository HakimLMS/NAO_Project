<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_79e7aef85e9d4dc68dbd02447ac5f7d642d67a6f8f612e441efd3f6560ebf861 extends Twig_Template
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
        $__internal_64b4333274b0e9765cfa1451ab8132cc6ea222b205657d6d9c2424093c245b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b4333274b0e9765cfa1451ab8132cc6ea222b205657d6d9c2424093c245b0c->enter($__internal_64b4333274b0e9765cfa1451ab8132cc6ea222b205657d6d9c2424093c245b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_5ba75c153a902b1bd31c18792305b2609ee7029b678474437434da3053cf3851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba75c153a902b1bd31c18792305b2609ee7029b678474437434da3053cf3851->enter($__internal_5ba75c153a902b1bd31c18792305b2609ee7029b678474437434da3053cf3851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_64b4333274b0e9765cfa1451ab8132cc6ea222b205657d6d9c2424093c245b0c->leave($__internal_64b4333274b0e9765cfa1451ab8132cc6ea222b205657d6d9c2424093c245b0c_prof);

        
        $__internal_5ba75c153a902b1bd31c18792305b2609ee7029b678474437434da3053cf3851->leave($__internal_5ba75c153a902b1bd31c18792305b2609ee7029b678474437434da3053cf3851_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
