<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f55db766d1463b2556b290d0956361c7098c61b5f4462088ec68d2da5182c513 extends Twig_Template
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
        $__internal_0743c0931c5abe05d5959770706b87f5bb818f91bdb154b99b9e389377fe035a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0743c0931c5abe05d5959770706b87f5bb818f91bdb154b99b9e389377fe035a->enter($__internal_0743c0931c5abe05d5959770706b87f5bb818f91bdb154b99b9e389377fe035a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f2dbcfec768fa15314147a6cd47d934b69027ec5c4ef646c8fbad2e47bec52fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2dbcfec768fa15314147a6cd47d934b69027ec5c4ef646c8fbad2e47bec52fa->enter($__internal_f2dbcfec768fa15314147a6cd47d934b69027ec5c4ef646c8fbad2e47bec52fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0743c0931c5abe05d5959770706b87f5bb818f91bdb154b99b9e389377fe035a->leave($__internal_0743c0931c5abe05d5959770706b87f5bb818f91bdb154b99b9e389377fe035a_prof);

        
        $__internal_f2dbcfec768fa15314147a6cd47d934b69027ec5c4ef646c8fbad2e47bec52fa->leave($__internal_f2dbcfec768fa15314147a6cd47d934b69027ec5c4ef646c8fbad2e47bec52fa_prof);

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
", "@Framework/Form/form_enctype.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
