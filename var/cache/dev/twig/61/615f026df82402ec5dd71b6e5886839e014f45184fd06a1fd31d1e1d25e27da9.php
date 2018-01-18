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
        $__internal_1f4563e3c69d48538da25f7e150844147a4d9f9f9c0a62030dc66344c901938f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4563e3c69d48538da25f7e150844147a4d9f9f9c0a62030dc66344c901938f->enter($__internal_1f4563e3c69d48538da25f7e150844147a4d9f9f9c0a62030dc66344c901938f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c08c1787f228df9ac969d669932dc32834584386fbbfc7560c584d11583a2357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08c1787f228df9ac969d669932dc32834584386fbbfc7560c584d11583a2357->enter($__internal_c08c1787f228df9ac969d669932dc32834584386fbbfc7560c584d11583a2357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_1f4563e3c69d48538da25f7e150844147a4d9f9f9c0a62030dc66344c901938f->leave($__internal_1f4563e3c69d48538da25f7e150844147a4d9f9f9c0a62030dc66344c901938f_prof);

        
        $__internal_c08c1787f228df9ac969d669932dc32834584386fbbfc7560c584d11583a2357->leave($__internal_c08c1787f228df9ac969d669932dc32834584386fbbfc7560c584d11583a2357_prof);

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
