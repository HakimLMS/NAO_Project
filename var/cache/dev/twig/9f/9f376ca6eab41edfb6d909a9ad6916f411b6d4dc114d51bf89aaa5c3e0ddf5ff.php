<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_988b7365c3d99ad2ec26ae98bfdfd0acd15d7bc349622fee4e1668d87a4389d9 extends Twig_Template
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
        $__internal_a04fd20b1f1dcba6b65cca98c9f9af380e048358fa5c3df1efa72a7ed907c909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04fd20b1f1dcba6b65cca98c9f9af380e048358fa5c3df1efa72a7ed907c909->enter($__internal_a04fd20b1f1dcba6b65cca98c9f9af380e048358fa5c3df1efa72a7ed907c909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ae77dc4bdbf8cef40c01c3555e93baa8cf70ed89396cb904aab4a988da5b2c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae77dc4bdbf8cef40c01c3555e93baa8cf70ed89396cb904aab4a988da5b2c3b->enter($__internal_ae77dc4bdbf8cef40c01c3555e93baa8cf70ed89396cb904aab4a988da5b2c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a04fd20b1f1dcba6b65cca98c9f9af380e048358fa5c3df1efa72a7ed907c909->leave($__internal_a04fd20b1f1dcba6b65cca98c9f9af380e048358fa5c3df1efa72a7ed907c909_prof);

        
        $__internal_ae77dc4bdbf8cef40c01c3555e93baa8cf70ed89396cb904aab4a988da5b2c3b->leave($__internal_ae77dc4bdbf8cef40c01c3555e93baa8cf70ed89396cb904aab4a988da5b2c3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
