<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0fed2f55a441e18e7f04a41a61aa432b21720f7154c8d249b5cd640952353a58 extends Twig_Template
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
        $__internal_704026a68d3f27dc7225c0109e05b5ae940402a4a2efa4376c3533d512814598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704026a68d3f27dc7225c0109e05b5ae940402a4a2efa4376c3533d512814598->enter($__internal_704026a68d3f27dc7225c0109e05b5ae940402a4a2efa4376c3533d512814598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_65340cbf6bd50d4dc9ae740bdfc66f56f80b58f1b32d448633c78bae9f71a6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65340cbf6bd50d4dc9ae740bdfc66f56f80b58f1b32d448633c78bae9f71a6db->enter($__internal_65340cbf6bd50d4dc9ae740bdfc66f56f80b58f1b32d448633c78bae9f71a6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_704026a68d3f27dc7225c0109e05b5ae940402a4a2efa4376c3533d512814598->leave($__internal_704026a68d3f27dc7225c0109e05b5ae940402a4a2efa4376c3533d512814598_prof);

        
        $__internal_65340cbf6bd50d4dc9ae740bdfc66f56f80b58f1b32d448633c78bae9f71a6db->leave($__internal_65340cbf6bd50d4dc9ae740bdfc66f56f80b58f1b32d448633c78bae9f71a6db_prof);

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
