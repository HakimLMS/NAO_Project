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
        $__internal_b12b3de545469971908d4d0a2b2d8351244c8a72bb344d9192d6105223ed7fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12b3de545469971908d4d0a2b2d8351244c8a72bb344d9192d6105223ed7fde->enter($__internal_b12b3de545469971908d4d0a2b2d8351244c8a72bb344d9192d6105223ed7fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6571bb8792d05fa938a5bbb9b0a3cfbd361ed70b2e44455ab8b54688159aa1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6571bb8792d05fa938a5bbb9b0a3cfbd361ed70b2e44455ab8b54688159aa1ab->enter($__internal_6571bb8792d05fa938a5bbb9b0a3cfbd361ed70b2e44455ab8b54688159aa1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b12b3de545469971908d4d0a2b2d8351244c8a72bb344d9192d6105223ed7fde->leave($__internal_b12b3de545469971908d4d0a2b2d8351244c8a72bb344d9192d6105223ed7fde_prof);

        
        $__internal_6571bb8792d05fa938a5bbb9b0a3cfbd361ed70b2e44455ab8b54688159aa1ab->leave($__internal_6571bb8792d05fa938a5bbb9b0a3cfbd361ed70b2e44455ab8b54688159aa1ab_prof);

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
