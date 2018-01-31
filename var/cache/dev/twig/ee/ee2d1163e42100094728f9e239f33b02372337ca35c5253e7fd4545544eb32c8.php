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
        $__internal_e281a90f9a4748b3c2fbfb9296645f5bd0541a50e098eac97714d97a2af36ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e281a90f9a4748b3c2fbfb9296645f5bd0541a50e098eac97714d97a2af36ae9->enter($__internal_e281a90f9a4748b3c2fbfb9296645f5bd0541a50e098eac97714d97a2af36ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_55e97f190b101bb805fc89b56431dd617227681b82135964c134e5013f2fef88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e97f190b101bb805fc89b56431dd617227681b82135964c134e5013f2fef88->enter($__internal_55e97f190b101bb805fc89b56431dd617227681b82135964c134e5013f2fef88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e281a90f9a4748b3c2fbfb9296645f5bd0541a50e098eac97714d97a2af36ae9->leave($__internal_e281a90f9a4748b3c2fbfb9296645f5bd0541a50e098eac97714d97a2af36ae9_prof);

        
        $__internal_55e97f190b101bb805fc89b56431dd617227681b82135964c134e5013f2fef88->leave($__internal_55e97f190b101bb805fc89b56431dd617227681b82135964c134e5013f2fef88_prof);

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
