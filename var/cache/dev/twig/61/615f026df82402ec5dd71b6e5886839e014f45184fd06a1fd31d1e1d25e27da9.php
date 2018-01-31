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
        $__internal_122eb20d8ffa4c17ae1519fcfac3d3cf9ff1aea10ad2cdc294b6b275fbcf537d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122eb20d8ffa4c17ae1519fcfac3d3cf9ff1aea10ad2cdc294b6b275fbcf537d->enter($__internal_122eb20d8ffa4c17ae1519fcfac3d3cf9ff1aea10ad2cdc294b6b275fbcf537d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_252a880d99e65376d4862c242eab5fa82e28a2d9db552cdad20348bc9777eda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252a880d99e65376d4862c242eab5fa82e28a2d9db552cdad20348bc9777eda5->enter($__internal_252a880d99e65376d4862c242eab5fa82e28a2d9db552cdad20348bc9777eda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_122eb20d8ffa4c17ae1519fcfac3d3cf9ff1aea10ad2cdc294b6b275fbcf537d->leave($__internal_122eb20d8ffa4c17ae1519fcfac3d3cf9ff1aea10ad2cdc294b6b275fbcf537d_prof);

        
        $__internal_252a880d99e65376d4862c242eab5fa82e28a2d9db552cdad20348bc9777eda5->leave($__internal_252a880d99e65376d4862c242eab5fa82e28a2d9db552cdad20348bc9777eda5_prof);

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
