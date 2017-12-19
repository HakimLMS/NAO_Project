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
        $__internal_88ca2fc294632b677a4c7ffe7aaadc4b09fa32d6ae5b8ca171fd6e97b699ac35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ca2fc294632b677a4c7ffe7aaadc4b09fa32d6ae5b8ca171fd6e97b699ac35->enter($__internal_88ca2fc294632b677a4c7ffe7aaadc4b09fa32d6ae5b8ca171fd6e97b699ac35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_172b8ebde4b23fcfd3245766a5268774e7c6a94c28d62147ab5eb9546de7e505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172b8ebde4b23fcfd3245766a5268774e7c6a94c28d62147ab5eb9546de7e505->enter($__internal_172b8ebde4b23fcfd3245766a5268774e7c6a94c28d62147ab5eb9546de7e505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_88ca2fc294632b677a4c7ffe7aaadc4b09fa32d6ae5b8ca171fd6e97b699ac35->leave($__internal_88ca2fc294632b677a4c7ffe7aaadc4b09fa32d6ae5b8ca171fd6e97b699ac35_prof);

        
        $__internal_172b8ebde4b23fcfd3245766a5268774e7c6a94c28d62147ab5eb9546de7e505->leave($__internal_172b8ebde4b23fcfd3245766a5268774e7c6a94c28d62147ab5eb9546de7e505_prof);

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
