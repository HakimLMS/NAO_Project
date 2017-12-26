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
        $__internal_ae20ca85dfeeb023e69e0acd21ce40b5899ed6a3dc57ab31cb8a5c036e4b0e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae20ca85dfeeb023e69e0acd21ce40b5899ed6a3dc57ab31cb8a5c036e4b0e1c->enter($__internal_ae20ca85dfeeb023e69e0acd21ce40b5899ed6a3dc57ab31cb8a5c036e4b0e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_24b7ddaa39c57ff404a554de9576c817a669a123629b60a1ccb64effc9ba2157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b7ddaa39c57ff404a554de9576c817a669a123629b60a1ccb64effc9ba2157->enter($__internal_24b7ddaa39c57ff404a554de9576c817a669a123629b60a1ccb64effc9ba2157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_ae20ca85dfeeb023e69e0acd21ce40b5899ed6a3dc57ab31cb8a5c036e4b0e1c->leave($__internal_ae20ca85dfeeb023e69e0acd21ce40b5899ed6a3dc57ab31cb8a5c036e4b0e1c_prof);

        
        $__internal_24b7ddaa39c57ff404a554de9576c817a669a123629b60a1ccb64effc9ba2157->leave($__internal_24b7ddaa39c57ff404a554de9576c817a669a123629b60a1ccb64effc9ba2157_prof);

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
