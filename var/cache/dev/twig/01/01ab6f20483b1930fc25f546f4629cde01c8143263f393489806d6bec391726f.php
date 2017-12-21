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
        $__internal_35cfb873f196ae34fd10d676cdc63197116c130344a16d4558a34f49e7a9592c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cfb873f196ae34fd10d676cdc63197116c130344a16d4558a34f49e7a9592c->enter($__internal_35cfb873f196ae34fd10d676cdc63197116c130344a16d4558a34f49e7a9592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d09fa457243e2f2c579ffc9a0d8972b69fc687eaf39fef70dbc99cc2bbc2cfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09fa457243e2f2c579ffc9a0d8972b69fc687eaf39fef70dbc99cc2bbc2cfaa->enter($__internal_d09fa457243e2f2c579ffc9a0d8972b69fc687eaf39fef70dbc99cc2bbc2cfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_35cfb873f196ae34fd10d676cdc63197116c130344a16d4558a34f49e7a9592c->leave($__internal_35cfb873f196ae34fd10d676cdc63197116c130344a16d4558a34f49e7a9592c_prof);

        
        $__internal_d09fa457243e2f2c579ffc9a0d8972b69fc687eaf39fef70dbc99cc2bbc2cfaa->leave($__internal_d09fa457243e2f2c579ffc9a0d8972b69fc687eaf39fef70dbc99cc2bbc2cfaa_prof);

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
