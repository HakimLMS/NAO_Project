<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6af44899a3189585123642642421d3a4caff8b7cd4a489f6a40cfc67a1bf39a1 extends Twig_Template
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
        $__internal_f817f63fffbbce5a9389c4a4d6b12a38810ded64839f110be350fd8ddb53632d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f817f63fffbbce5a9389c4a4d6b12a38810ded64839f110be350fd8ddb53632d->enter($__internal_f817f63fffbbce5a9389c4a4d6b12a38810ded64839f110be350fd8ddb53632d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0f57a58555716a8d192bbaa9d4690c699da54926666ad2f28bec7282efcce936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f57a58555716a8d192bbaa9d4690c699da54926666ad2f28bec7282efcce936->enter($__internal_0f57a58555716a8d192bbaa9d4690c699da54926666ad2f28bec7282efcce936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f817f63fffbbce5a9389c4a4d6b12a38810ded64839f110be350fd8ddb53632d->leave($__internal_f817f63fffbbce5a9389c4a4d6b12a38810ded64839f110be350fd8ddb53632d_prof);

        
        $__internal_0f57a58555716a8d192bbaa9d4690c699da54926666ad2f28bec7282efcce936->leave($__internal_0f57a58555716a8d192bbaa9d4690c699da54926666ad2f28bec7282efcce936_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
