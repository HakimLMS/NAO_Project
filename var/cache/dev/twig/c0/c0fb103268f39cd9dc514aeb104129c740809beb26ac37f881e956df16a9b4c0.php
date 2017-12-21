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
        $__internal_0f49333232c2e95accb7be27c896bb8a6fa34e05ec9a820449a33ca923535712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f49333232c2e95accb7be27c896bb8a6fa34e05ec9a820449a33ca923535712->enter($__internal_0f49333232c2e95accb7be27c896bb8a6fa34e05ec9a820449a33ca923535712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ca3560b3d204108ca23bee18540c410d7362c7895808f13487a5e543d02ecfc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3560b3d204108ca23bee18540c410d7362c7895808f13487a5e543d02ecfc2->enter($__internal_ca3560b3d204108ca23bee18540c410d7362c7895808f13487a5e543d02ecfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0f49333232c2e95accb7be27c896bb8a6fa34e05ec9a820449a33ca923535712->leave($__internal_0f49333232c2e95accb7be27c896bb8a6fa34e05ec9a820449a33ca923535712_prof);

        
        $__internal_ca3560b3d204108ca23bee18540c410d7362c7895808f13487a5e543d02ecfc2->leave($__internal_ca3560b3d204108ca23bee18540c410d7362c7895808f13487a5e543d02ecfc2_prof);

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
