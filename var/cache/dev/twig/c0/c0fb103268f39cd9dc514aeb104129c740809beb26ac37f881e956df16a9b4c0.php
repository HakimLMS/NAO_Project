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
        $__internal_0894f5166dba344dfaf4e77ebc32ab2afc5aebf39d7fc6dfb0b58c77750675c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0894f5166dba344dfaf4e77ebc32ab2afc5aebf39d7fc6dfb0b58c77750675c1->enter($__internal_0894f5166dba344dfaf4e77ebc32ab2afc5aebf39d7fc6dfb0b58c77750675c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ab41693047e629f8e9ae7e78c39713985eca1525a377c7c3089d95f849a78f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab41693047e629f8e9ae7e78c39713985eca1525a377c7c3089d95f849a78f13->enter($__internal_ab41693047e629f8e9ae7e78c39713985eca1525a377c7c3089d95f849a78f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0894f5166dba344dfaf4e77ebc32ab2afc5aebf39d7fc6dfb0b58c77750675c1->leave($__internal_0894f5166dba344dfaf4e77ebc32ab2afc5aebf39d7fc6dfb0b58c77750675c1_prof);

        
        $__internal_ab41693047e629f8e9ae7e78c39713985eca1525a377c7c3089d95f849a78f13->leave($__internal_ab41693047e629f8e9ae7e78c39713985eca1525a377c7c3089d95f849a78f13_prof);

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
