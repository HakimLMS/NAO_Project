<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e6f6d26453be800602cf8b4c1fb154d33c4d877ecdde439de867574d9c2b2b57 extends Twig_Template
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
        $__internal_276bec48c78208f29ce303b4da3ed3cda5972e3be0c78f6db2e743f006f2cb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276bec48c78208f29ce303b4da3ed3cda5972e3be0c78f6db2e743f006f2cb99->enter($__internal_276bec48c78208f29ce303b4da3ed3cda5972e3be0c78f6db2e743f006f2cb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e6ed0360bdaecff89cbb3a87412b01dd235f5c2c26c975c3d74fbcb09a6e6ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ed0360bdaecff89cbb3a87412b01dd235f5c2c26c975c3d74fbcb09a6e6ba6->enter($__internal_e6ed0360bdaecff89cbb3a87412b01dd235f5c2c26c975c3d74fbcb09a6e6ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_276bec48c78208f29ce303b4da3ed3cda5972e3be0c78f6db2e743f006f2cb99->leave($__internal_276bec48c78208f29ce303b4da3ed3cda5972e3be0c78f6db2e743f006f2cb99_prof);

        
        $__internal_e6ed0360bdaecff89cbb3a87412b01dd235f5c2c26c975c3d74fbcb09a6e6ba6->leave($__internal_e6ed0360bdaecff89cbb3a87412b01dd235f5c2c26c975c3d74fbcb09a6e6ba6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
