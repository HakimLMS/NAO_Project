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
        $__internal_82bbe2f1dbbcff88ae60ddfe7d608b4308a8c59c7340f08ef903de48c80b3f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82bbe2f1dbbcff88ae60ddfe7d608b4308a8c59c7340f08ef903de48c80b3f41->enter($__internal_82bbe2f1dbbcff88ae60ddfe7d608b4308a8c59c7340f08ef903de48c80b3f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_7b5af34775435bcacb3902a3fb11ba44a7de0568d9e61993c5900d96a9bdc1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5af34775435bcacb3902a3fb11ba44a7de0568d9e61993c5900d96a9bdc1a1->enter($__internal_7b5af34775435bcacb3902a3fb11ba44a7de0568d9e61993c5900d96a9bdc1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_82bbe2f1dbbcff88ae60ddfe7d608b4308a8c59c7340f08ef903de48c80b3f41->leave($__internal_82bbe2f1dbbcff88ae60ddfe7d608b4308a8c59c7340f08ef903de48c80b3f41_prof);

        
        $__internal_7b5af34775435bcacb3902a3fb11ba44a7de0568d9e61993c5900d96a9bdc1a1->leave($__internal_7b5af34775435bcacb3902a3fb11ba44a7de0568d9e61993c5900d96a9bdc1a1_prof);

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
