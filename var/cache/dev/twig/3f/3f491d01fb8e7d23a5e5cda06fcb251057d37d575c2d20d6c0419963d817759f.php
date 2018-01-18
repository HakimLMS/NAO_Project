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
        $__internal_5a4c01c1d0d4ba20c7d284f7d61d9d082335dab9d681d62817fcf24dd8547882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4c01c1d0d4ba20c7d284f7d61d9d082335dab9d681d62817fcf24dd8547882->enter($__internal_5a4c01c1d0d4ba20c7d284f7d61d9d082335dab9d681d62817fcf24dd8547882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_89530826dc3d5fd211ffe91d754233b220a082aa34f07e5a932dad37880304b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89530826dc3d5fd211ffe91d754233b220a082aa34f07e5a932dad37880304b7->enter($__internal_89530826dc3d5fd211ffe91d754233b220a082aa34f07e5a932dad37880304b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_5a4c01c1d0d4ba20c7d284f7d61d9d082335dab9d681d62817fcf24dd8547882->leave($__internal_5a4c01c1d0d4ba20c7d284f7d61d9d082335dab9d681d62817fcf24dd8547882_prof);

        
        $__internal_89530826dc3d5fd211ffe91d754233b220a082aa34f07e5a932dad37880304b7->leave($__internal_89530826dc3d5fd211ffe91d754233b220a082aa34f07e5a932dad37880304b7_prof);

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
