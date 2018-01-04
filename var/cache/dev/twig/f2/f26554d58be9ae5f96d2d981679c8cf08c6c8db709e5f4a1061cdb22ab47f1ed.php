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
        $__internal_fda3e2fbdae971138dfeaf6646ba9daa38d42e1fcfa35952c575df29da1e1d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda3e2fbdae971138dfeaf6646ba9daa38d42e1fcfa35952c575df29da1e1d89->enter($__internal_fda3e2fbdae971138dfeaf6646ba9daa38d42e1fcfa35952c575df29da1e1d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_23ac41351c9984adfc803053ccb153343700ebe44d4f9b26a0af15e0f3b3624d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ac41351c9984adfc803053ccb153343700ebe44d4f9b26a0af15e0f3b3624d->enter($__internal_23ac41351c9984adfc803053ccb153343700ebe44d4f9b26a0af15e0f3b3624d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_fda3e2fbdae971138dfeaf6646ba9daa38d42e1fcfa35952c575df29da1e1d89->leave($__internal_fda3e2fbdae971138dfeaf6646ba9daa38d42e1fcfa35952c575df29da1e1d89_prof);

        
        $__internal_23ac41351c9984adfc803053ccb153343700ebe44d4f9b26a0af15e0f3b3624d->leave($__internal_23ac41351c9984adfc803053ccb153343700ebe44d4f9b26a0af15e0f3b3624d_prof);

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
