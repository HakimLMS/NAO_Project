<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_286204f273c27b110e8d27338efdddde2d06fe323cd4174b4cab74ff6a28cc0a extends Twig_Template
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
        $__internal_651102b1c0cc9f85a4f9e6205f6c45537afc0f4162f0a5ebc33411d9c80c76df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651102b1c0cc9f85a4f9e6205f6c45537afc0f4162f0a5ebc33411d9c80c76df->enter($__internal_651102b1c0cc9f85a4f9e6205f6c45537afc0f4162f0a5ebc33411d9c80c76df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_3d063a36bb5153e48c342f845dec2052ae0a1f94cb2697f06e52f0b30d1ae44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d063a36bb5153e48c342f845dec2052ae0a1f94cb2697f06e52f0b30d1ae44f->enter($__internal_3d063a36bb5153e48c342f845dec2052ae0a1f94cb2697f06e52f0b30d1ae44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_651102b1c0cc9f85a4f9e6205f6c45537afc0f4162f0a5ebc33411d9c80c76df->leave($__internal_651102b1c0cc9f85a4f9e6205f6c45537afc0f4162f0a5ebc33411d9c80c76df_prof);

        
        $__internal_3d063a36bb5153e48c342f845dec2052ae0a1f94cb2697f06e52f0b30d1ae44f->leave($__internal_3d063a36bb5153e48c342f845dec2052ae0a1f94cb2697f06e52f0b30d1ae44f_prof);

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
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
