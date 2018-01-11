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
        $__internal_cbb4255178fcf63d0c0b2ad9126488625c875793fdec00bc5315eb225fb5645a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb4255178fcf63d0c0b2ad9126488625c875793fdec00bc5315eb225fb5645a->enter($__internal_cbb4255178fcf63d0c0b2ad9126488625c875793fdec00bc5315eb225fb5645a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_fcf2289c343bb636da3422434f737f69fc3957832e1beb5e008dc08c81e331bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf2289c343bb636da3422434f737f69fc3957832e1beb5e008dc08c81e331bf->enter($__internal_fcf2289c343bb636da3422434f737f69fc3957832e1beb5e008dc08c81e331bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_cbb4255178fcf63d0c0b2ad9126488625c875793fdec00bc5315eb225fb5645a->leave($__internal_cbb4255178fcf63d0c0b2ad9126488625c875793fdec00bc5315eb225fb5645a_prof);

        
        $__internal_fcf2289c343bb636da3422434f737f69fc3957832e1beb5e008dc08c81e331bf->leave($__internal_fcf2289c343bb636da3422434f737f69fc3957832e1beb5e008dc08c81e331bf_prof);

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
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
