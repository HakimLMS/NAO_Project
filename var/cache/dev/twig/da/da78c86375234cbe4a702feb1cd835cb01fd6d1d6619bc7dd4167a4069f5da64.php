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
        $__internal_566c335d7b7c7ee985403b41cc0a00140a90e10b9f1ac2394c11dde3b6a07275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566c335d7b7c7ee985403b41cc0a00140a90e10b9f1ac2394c11dde3b6a07275->enter($__internal_566c335d7b7c7ee985403b41cc0a00140a90e10b9f1ac2394c11dde3b6a07275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f7a21a409f13dec9a93481786d31ace4f6a74226e1af8a3b18bde35dd0eecb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a21a409f13dec9a93481786d31ace4f6a74226e1af8a3b18bde35dd0eecb39->enter($__internal_f7a21a409f13dec9a93481786d31ace4f6a74226e1af8a3b18bde35dd0eecb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_566c335d7b7c7ee985403b41cc0a00140a90e10b9f1ac2394c11dde3b6a07275->leave($__internal_566c335d7b7c7ee985403b41cc0a00140a90e10b9f1ac2394c11dde3b6a07275_prof);

        
        $__internal_f7a21a409f13dec9a93481786d31ace4f6a74226e1af8a3b18bde35dd0eecb39->leave($__internal_f7a21a409f13dec9a93481786d31ace4f6a74226e1af8a3b18bde35dd0eecb39_prof);

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
