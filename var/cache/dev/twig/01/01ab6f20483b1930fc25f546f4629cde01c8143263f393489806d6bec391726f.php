<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_25c6dd6500fc6b430f2197892b94274c86bf89194d8e7bff23268db5afca929c extends Twig_Template
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
        $__internal_e6cba71a03792cc5ce5bc01a0116384650ce366f29714840f811c4cad4e62495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cba71a03792cc5ce5bc01a0116384650ce366f29714840f811c4cad4e62495->enter($__internal_e6cba71a03792cc5ce5bc01a0116384650ce366f29714840f811c4cad4e62495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_68f8ecd31af3f2e8c531031ff4bc5b64d6d5087d83e86ffa64f9076df46c8c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f8ecd31af3f2e8c531031ff4bc5b64d6d5087d83e86ffa64f9076df46c8c74->enter($__internal_68f8ecd31af3f2e8c531031ff4bc5b64d6d5087d83e86ffa64f9076df46c8c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e6cba71a03792cc5ce5bc01a0116384650ce366f29714840f811c4cad4e62495->leave($__internal_e6cba71a03792cc5ce5bc01a0116384650ce366f29714840f811c4cad4e62495_prof);

        
        $__internal_68f8ecd31af3f2e8c531031ff4bc5b64d6d5087d83e86ffa64f9076df46c8c74->leave($__internal_68f8ecd31af3f2e8c531031ff4bc5b64d6d5087d83e86ffa64f9076df46c8c74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
