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
        $__internal_b9aa447a9a6f5252e2546bb5f243188081a1aec02fd0aaa62f54cc3f7a5d3cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9aa447a9a6f5252e2546bb5f243188081a1aec02fd0aaa62f54cc3f7a5d3cb1->enter($__internal_b9aa447a9a6f5252e2546bb5f243188081a1aec02fd0aaa62f54cc3f7a5d3cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_6fc315664d0c89a7c3b359c40a5ebd28c6cfd71fae09b610f1f0d409965047b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc315664d0c89a7c3b359c40a5ebd28c6cfd71fae09b610f1f0d409965047b1->enter($__internal_6fc315664d0c89a7c3b359c40a5ebd28c6cfd71fae09b610f1f0d409965047b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_b9aa447a9a6f5252e2546bb5f243188081a1aec02fd0aaa62f54cc3f7a5d3cb1->leave($__internal_b9aa447a9a6f5252e2546bb5f243188081a1aec02fd0aaa62f54cc3f7a5d3cb1_prof);

        
        $__internal_6fc315664d0c89a7c3b359c40a5ebd28c6cfd71fae09b610f1f0d409965047b1->leave($__internal_6fc315664d0c89a7c3b359c40a5ebd28c6cfd71fae09b610f1f0d409965047b1_prof);

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
