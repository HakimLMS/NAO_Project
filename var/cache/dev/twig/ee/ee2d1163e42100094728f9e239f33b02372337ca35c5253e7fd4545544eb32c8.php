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
        $__internal_62d3cd43e540890eb9a5cc30dfe3eb6d83019eaa7c919b4f4e07c438b7ac3765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d3cd43e540890eb9a5cc30dfe3eb6d83019eaa7c919b4f4e07c438b7ac3765->enter($__internal_62d3cd43e540890eb9a5cc30dfe3eb6d83019eaa7c919b4f4e07c438b7ac3765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9480b7a2b4eba822ad87459c55321d823bf34925a77aeb5292ec5a40a84db43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9480b7a2b4eba822ad87459c55321d823bf34925a77aeb5292ec5a40a84db43b->enter($__internal_9480b7a2b4eba822ad87459c55321d823bf34925a77aeb5292ec5a40a84db43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_62d3cd43e540890eb9a5cc30dfe3eb6d83019eaa7c919b4f4e07c438b7ac3765->leave($__internal_62d3cd43e540890eb9a5cc30dfe3eb6d83019eaa7c919b4f4e07c438b7ac3765_prof);

        
        $__internal_9480b7a2b4eba822ad87459c55321d823bf34925a77aeb5292ec5a40a84db43b->leave($__internal_9480b7a2b4eba822ad87459c55321d823bf34925a77aeb5292ec5a40a84db43b_prof);

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
