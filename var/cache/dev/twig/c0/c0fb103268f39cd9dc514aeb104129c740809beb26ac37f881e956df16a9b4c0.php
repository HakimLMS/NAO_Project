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
        $__internal_b0aeae1d6d6d188a06409fdd38fa7cf359190afde675a35f67c266aa8ba5fe14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0aeae1d6d6d188a06409fdd38fa7cf359190afde675a35f67c266aa8ba5fe14->enter($__internal_b0aeae1d6d6d188a06409fdd38fa7cf359190afde675a35f67c266aa8ba5fe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9afc25b81cbfa21b1ece1ec8c98d5b8fb2e0182eaae5ed8169b112b4c4d2c2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afc25b81cbfa21b1ece1ec8c98d5b8fb2e0182eaae5ed8169b112b4c4d2c2c2->enter($__internal_9afc25b81cbfa21b1ece1ec8c98d5b8fb2e0182eaae5ed8169b112b4c4d2c2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b0aeae1d6d6d188a06409fdd38fa7cf359190afde675a35f67c266aa8ba5fe14->leave($__internal_b0aeae1d6d6d188a06409fdd38fa7cf359190afde675a35f67c266aa8ba5fe14_prof);

        
        $__internal_9afc25b81cbfa21b1ece1ec8c98d5b8fb2e0182eaae5ed8169b112b4c4d2c2c2->leave($__internal_9afc25b81cbfa21b1ece1ec8c98d5b8fb2e0182eaae5ed8169b112b4c4d2c2c2_prof);

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
