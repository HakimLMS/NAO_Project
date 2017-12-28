<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_daf02719bdf8b51f682704b324bcdac793d05f19f1b6a08cea10f5d889b4165f extends Twig_Template
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
        $__internal_9485153a0bffc3b0d84bb3c7d5b4affd91ad4d433c77817e227d2a47a0e516c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9485153a0bffc3b0d84bb3c7d5b4affd91ad4d433c77817e227d2a47a0e516c5->enter($__internal_9485153a0bffc3b0d84bb3c7d5b4affd91ad4d433c77817e227d2a47a0e516c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f302824a5687241074f0ffc627da6d7a5ba768c5378d8e3bc98e50aab08fdcec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f302824a5687241074f0ffc627da6d7a5ba768c5378d8e3bc98e50aab08fdcec->enter($__internal_f302824a5687241074f0ffc627da6d7a5ba768c5378d8e3bc98e50aab08fdcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9485153a0bffc3b0d84bb3c7d5b4affd91ad4d433c77817e227d2a47a0e516c5->leave($__internal_9485153a0bffc3b0d84bb3c7d5b4affd91ad4d433c77817e227d2a47a0e516c5_prof);

        
        $__internal_f302824a5687241074f0ffc627da6d7a5ba768c5378d8e3bc98e50aab08fdcec->leave($__internal_f302824a5687241074f0ffc627da6d7a5ba768c5378d8e3bc98e50aab08fdcec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
