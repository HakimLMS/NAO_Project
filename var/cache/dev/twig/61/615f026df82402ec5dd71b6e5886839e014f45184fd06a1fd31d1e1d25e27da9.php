<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a4ef1ff315a5fa70276e5c3bf29c4f6ce6b675723f389dbac3ed2297e138a517 extends Twig_Template
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
        $__internal_4ec9fc02021bc67a2f6255ffa0d12c5e9fbe9da8b55677164dfb18fd64fb5274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec9fc02021bc67a2f6255ffa0d12c5e9fbe9da8b55677164dfb18fd64fb5274->enter($__internal_4ec9fc02021bc67a2f6255ffa0d12c5e9fbe9da8b55677164dfb18fd64fb5274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_8e3375baf2ae281fbfcef2a8dd433a381228e3e5106ce720d48420f616c841b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3375baf2ae281fbfcef2a8dd433a381228e3e5106ce720d48420f616c841b1->enter($__internal_8e3375baf2ae281fbfcef2a8dd433a381228e3e5106ce720d48420f616c841b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4ec9fc02021bc67a2f6255ffa0d12c5e9fbe9da8b55677164dfb18fd64fb5274->leave($__internal_4ec9fc02021bc67a2f6255ffa0d12c5e9fbe9da8b55677164dfb18fd64fb5274_prof);

        
        $__internal_8e3375baf2ae281fbfcef2a8dd433a381228e3e5106ce720d48420f616c841b1->leave($__internal_8e3375baf2ae281fbfcef2a8dd433a381228e3e5106ce720d48420f616c841b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
