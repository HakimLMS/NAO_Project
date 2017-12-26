<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b4954f9d844b1631458226410b587b564ece22a6fb27429ea51800a95a5206d5 extends Twig_Template
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
        $__internal_7d3c60f48b1426e462d5de70bc531edf8114c843e10d413706832f6e404082a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3c60f48b1426e462d5de70bc531edf8114c843e10d413706832f6e404082a4->enter($__internal_7d3c60f48b1426e462d5de70bc531edf8114c843e10d413706832f6e404082a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ee6520ce46f7bae7a698691fa99040d7472fb5c69f623aac3b9eef519cc68e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6520ce46f7bae7a698691fa99040d7472fb5c69f623aac3b9eef519cc68e9b->enter($__internal_ee6520ce46f7bae7a698691fa99040d7472fb5c69f623aac3b9eef519cc68e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7d3c60f48b1426e462d5de70bc531edf8114c843e10d413706832f6e404082a4->leave($__internal_7d3c60f48b1426e462d5de70bc531edf8114c843e10d413706832f6e404082a4_prof);

        
        $__internal_ee6520ce46f7bae7a698691fa99040d7472fb5c69f623aac3b9eef519cc68e9b->leave($__internal_ee6520ce46f7bae7a698691fa99040d7472fb5c69f623aac3b9eef519cc68e9b_prof);

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
