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
        $__internal_b759a17f267e274c4a7719ee69d37498eec26c9fd827c8331b3f817499dd2f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b759a17f267e274c4a7719ee69d37498eec26c9fd827c8331b3f817499dd2f3e->enter($__internal_b759a17f267e274c4a7719ee69d37498eec26c9fd827c8331b3f817499dd2f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_18031063ff946d88591d1d5c86e61da6b4e8bbcbffeb3185269147d69094c84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18031063ff946d88591d1d5c86e61da6b4e8bbcbffeb3185269147d69094c84c->enter($__internal_18031063ff946d88591d1d5c86e61da6b4e8bbcbffeb3185269147d69094c84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b759a17f267e274c4a7719ee69d37498eec26c9fd827c8331b3f817499dd2f3e->leave($__internal_b759a17f267e274c4a7719ee69d37498eec26c9fd827c8331b3f817499dd2f3e_prof);

        
        $__internal_18031063ff946d88591d1d5c86e61da6b4e8bbcbffeb3185269147d69094c84c->leave($__internal_18031063ff946d88591d1d5c86e61da6b4e8bbcbffeb3185269147d69094c84c_prof);

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
