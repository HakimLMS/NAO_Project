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
        $__internal_cdf1820e02f8f16d337155b4d5c250d29a7f202a8b45a975c847377029bd0fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf1820e02f8f16d337155b4d5c250d29a7f202a8b45a975c847377029bd0fec->enter($__internal_cdf1820e02f8f16d337155b4d5c250d29a7f202a8b45a975c847377029bd0fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a9319d8348adf245cb073b7ab1e487774feee9f99caf4eea369f3566504e2653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9319d8348adf245cb073b7ab1e487774feee9f99caf4eea369f3566504e2653->enter($__internal_a9319d8348adf245cb073b7ab1e487774feee9f99caf4eea369f3566504e2653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cdf1820e02f8f16d337155b4d5c250d29a7f202a8b45a975c847377029bd0fec->leave($__internal_cdf1820e02f8f16d337155b4d5c250d29a7f202a8b45a975c847377029bd0fec_prof);

        
        $__internal_a9319d8348adf245cb073b7ab1e487774feee9f99caf4eea369f3566504e2653->leave($__internal_a9319d8348adf245cb073b7ab1e487774feee9f99caf4eea369f3566504e2653_prof);

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
", "@Framework/Form/form_rows.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
