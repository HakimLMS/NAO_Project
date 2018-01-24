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
        $__internal_9a1cae204662e906baca0cf9012f81ac2a8cdc949fd709c03c6bdaf355bd1bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1cae204662e906baca0cf9012f81ac2a8cdc949fd709c03c6bdaf355bd1bd2->enter($__internal_9a1cae204662e906baca0cf9012f81ac2a8cdc949fd709c03c6bdaf355bd1bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ced8b50b0376acc63a4f6fb7562d897aa04b70ab0768ae42dbb249fd761ef209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced8b50b0376acc63a4f6fb7562d897aa04b70ab0768ae42dbb249fd761ef209->enter($__internal_ced8b50b0376acc63a4f6fb7562d897aa04b70ab0768ae42dbb249fd761ef209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9a1cae204662e906baca0cf9012f81ac2a8cdc949fd709c03c6bdaf355bd1bd2->leave($__internal_9a1cae204662e906baca0cf9012f81ac2a8cdc949fd709c03c6bdaf355bd1bd2_prof);

        
        $__internal_ced8b50b0376acc63a4f6fb7562d897aa04b70ab0768ae42dbb249fd761ef209->leave($__internal_ced8b50b0376acc63a4f6fb7562d897aa04b70ab0768ae42dbb249fd761ef209_prof);

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
