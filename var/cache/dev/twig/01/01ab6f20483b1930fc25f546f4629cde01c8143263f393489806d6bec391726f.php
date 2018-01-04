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
        $__internal_6328f721e33472c7ad7f927c92ffb9c70bd0e712ff95aaa607f2cd5bbe4f3466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6328f721e33472c7ad7f927c92ffb9c70bd0e712ff95aaa607f2cd5bbe4f3466->enter($__internal_6328f721e33472c7ad7f927c92ffb9c70bd0e712ff95aaa607f2cd5bbe4f3466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8a5c44146a836fabac847f5da38edc5ac6c3a242397769db1767fae41954c56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5c44146a836fabac847f5da38edc5ac6c3a242397769db1767fae41954c56d->enter($__internal_8a5c44146a836fabac847f5da38edc5ac6c3a242397769db1767fae41954c56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6328f721e33472c7ad7f927c92ffb9c70bd0e712ff95aaa607f2cd5bbe4f3466->leave($__internal_6328f721e33472c7ad7f927c92ffb9c70bd0e712ff95aaa607f2cd5bbe4f3466_prof);

        
        $__internal_8a5c44146a836fabac847f5da38edc5ac6c3a242397769db1767fae41954c56d->leave($__internal_8a5c44146a836fabac847f5da38edc5ac6c3a242397769db1767fae41954c56d_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
