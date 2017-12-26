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
        $__internal_bb4d0f6b14aebb9a51cf55010f0a75b94d15768d0b846c55b192cf36508e965e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4d0f6b14aebb9a51cf55010f0a75b94d15768d0b846c55b192cf36508e965e->enter($__internal_bb4d0f6b14aebb9a51cf55010f0a75b94d15768d0b846c55b192cf36508e965e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e745ce5492626b2b2364849cf45df25b958085bab99251c13df2ecaf7fbf4506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e745ce5492626b2b2364849cf45df25b958085bab99251c13df2ecaf7fbf4506->enter($__internal_e745ce5492626b2b2364849cf45df25b958085bab99251c13df2ecaf7fbf4506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_bb4d0f6b14aebb9a51cf55010f0a75b94d15768d0b846c55b192cf36508e965e->leave($__internal_bb4d0f6b14aebb9a51cf55010f0a75b94d15768d0b846c55b192cf36508e965e_prof);

        
        $__internal_e745ce5492626b2b2364849cf45df25b958085bab99251c13df2ecaf7fbf4506->leave($__internal_e745ce5492626b2b2364849cf45df25b958085bab99251c13df2ecaf7fbf4506_prof);

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
