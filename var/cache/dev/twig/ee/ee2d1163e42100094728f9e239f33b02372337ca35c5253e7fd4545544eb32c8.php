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
        $__internal_1b3262f84d67b5ae5a0441720f3763cd645d4d3103f9e08b1fddba9e1b1ebbda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3262f84d67b5ae5a0441720f3763cd645d4d3103f9e08b1fddba9e1b1ebbda->enter($__internal_1b3262f84d67b5ae5a0441720f3763cd645d4d3103f9e08b1fddba9e1b1ebbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5dbd3168b1b5a757282525e2af23cbab59ce7fe0651c904cbec1f669214c526e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbd3168b1b5a757282525e2af23cbab59ce7fe0651c904cbec1f669214c526e->enter($__internal_5dbd3168b1b5a757282525e2af23cbab59ce7fe0651c904cbec1f669214c526e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1b3262f84d67b5ae5a0441720f3763cd645d4d3103f9e08b1fddba9e1b1ebbda->leave($__internal_1b3262f84d67b5ae5a0441720f3763cd645d4d3103f9e08b1fddba9e1b1ebbda_prof);

        
        $__internal_5dbd3168b1b5a757282525e2af23cbab59ce7fe0651c904cbec1f669214c526e->leave($__internal_5dbd3168b1b5a757282525e2af23cbab59ce7fe0651c904cbec1f669214c526e_prof);

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
