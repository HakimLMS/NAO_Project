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
        $__internal_aec9920f26d67dbc59c933cab0c4b296089a74f01e137f6135adca4f98518d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec9920f26d67dbc59c933cab0c4b296089a74f01e137f6135adca4f98518d3b->enter($__internal_aec9920f26d67dbc59c933cab0c4b296089a74f01e137f6135adca4f98518d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_73026635c8128de811b78a309723b45839f574263d7aebf659cf1eaf734ab51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73026635c8128de811b78a309723b45839f574263d7aebf659cf1eaf734ab51a->enter($__internal_73026635c8128de811b78a309723b45839f574263d7aebf659cf1eaf734ab51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_aec9920f26d67dbc59c933cab0c4b296089a74f01e137f6135adca4f98518d3b->leave($__internal_aec9920f26d67dbc59c933cab0c4b296089a74f01e137f6135adca4f98518d3b_prof);

        
        $__internal_73026635c8128de811b78a309723b45839f574263d7aebf659cf1eaf734ab51a->leave($__internal_73026635c8128de811b78a309723b45839f574263d7aebf659cf1eaf734ab51a_prof);

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
