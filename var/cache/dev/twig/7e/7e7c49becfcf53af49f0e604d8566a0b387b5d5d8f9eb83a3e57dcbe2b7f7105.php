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
        $__internal_c8b3ee16d2bf25f166981ab6a0d46b349bb325ba2fff1c054329cbd66611fc3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b3ee16d2bf25f166981ab6a0d46b349bb325ba2fff1c054329cbd66611fc3c->enter($__internal_c8b3ee16d2bf25f166981ab6a0d46b349bb325ba2fff1c054329cbd66611fc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c993e5f8d16bd8cb817cc349ae06f68a2187597c3f156f382233602f08c4c289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c993e5f8d16bd8cb817cc349ae06f68a2187597c3f156f382233602f08c4c289->enter($__internal_c993e5f8d16bd8cb817cc349ae06f68a2187597c3f156f382233602f08c4c289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c8b3ee16d2bf25f166981ab6a0d46b349bb325ba2fff1c054329cbd66611fc3c->leave($__internal_c8b3ee16d2bf25f166981ab6a0d46b349bb325ba2fff1c054329cbd66611fc3c_prof);

        
        $__internal_c993e5f8d16bd8cb817cc349ae06f68a2187597c3f156f382233602f08c4c289->leave($__internal_c993e5f8d16bd8cb817cc349ae06f68a2187597c3f156f382233602f08c4c289_prof);

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
