<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_12c43f5b48cd5fb54c36765ceb62eb52409ca7c856516a0dbc527758a0bd91c4 extends Twig_Template
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
        $__internal_7ccf97020b737e99874233a0da486743e7af2a4a8d224219265104c34771e0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ccf97020b737e99874233a0da486743e7af2a4a8d224219265104c34771e0e9->enter($__internal_7ccf97020b737e99874233a0da486743e7af2a4a8d224219265104c34771e0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_05d8fa1708f5b3612391b95542da8851b223988b7d1f1d60d809d9f80c7d145f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d8fa1708f5b3612391b95542da8851b223988b7d1f1d60d809d9f80c7d145f->enter($__internal_05d8fa1708f5b3612391b95542da8851b223988b7d1f1d60d809d9f80c7d145f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7ccf97020b737e99874233a0da486743e7af2a4a8d224219265104c34771e0e9->leave($__internal_7ccf97020b737e99874233a0da486743e7af2a4a8d224219265104c34771e0e9_prof);

        
        $__internal_05d8fa1708f5b3612391b95542da8851b223988b7d1f1d60d809d9f80c7d145f->leave($__internal_05d8fa1708f5b3612391b95542da8851b223988b7d1f1d60d809d9f80c7d145f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
