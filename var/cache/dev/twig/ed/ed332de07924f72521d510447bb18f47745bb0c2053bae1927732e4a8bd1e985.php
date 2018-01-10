<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2801eb251d4aefb798ff649cf0d600f09869ec165956b272fa833146214f8e55 extends Twig_Template
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
        $__internal_cc870e13a5c9ae2fe35c775c33b3739dfc5e6f9d80d49fa0f52c0942afd87d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc870e13a5c9ae2fe35c775c33b3739dfc5e6f9d80d49fa0f52c0942afd87d1a->enter($__internal_cc870e13a5c9ae2fe35c775c33b3739dfc5e6f9d80d49fa0f52c0942afd87d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_61f1a91306dbc4a53cc1e8e5ff0c377449ca8f97b214ad0856ba19dd7e510c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f1a91306dbc4a53cc1e8e5ff0c377449ca8f97b214ad0856ba19dd7e510c48->enter($__internal_61f1a91306dbc4a53cc1e8e5ff0c377449ca8f97b214ad0856ba19dd7e510c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cc870e13a5c9ae2fe35c775c33b3739dfc5e6f9d80d49fa0f52c0942afd87d1a->leave($__internal_cc870e13a5c9ae2fe35c775c33b3739dfc5e6f9d80d49fa0f52c0942afd87d1a_prof);

        
        $__internal_61f1a91306dbc4a53cc1e8e5ff0c377449ca8f97b214ad0856ba19dd7e510c48->leave($__internal_61f1a91306dbc4a53cc1e8e5ff0c377449ca8f97b214ad0856ba19dd7e510c48_prof);

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
