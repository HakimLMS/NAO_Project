<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9fd3c39394b87ea2b209f9460120e7a33707c7bb4e262d46ac0ac45d61c717af extends Twig_Template
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
        $__internal_a0d60f4de61d26eefbbf1624622932262d005b246891253d11e3749689369102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d60f4de61d26eefbbf1624622932262d005b246891253d11e3749689369102->enter($__internal_a0d60f4de61d26eefbbf1624622932262d005b246891253d11e3749689369102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6e38bcdd0004203ca3db1820fd44f429439e86ff5ad001db3a4346e62303e0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e38bcdd0004203ca3db1820fd44f429439e86ff5ad001db3a4346e62303e0f6->enter($__internal_6e38bcdd0004203ca3db1820fd44f429439e86ff5ad001db3a4346e62303e0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a0d60f4de61d26eefbbf1624622932262d005b246891253d11e3749689369102->leave($__internal_a0d60f4de61d26eefbbf1624622932262d005b246891253d11e3749689369102_prof);

        
        $__internal_6e38bcdd0004203ca3db1820fd44f429439e86ff5ad001db3a4346e62303e0f6->leave($__internal_6e38bcdd0004203ca3db1820fd44f429439e86ff5ad001db3a4346e62303e0f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
