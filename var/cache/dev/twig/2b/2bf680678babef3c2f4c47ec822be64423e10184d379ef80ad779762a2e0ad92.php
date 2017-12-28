<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_e66cc056e73226b63d75d25e9fd8aeedd4fc4a9410d61eef327d25b217eb845d extends Twig_Template
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
        $__internal_1c41a9193588dd6eb5235c6145926d832957521fa73e36ded781135d656ba28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c41a9193588dd6eb5235c6145926d832957521fa73e36ded781135d656ba28a->enter($__internal_1c41a9193588dd6eb5235c6145926d832957521fa73e36ded781135d656ba28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_642c98a04c0c4606de188bbfe414642cc7f4bbb8b02aefe727a26db45c888e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642c98a04c0c4606de188bbfe414642cc7f4bbb8b02aefe727a26db45c888e3c->enter($__internal_642c98a04c0c4606de188bbfe414642cc7f4bbb8b02aefe727a26db45c888e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_1c41a9193588dd6eb5235c6145926d832957521fa73e36ded781135d656ba28a->leave($__internal_1c41a9193588dd6eb5235c6145926d832957521fa73e36ded781135d656ba28a_prof);

        
        $__internal_642c98a04c0c4606de188bbfe414642cc7f4bbb8b02aefe727a26db45c888e3c->leave($__internal_642c98a04c0c4606de188bbfe414642cc7f4bbb8b02aefe727a26db45c888e3c_prof);

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
