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
        $__internal_9ac92e77524cb7b1269c174f37881ae83ea8fa371973d80e966ba75be6998b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac92e77524cb7b1269c174f37881ae83ea8fa371973d80e966ba75be6998b1f->enter($__internal_9ac92e77524cb7b1269c174f37881ae83ea8fa371973d80e966ba75be6998b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c48108e8f429b9f62dc24f35b9740b319abfa6256f37a1fd35917f0d719b63ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48108e8f429b9f62dc24f35b9740b319abfa6256f37a1fd35917f0d719b63ce->enter($__internal_c48108e8f429b9f62dc24f35b9740b319abfa6256f37a1fd35917f0d719b63ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9ac92e77524cb7b1269c174f37881ae83ea8fa371973d80e966ba75be6998b1f->leave($__internal_9ac92e77524cb7b1269c174f37881ae83ea8fa371973d80e966ba75be6998b1f_prof);

        
        $__internal_c48108e8f429b9f62dc24f35b9740b319abfa6256f37a1fd35917f0d719b63ce->leave($__internal_c48108e8f429b9f62dc24f35b9740b319abfa6256f37a1fd35917f0d719b63ce_prof);

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
