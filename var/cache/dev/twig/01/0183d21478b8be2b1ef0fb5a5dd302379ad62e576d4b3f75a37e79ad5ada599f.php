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
        $__internal_5c6e03f563887f71912faef6014c895c734e14c98ad88f64629747fb4342c74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6e03f563887f71912faef6014c895c734e14c98ad88f64629747fb4342c74d->enter($__internal_5c6e03f563887f71912faef6014c895c734e14c98ad88f64629747fb4342c74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_b954c56b24716d16d6ebb57063475d65133670ca702e3932e3eb8aaac85d316c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b954c56b24716d16d6ebb57063475d65133670ca702e3932e3eb8aaac85d316c->enter($__internal_b954c56b24716d16d6ebb57063475d65133670ca702e3932e3eb8aaac85d316c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5c6e03f563887f71912faef6014c895c734e14c98ad88f64629747fb4342c74d->leave($__internal_5c6e03f563887f71912faef6014c895c734e14c98ad88f64629747fb4342c74d_prof);

        
        $__internal_b954c56b24716d16d6ebb57063475d65133670ca702e3932e3eb8aaac85d316c->leave($__internal_b954c56b24716d16d6ebb57063475d65133670ca702e3932e3eb8aaac85d316c_prof);

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
