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
        $__internal_1764dc2edb39bffe2bfb0efe71f3ab57a8602be2a53fe9bf2e007222a81bd48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1764dc2edb39bffe2bfb0efe71f3ab57a8602be2a53fe9bf2e007222a81bd48d->enter($__internal_1764dc2edb39bffe2bfb0efe71f3ab57a8602be2a53fe9bf2e007222a81bd48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8303b9c0c3fd53b6a603f851eeaaf7ed7dde2746264e38c3a25f65d2ed9574ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8303b9c0c3fd53b6a603f851eeaaf7ed7dde2746264e38c3a25f65d2ed9574ce->enter($__internal_8303b9c0c3fd53b6a603f851eeaaf7ed7dde2746264e38c3a25f65d2ed9574ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1764dc2edb39bffe2bfb0efe71f3ab57a8602be2a53fe9bf2e007222a81bd48d->leave($__internal_1764dc2edb39bffe2bfb0efe71f3ab57a8602be2a53fe9bf2e007222a81bd48d_prof);

        
        $__internal_8303b9c0c3fd53b6a603f851eeaaf7ed7dde2746264e38c3a25f65d2ed9574ce->leave($__internal_8303b9c0c3fd53b6a603f851eeaaf7ed7dde2746264e38c3a25f65d2ed9574ce_prof);

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
