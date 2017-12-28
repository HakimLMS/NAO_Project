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
        $__internal_0be9a0b1b8e60b504015e7ab37763221054d0ed4e670509a949d6ebaf89e4120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be9a0b1b8e60b504015e7ab37763221054d0ed4e670509a949d6ebaf89e4120->enter($__internal_0be9a0b1b8e60b504015e7ab37763221054d0ed4e670509a949d6ebaf89e4120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_05b73395b6a359a706e5f479ebc38d60593c6bb144996985443e4a681f561a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b73395b6a359a706e5f479ebc38d60593c6bb144996985443e4a681f561a7f->enter($__internal_05b73395b6a359a706e5f479ebc38d60593c6bb144996985443e4a681f561a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0be9a0b1b8e60b504015e7ab37763221054d0ed4e670509a949d6ebaf89e4120->leave($__internal_0be9a0b1b8e60b504015e7ab37763221054d0ed4e670509a949d6ebaf89e4120_prof);

        
        $__internal_05b73395b6a359a706e5f479ebc38d60593c6bb144996985443e4a681f561a7f->leave($__internal_05b73395b6a359a706e5f479ebc38d60593c6bb144996985443e4a681f561a7f_prof);

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
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
