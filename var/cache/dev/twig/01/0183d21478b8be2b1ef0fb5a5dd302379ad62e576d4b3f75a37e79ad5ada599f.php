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
        $__internal_7cac210112185e4c58c9ae9312885c6007f97d2ed726e73838a1a1675509f3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cac210112185e4c58c9ae9312885c6007f97d2ed726e73838a1a1675509f3f5->enter($__internal_7cac210112185e4c58c9ae9312885c6007f97d2ed726e73838a1a1675509f3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_42fb27bd24ca27143aecc3c0ad12d511d0ae1bc674e3bea3d7237e009ec52893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fb27bd24ca27143aecc3c0ad12d511d0ae1bc674e3bea3d7237e009ec52893->enter($__internal_42fb27bd24ca27143aecc3c0ad12d511d0ae1bc674e3bea3d7237e009ec52893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_7cac210112185e4c58c9ae9312885c6007f97d2ed726e73838a1a1675509f3f5->leave($__internal_7cac210112185e4c58c9ae9312885c6007f97d2ed726e73838a1a1675509f3f5_prof);

        
        $__internal_42fb27bd24ca27143aecc3c0ad12d511d0ae1bc674e3bea3d7237e009ec52893->leave($__internal_42fb27bd24ca27143aecc3c0ad12d511d0ae1bc674e3bea3d7237e009ec52893_prof);

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
