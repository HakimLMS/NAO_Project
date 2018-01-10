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
        $__internal_c3e2159b208297488faaf469d164534c34cea0b04c09f431f4aae8479b35b53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e2159b208297488faaf469d164534c34cea0b04c09f431f4aae8479b35b53c->enter($__internal_c3e2159b208297488faaf469d164534c34cea0b04c09f431f4aae8479b35b53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0699266ba6d0337c7515cff955ea7ea514869a537ed3388fe58355a503851230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0699266ba6d0337c7515cff955ea7ea514869a537ed3388fe58355a503851230->enter($__internal_0699266ba6d0337c7515cff955ea7ea514869a537ed3388fe58355a503851230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c3e2159b208297488faaf469d164534c34cea0b04c09f431f4aae8479b35b53c->leave($__internal_c3e2159b208297488faaf469d164534c34cea0b04c09f431f4aae8479b35b53c_prof);

        
        $__internal_0699266ba6d0337c7515cff955ea7ea514869a537ed3388fe58355a503851230->leave($__internal_0699266ba6d0337c7515cff955ea7ea514869a537ed3388fe58355a503851230_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
