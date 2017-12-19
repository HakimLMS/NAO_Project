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
        $__internal_3461ac870e5df18bf51823c35e55238ad29d4328b322600481c67213724ad0ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3461ac870e5df18bf51823c35e55238ad29d4328b322600481c67213724ad0ac->enter($__internal_3461ac870e5df18bf51823c35e55238ad29d4328b322600481c67213724ad0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c30c6a09be3d3e363e4023b22413f70d1f9f9f2bc18f766d87c537f4437a2123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30c6a09be3d3e363e4023b22413f70d1f9f9f2bc18f766d87c537f4437a2123->enter($__internal_c30c6a09be3d3e363e4023b22413f70d1f9f9f2bc18f766d87c537f4437a2123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3461ac870e5df18bf51823c35e55238ad29d4328b322600481c67213724ad0ac->leave($__internal_3461ac870e5df18bf51823c35e55238ad29d4328b322600481c67213724ad0ac_prof);

        
        $__internal_c30c6a09be3d3e363e4023b22413f70d1f9f9f2bc18f766d87c537f4437a2123->leave($__internal_c30c6a09be3d3e363e4023b22413f70d1f9f9f2bc18f766d87c537f4437a2123_prof);

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
