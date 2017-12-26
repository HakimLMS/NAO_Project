<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_701f661fcdd31a865223083f053b5e985d5fb3afddce8051cf300aa6c3714abc extends Twig_Template
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
        $__internal_ffd34295c6466e67f79ce2346ad21df4c36e17886a4c726828956f768f246d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd34295c6466e67f79ce2346ad21df4c36e17886a4c726828956f768f246d0e->enter($__internal_ffd34295c6466e67f79ce2346ad21df4c36e17886a4c726828956f768f246d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_26f0027f6824d23f6712eab634b3dbc016504bc3c67389d01698a133947f023c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f0027f6824d23f6712eab634b3dbc016504bc3c67389d01698a133947f023c->enter($__internal_26f0027f6824d23f6712eab634b3dbc016504bc3c67389d01698a133947f023c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ffd34295c6466e67f79ce2346ad21df4c36e17886a4c726828956f768f246d0e->leave($__internal_ffd34295c6466e67f79ce2346ad21df4c36e17886a4c726828956f768f246d0e_prof);

        
        $__internal_26f0027f6824d23f6712eab634b3dbc016504bc3c67389d01698a133947f023c->leave($__internal_26f0027f6824d23f6712eab634b3dbc016504bc3c67389d01698a133947f023c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
