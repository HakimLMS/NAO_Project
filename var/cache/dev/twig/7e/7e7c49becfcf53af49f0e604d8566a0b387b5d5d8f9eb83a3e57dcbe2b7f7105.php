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
        $__internal_77398f3470ecd69df951db27527448a0388669be11e541a34d9039a53c770ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77398f3470ecd69df951db27527448a0388669be11e541a34d9039a53c770ad8->enter($__internal_77398f3470ecd69df951db27527448a0388669be11e541a34d9039a53c770ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4ae9f66be498b22eb29b3a0056647b60f90ccf701a9278df287241a53e1aa80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae9f66be498b22eb29b3a0056647b60f90ccf701a9278df287241a53e1aa80b->enter($__internal_4ae9f66be498b22eb29b3a0056647b60f90ccf701a9278df287241a53e1aa80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_77398f3470ecd69df951db27527448a0388669be11e541a34d9039a53c770ad8->leave($__internal_77398f3470ecd69df951db27527448a0388669be11e541a34d9039a53c770ad8_prof);

        
        $__internal_4ae9f66be498b22eb29b3a0056647b60f90ccf701a9278df287241a53e1aa80b->leave($__internal_4ae9f66be498b22eb29b3a0056647b60f90ccf701a9278df287241a53e1aa80b_prof);

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
