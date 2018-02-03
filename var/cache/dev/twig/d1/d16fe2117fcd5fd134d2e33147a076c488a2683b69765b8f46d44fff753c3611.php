<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a20ab32f3d65e383a13f3ed6ab89b57bcd3228f14721070d38204155bfae5303 extends Twig_Template
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
        $__internal_a1f32c81c5ed9f606a2dfc551df940eaa068b76a7d12b3bb11e73c24ee17f662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f32c81c5ed9f606a2dfc551df940eaa068b76a7d12b3bb11e73c24ee17f662->enter($__internal_a1f32c81c5ed9f606a2dfc551df940eaa068b76a7d12b3bb11e73c24ee17f662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_ad63880540352257adee690c250c0c5bc139d2e1ae1d846fae5f429cb0cc0b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad63880540352257adee690c250c0c5bc139d2e1ae1d846fae5f429cb0cc0b02->enter($__internal_ad63880540352257adee690c250c0c5bc139d2e1ae1d846fae5f429cb0cc0b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a1f32c81c5ed9f606a2dfc551df940eaa068b76a7d12b3bb11e73c24ee17f662->leave($__internal_a1f32c81c5ed9f606a2dfc551df940eaa068b76a7d12b3bb11e73c24ee17f662_prof);

        
        $__internal_ad63880540352257adee690c250c0c5bc139d2e1ae1d846fae5f429cb0cc0b02->leave($__internal_ad63880540352257adee690c250c0c5bc139d2e1ae1d846fae5f429cb0cc0b02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
