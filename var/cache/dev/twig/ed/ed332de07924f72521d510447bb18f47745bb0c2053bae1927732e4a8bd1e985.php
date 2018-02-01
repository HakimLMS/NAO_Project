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
        $__internal_e81121a3f75260a0420f7c2b938a038e98632d7744b0761adec234dd7578ebde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81121a3f75260a0420f7c2b938a038e98632d7744b0761adec234dd7578ebde->enter($__internal_e81121a3f75260a0420f7c2b938a038e98632d7744b0761adec234dd7578ebde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_6c9ac03ced9e8b3c7d79e8037116dff62fb897490a184312fc644bab4f0cdd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9ac03ced9e8b3c7d79e8037116dff62fb897490a184312fc644bab4f0cdd06->enter($__internal_6c9ac03ced9e8b3c7d79e8037116dff62fb897490a184312fc644bab4f0cdd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e81121a3f75260a0420f7c2b938a038e98632d7744b0761adec234dd7578ebde->leave($__internal_e81121a3f75260a0420f7c2b938a038e98632d7744b0761adec234dd7578ebde_prof);

        
        $__internal_6c9ac03ced9e8b3c7d79e8037116dff62fb897490a184312fc644bab4f0cdd06->leave($__internal_6c9ac03ced9e8b3c7d79e8037116dff62fb897490a184312fc644bab4f0cdd06_prof);

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
