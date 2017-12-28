<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_41746329882c6bf46ed3556061310d163cfc2a114b4a8f1a6418f324b078adcb extends Twig_Template
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
        $__internal_5f281c7b1ea41b0a42b51e0452c199c9dc7ff26249c4d97bbd9a5b3dc66b48dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f281c7b1ea41b0a42b51e0452c199c9dc7ff26249c4d97bbd9a5b3dc66b48dc->enter($__internal_5f281c7b1ea41b0a42b51e0452c199c9dc7ff26249c4d97bbd9a5b3dc66b48dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_10f8f167861f8b20d63f1cfb5bb7475257c08557cfa398573605517619bd75a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f8f167861f8b20d63f1cfb5bb7475257c08557cfa398573605517619bd75a5->enter($__internal_10f8f167861f8b20d63f1cfb5bb7475257c08557cfa398573605517619bd75a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_5f281c7b1ea41b0a42b51e0452c199c9dc7ff26249c4d97bbd9a5b3dc66b48dc->leave($__internal_5f281c7b1ea41b0a42b51e0452c199c9dc7ff26249c4d97bbd9a5b3dc66b48dc_prof);

        
        $__internal_10f8f167861f8b20d63f1cfb5bb7475257c08557cfa398573605517619bd75a5->leave($__internal_10f8f167861f8b20d63f1cfb5bb7475257c08557cfa398573605517619bd75a5_prof);

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
