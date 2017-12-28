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
        $__internal_a4ed1f29771c42a40211b21b28307111b35d11584f6010e8e58164ba040f047f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ed1f29771c42a40211b21b28307111b35d11584f6010e8e58164ba040f047f->enter($__internal_a4ed1f29771c42a40211b21b28307111b35d11584f6010e8e58164ba040f047f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c171d3d2fd0a388ba5c3741bd86a27d167d9785a7a286e7dfa9c6eb4884ae840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c171d3d2fd0a388ba5c3741bd86a27d167d9785a7a286e7dfa9c6eb4884ae840->enter($__internal_c171d3d2fd0a388ba5c3741bd86a27d167d9785a7a286e7dfa9c6eb4884ae840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a4ed1f29771c42a40211b21b28307111b35d11584f6010e8e58164ba040f047f->leave($__internal_a4ed1f29771c42a40211b21b28307111b35d11584f6010e8e58164ba040f047f_prof);

        
        $__internal_c171d3d2fd0a388ba5c3741bd86a27d167d9785a7a286e7dfa9c6eb4884ae840->leave($__internal_c171d3d2fd0a388ba5c3741bd86a27d167d9785a7a286e7dfa9c6eb4884ae840_prof);

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
