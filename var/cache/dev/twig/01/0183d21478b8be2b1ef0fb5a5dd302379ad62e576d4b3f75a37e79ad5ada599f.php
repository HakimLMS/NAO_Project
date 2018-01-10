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
        $__internal_48c6d981ecc23afbddd9fe54bc7ae297915c55c9bb27b067ad0a32f78696be82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c6d981ecc23afbddd9fe54bc7ae297915c55c9bb27b067ad0a32f78696be82->enter($__internal_48c6d981ecc23afbddd9fe54bc7ae297915c55c9bb27b067ad0a32f78696be82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2e1ec43090445a79eed4a8706105e72407a320c85c07fc56b45074b73aa4e829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1ec43090445a79eed4a8706105e72407a320c85c07fc56b45074b73aa4e829->enter($__internal_2e1ec43090445a79eed4a8706105e72407a320c85c07fc56b45074b73aa4e829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_48c6d981ecc23afbddd9fe54bc7ae297915c55c9bb27b067ad0a32f78696be82->leave($__internal_48c6d981ecc23afbddd9fe54bc7ae297915c55c9bb27b067ad0a32f78696be82_prof);

        
        $__internal_2e1ec43090445a79eed4a8706105e72407a320c85c07fc56b45074b73aa4e829->leave($__internal_2e1ec43090445a79eed4a8706105e72407a320c85c07fc56b45074b73aa4e829_prof);

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
