<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4405ed7a96c20fae48611ac333110ee1a08da1d31b1b224acf6fbf8fab85210a extends Twig_Template
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
        $__internal_d0eb819e8488aba73ecd9d6f59499c5ec016c7730139c938bfbac62e88685bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0eb819e8488aba73ecd9d6f59499c5ec016c7730139c938bfbac62e88685bad->enter($__internal_d0eb819e8488aba73ecd9d6f59499c5ec016c7730139c938bfbac62e88685bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5853e5a3f34e3d9261000961f6b6cdf1e8fe35a67d82510eab5351ae0559b56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5853e5a3f34e3d9261000961f6b6cdf1e8fe35a67d82510eab5351ae0559b56f->enter($__internal_5853e5a3f34e3d9261000961f6b6cdf1e8fe35a67d82510eab5351ae0559b56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d0eb819e8488aba73ecd9d6f59499c5ec016c7730139c938bfbac62e88685bad->leave($__internal_d0eb819e8488aba73ecd9d6f59499c5ec016c7730139c938bfbac62e88685bad_prof);

        
        $__internal_5853e5a3f34e3d9261000961f6b6cdf1e8fe35a67d82510eab5351ae0559b56f->leave($__internal_5853e5a3f34e3d9261000961f6b6cdf1e8fe35a67d82510eab5351ae0559b56f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
