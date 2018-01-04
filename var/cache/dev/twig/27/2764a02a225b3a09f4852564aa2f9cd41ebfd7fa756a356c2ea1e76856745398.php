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
        $__internal_28f0eee1d2205c27779fcf6e598ccea3be6935f7e807ec297d524b1a73e377d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f0eee1d2205c27779fcf6e598ccea3be6935f7e807ec297d524b1a73e377d9->enter($__internal_28f0eee1d2205c27779fcf6e598ccea3be6935f7e807ec297d524b1a73e377d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2afc5469deceba37bc9e9299efd304bb1a3f20365400b78723df58abf9a83a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afc5469deceba37bc9e9299efd304bb1a3f20365400b78723df58abf9a83a92->enter($__internal_2afc5469deceba37bc9e9299efd304bb1a3f20365400b78723df58abf9a83a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_28f0eee1d2205c27779fcf6e598ccea3be6935f7e807ec297d524b1a73e377d9->leave($__internal_28f0eee1d2205c27779fcf6e598ccea3be6935f7e807ec297d524b1a73e377d9_prof);

        
        $__internal_2afc5469deceba37bc9e9299efd304bb1a3f20365400b78723df58abf9a83a92->leave($__internal_2afc5469deceba37bc9e9299efd304bb1a3f20365400b78723df58abf9a83a92_prof);

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
