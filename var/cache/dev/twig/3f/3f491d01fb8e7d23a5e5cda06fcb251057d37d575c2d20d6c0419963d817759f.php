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
        $__internal_002a497c1a4c36b1184cc6dc76ab9f7647c01e687391977bcbc6af2aae0d8d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_002a497c1a4c36b1184cc6dc76ab9f7647c01e687391977bcbc6af2aae0d8d72->enter($__internal_002a497c1a4c36b1184cc6dc76ab9f7647c01e687391977bcbc6af2aae0d8d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_b2ae358ecf974603d384b3e5b2f8683c7f4c628a9dd02a5e577b1bb5ce694bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ae358ecf974603d384b3e5b2f8683c7f4c628a9dd02a5e577b1bb5ce694bf8->enter($__internal_b2ae358ecf974603d384b3e5b2f8683c7f4c628a9dd02a5e577b1bb5ce694bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_002a497c1a4c36b1184cc6dc76ab9f7647c01e687391977bcbc6af2aae0d8d72->leave($__internal_002a497c1a4c36b1184cc6dc76ab9f7647c01e687391977bcbc6af2aae0d8d72_prof);

        
        $__internal_b2ae358ecf974603d384b3e5b2f8683c7f4c628a9dd02a5e577b1bb5ce694bf8->leave($__internal_b2ae358ecf974603d384b3e5b2f8683c7f4c628a9dd02a5e577b1bb5ce694bf8_prof);

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
", "@Framework/Form/form_label.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
