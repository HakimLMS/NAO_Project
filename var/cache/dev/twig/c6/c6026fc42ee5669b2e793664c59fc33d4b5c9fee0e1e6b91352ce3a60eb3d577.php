<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9e417e9835b218452b31ba26cda5119878fa069c4b19d64c052d3b64f8f99f41 extends Twig_Template
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
        $__internal_fae4fba39905cc6f02fa5011c4772933ca8c97b59c4fb695b7585240c0761c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae4fba39905cc6f02fa5011c4772933ca8c97b59c4fb695b7585240c0761c20->enter($__internal_fae4fba39905cc6f02fa5011c4772933ca8c97b59c4fb695b7585240c0761c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b1721b92b2302ff70aaabff2b14e6eff1dfa2003845e646136fe917d01db47ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1721b92b2302ff70aaabff2b14e6eff1dfa2003845e646136fe917d01db47ad->enter($__internal_b1721b92b2302ff70aaabff2b14e6eff1dfa2003845e646136fe917d01db47ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fae4fba39905cc6f02fa5011c4772933ca8c97b59c4fb695b7585240c0761c20->leave($__internal_fae4fba39905cc6f02fa5011c4772933ca8c97b59c4fb695b7585240c0761c20_prof);

        
        $__internal_b1721b92b2302ff70aaabff2b14e6eff1dfa2003845e646136fe917d01db47ad->leave($__internal_b1721b92b2302ff70aaabff2b14e6eff1dfa2003845e646136fe917d01db47ad_prof);

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
