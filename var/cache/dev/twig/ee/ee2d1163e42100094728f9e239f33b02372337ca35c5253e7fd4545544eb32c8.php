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
        $__internal_57a3e3b9d22230667b347fb63e366a1371e8c6dfaa5d10419db3ffdcc311a9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a3e3b9d22230667b347fb63e366a1371e8c6dfaa5d10419db3ffdcc311a9f1->enter($__internal_57a3e3b9d22230667b347fb63e366a1371e8c6dfaa5d10419db3ffdcc311a9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8da8368ce036f01553e2b7547a0d222a2bafd4171cd0027edd8d06fa5878b513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da8368ce036f01553e2b7547a0d222a2bafd4171cd0027edd8d06fa5878b513->enter($__internal_8da8368ce036f01553e2b7547a0d222a2bafd4171cd0027edd8d06fa5878b513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_57a3e3b9d22230667b347fb63e366a1371e8c6dfaa5d10419db3ffdcc311a9f1->leave($__internal_57a3e3b9d22230667b347fb63e366a1371e8c6dfaa5d10419db3ffdcc311a9f1_prof);

        
        $__internal_8da8368ce036f01553e2b7547a0d222a2bafd4171cd0027edd8d06fa5878b513->leave($__internal_8da8368ce036f01553e2b7547a0d222a2bafd4171cd0027edd8d06fa5878b513_prof);

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
