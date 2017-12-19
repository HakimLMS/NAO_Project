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
        $__internal_04ad8e939c5af380ce96572947092080811a2305ab2092936b5b52ccdaadf8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ad8e939c5af380ce96572947092080811a2305ab2092936b5b52ccdaadf8bf->enter($__internal_04ad8e939c5af380ce96572947092080811a2305ab2092936b5b52ccdaadf8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_486cc5f1e33f3debc106f9bafdb9bc05a22837001086b00a9661877ae26a3c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486cc5f1e33f3debc106f9bafdb9bc05a22837001086b00a9661877ae26a3c37->enter($__internal_486cc5f1e33f3debc106f9bafdb9bc05a22837001086b00a9661877ae26a3c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_04ad8e939c5af380ce96572947092080811a2305ab2092936b5b52ccdaadf8bf->leave($__internal_04ad8e939c5af380ce96572947092080811a2305ab2092936b5b52ccdaadf8bf_prof);

        
        $__internal_486cc5f1e33f3debc106f9bafdb9bc05a22837001086b00a9661877ae26a3c37->leave($__internal_486cc5f1e33f3debc106f9bafdb9bc05a22837001086b00a9661877ae26a3c37_prof);

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
", "@Framework/Form/form_rest.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
