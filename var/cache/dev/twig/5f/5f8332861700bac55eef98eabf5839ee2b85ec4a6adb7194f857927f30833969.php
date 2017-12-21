<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_653b3a902c2757f5e6004712ee426b53f84164542345fe1282b611824d56680c extends Twig_Template
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
        $__internal_cbb628ee6f76d7ef1ca7d08ab91a70fd2eb0e5a21e3c52030d480640288bf92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb628ee6f76d7ef1ca7d08ab91a70fd2eb0e5a21e3c52030d480640288bf92a->enter($__internal_cbb628ee6f76d7ef1ca7d08ab91a70fd2eb0e5a21e3c52030d480640288bf92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f78633fcbead196dd6093b43942d0694766f4f60ab8d12bffbdb4eeb10618e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78633fcbead196dd6093b43942d0694766f4f60ab8d12bffbdb4eeb10618e8e->enter($__internal_f78633fcbead196dd6093b43942d0694766f4f60ab8d12bffbdb4eeb10618e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cbb628ee6f76d7ef1ca7d08ab91a70fd2eb0e5a21e3c52030d480640288bf92a->leave($__internal_cbb628ee6f76d7ef1ca7d08ab91a70fd2eb0e5a21e3c52030d480640288bf92a_prof);

        
        $__internal_f78633fcbead196dd6093b43942d0694766f4f60ab8d12bffbdb4eeb10618e8e->leave($__internal_f78633fcbead196dd6093b43942d0694766f4f60ab8d12bffbdb4eeb10618e8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
