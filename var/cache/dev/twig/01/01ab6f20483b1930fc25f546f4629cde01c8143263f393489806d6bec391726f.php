<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_25c6dd6500fc6b430f2197892b94274c86bf89194d8e7bff23268db5afca929c extends Twig_Template
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
        $__internal_11b1c8a4c4e7cb2bc421b5ea766be744eca9b66ed063b1ebcc2f75e60020fc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b1c8a4c4e7cb2bc421b5ea766be744eca9b66ed063b1ebcc2f75e60020fc19->enter($__internal_11b1c8a4c4e7cb2bc421b5ea766be744eca9b66ed063b1ebcc2f75e60020fc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_cb4b66c0a71bdb747a5ad4d7ea561e2c1e82d501095409dc1d4dfb452e93d1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4b66c0a71bdb747a5ad4d7ea561e2c1e82d501095409dc1d4dfb452e93d1c1->enter($__internal_cb4b66c0a71bdb747a5ad4d7ea561e2c1e82d501095409dc1d4dfb452e93d1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_11b1c8a4c4e7cb2bc421b5ea766be744eca9b66ed063b1ebcc2f75e60020fc19->leave($__internal_11b1c8a4c4e7cb2bc421b5ea766be744eca9b66ed063b1ebcc2f75e60020fc19_prof);

        
        $__internal_cb4b66c0a71bdb747a5ad4d7ea561e2c1e82d501095409dc1d4dfb452e93d1c1->leave($__internal_cb4b66c0a71bdb747a5ad4d7ea561e2c1e82d501095409dc1d4dfb452e93d1c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
