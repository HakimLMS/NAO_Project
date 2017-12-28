<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f0964555d776509c00691aa1257eaab97ec305027eac6d7d67b2af2f1cb7250b extends Twig_Template
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
        $__internal_a1523a8101110f05e6dac541ba763b5b5965349b6ce3460f9b77728f664d5d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1523a8101110f05e6dac541ba763b5b5965349b6ce3460f9b77728f664d5d48->enter($__internal_a1523a8101110f05e6dac541ba763b5b5965349b6ce3460f9b77728f664d5d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d87a9d101ee36092720874a468d8eb7c22a6f59bc2fa71b2e0ec13652c52a2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87a9d101ee36092720874a468d8eb7c22a6f59bc2fa71b2e0ec13652c52a2ed->enter($__internal_d87a9d101ee36092720874a468d8eb7c22a6f59bc2fa71b2e0ec13652c52a2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a1523a8101110f05e6dac541ba763b5b5965349b6ce3460f9b77728f664d5d48->leave($__internal_a1523a8101110f05e6dac541ba763b5b5965349b6ce3460f9b77728f664d5d48_prof);

        
        $__internal_d87a9d101ee36092720874a468d8eb7c22a6f59bc2fa71b2e0ec13652c52a2ed->leave($__internal_d87a9d101ee36092720874a468d8eb7c22a6f59bc2fa71b2e0ec13652c52a2ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
