<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2801eb251d4aefb798ff649cf0d600f09869ec165956b272fa833146214f8e55 extends Twig_Template
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
        $__internal_968dac081a6ed84b3c5ebfc6f8a896fdb67e6bdbd770359531cb305079a03265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968dac081a6ed84b3c5ebfc6f8a896fdb67e6bdbd770359531cb305079a03265->enter($__internal_968dac081a6ed84b3c5ebfc6f8a896fdb67e6bdbd770359531cb305079a03265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c76d4328b8a7f20a9276ec72cbc913e8a2185e20f191cdfdb187fe3f56592565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76d4328b8a7f20a9276ec72cbc913e8a2185e20f191cdfdb187fe3f56592565->enter($__internal_c76d4328b8a7f20a9276ec72cbc913e8a2185e20f191cdfdb187fe3f56592565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_968dac081a6ed84b3c5ebfc6f8a896fdb67e6bdbd770359531cb305079a03265->leave($__internal_968dac081a6ed84b3c5ebfc6f8a896fdb67e6bdbd770359531cb305079a03265_prof);

        
        $__internal_c76d4328b8a7f20a9276ec72cbc913e8a2185e20f191cdfdb187fe3f56592565->leave($__internal_c76d4328b8a7f20a9276ec72cbc913e8a2185e20f191cdfdb187fe3f56592565_prof);

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
