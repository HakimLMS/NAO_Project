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
        $__internal_338e085754bcf5497658f02d3895c89f515c57d92a0f8f6b55bcb07f43720dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338e085754bcf5497658f02d3895c89f515c57d92a0f8f6b55bcb07f43720dbc->enter($__internal_338e085754bcf5497658f02d3895c89f515c57d92a0f8f6b55bcb07f43720dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9527572ffd6d0794cdb0aa1b706977ce61ca59444e578f25d2cd14a6a5d03679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9527572ffd6d0794cdb0aa1b706977ce61ca59444e578f25d2cd14a6a5d03679->enter($__internal_9527572ffd6d0794cdb0aa1b706977ce61ca59444e578f25d2cd14a6a5d03679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_338e085754bcf5497658f02d3895c89f515c57d92a0f8f6b55bcb07f43720dbc->leave($__internal_338e085754bcf5497658f02d3895c89f515c57d92a0f8f6b55bcb07f43720dbc_prof);

        
        $__internal_9527572ffd6d0794cdb0aa1b706977ce61ca59444e578f25d2cd14a6a5d03679->leave($__internal_9527572ffd6d0794cdb0aa1b706977ce61ca59444e578f25d2cd14a6a5d03679_prof);

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
