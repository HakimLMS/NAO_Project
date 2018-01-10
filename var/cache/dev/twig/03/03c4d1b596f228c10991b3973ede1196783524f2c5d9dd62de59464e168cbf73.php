<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9f19bf554848926a53f71dd044585bc141a931e42e50ce50bc0a8764b597c843 extends Twig_Template
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
        $__internal_5d7c085a7c09c0db5e10a2377e1c9545b3ae59e407aa4492a7baf9d281d29e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7c085a7c09c0db5e10a2377e1c9545b3ae59e407aa4492a7baf9d281d29e5b->enter($__internal_5d7c085a7c09c0db5e10a2377e1c9545b3ae59e407aa4492a7baf9d281d29e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_cad9283499a4857aab2b076ede6c106281e39b509632f72d005a463621cb192e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad9283499a4857aab2b076ede6c106281e39b509632f72d005a463621cb192e->enter($__internal_cad9283499a4857aab2b076ede6c106281e39b509632f72d005a463621cb192e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5d7c085a7c09c0db5e10a2377e1c9545b3ae59e407aa4492a7baf9d281d29e5b->leave($__internal_5d7c085a7c09c0db5e10a2377e1c9545b3ae59e407aa4492a7baf9d281d29e5b_prof);

        
        $__internal_cad9283499a4857aab2b076ede6c106281e39b509632f72d005a463621cb192e->leave($__internal_cad9283499a4857aab2b076ede6c106281e39b509632f72d005a463621cb192e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
