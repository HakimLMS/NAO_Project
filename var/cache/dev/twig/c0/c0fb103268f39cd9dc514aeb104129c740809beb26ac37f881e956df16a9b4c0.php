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
        $__internal_ead53da90e20d6ab506e08378b8334b93f91af1ef485114e4c24d6ba538530da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead53da90e20d6ab506e08378b8334b93f91af1ef485114e4c24d6ba538530da->enter($__internal_ead53da90e20d6ab506e08378b8334b93f91af1ef485114e4c24d6ba538530da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_669cd646dbe3b407b3908ef8cedb6f9999f6299a36fab041c0fa3f81a64e697e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669cd646dbe3b407b3908ef8cedb6f9999f6299a36fab041c0fa3f81a64e697e->enter($__internal_669cd646dbe3b407b3908ef8cedb6f9999f6299a36fab041c0fa3f81a64e697e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ead53da90e20d6ab506e08378b8334b93f91af1ef485114e4c24d6ba538530da->leave($__internal_ead53da90e20d6ab506e08378b8334b93f91af1ef485114e4c24d6ba538530da_prof);

        
        $__internal_669cd646dbe3b407b3908ef8cedb6f9999f6299a36fab041c0fa3f81a64e697e->leave($__internal_669cd646dbe3b407b3908ef8cedb6f9999f6299a36fab041c0fa3f81a64e697e_prof);

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
