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
        $__internal_b64a0309bad0035e936b88df048fc2fb0103cf944d2a7d679bf87f7ba36a9b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64a0309bad0035e936b88df048fc2fb0103cf944d2a7d679bf87f7ba36a9b2b->enter($__internal_b64a0309bad0035e936b88df048fc2fb0103cf944d2a7d679bf87f7ba36a9b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5aaaf76fdf62f1c54da5d03f604a70eeceffc05c344f98c41d7e088447ef4615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aaaf76fdf62f1c54da5d03f604a70eeceffc05c344f98c41d7e088447ef4615->enter($__internal_5aaaf76fdf62f1c54da5d03f604a70eeceffc05c344f98c41d7e088447ef4615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b64a0309bad0035e936b88df048fc2fb0103cf944d2a7d679bf87f7ba36a9b2b->leave($__internal_b64a0309bad0035e936b88df048fc2fb0103cf944d2a7d679bf87f7ba36a9b2b_prof);

        
        $__internal_5aaaf76fdf62f1c54da5d03f604a70eeceffc05c344f98c41d7e088447ef4615->leave($__internal_5aaaf76fdf62f1c54da5d03f604a70eeceffc05c344f98c41d7e088447ef4615_prof);

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
