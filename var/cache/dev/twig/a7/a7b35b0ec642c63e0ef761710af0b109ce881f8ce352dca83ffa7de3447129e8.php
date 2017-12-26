<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_a53a6a8110e8b5054f36424a464e5fb60c90a321b8b794fd23d407a405b82c1c extends Twig_Template
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
        $__internal_bfc43a12d39cde75677259e1199c9e64ba57790bf998e355e71c210dd743f287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc43a12d39cde75677259e1199c9e64ba57790bf998e355e71c210dd743f287->enter($__internal_bfc43a12d39cde75677259e1199c9e64ba57790bf998e355e71c210dd743f287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_5a7d6a7aedcfc8f003365e2adf611dbf8078a71dba40372d56cfbf0354c40399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7d6a7aedcfc8f003365e2adf611dbf8078a71dba40372d56cfbf0354c40399->enter($__internal_5a7d6a7aedcfc8f003365e2adf611dbf8078a71dba40372d56cfbf0354c40399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_bfc43a12d39cde75677259e1199c9e64ba57790bf998e355e71c210dd743f287->leave($__internal_bfc43a12d39cde75677259e1199c9e64ba57790bf998e355e71c210dd743f287_prof);

        
        $__internal_5a7d6a7aedcfc8f003365e2adf611dbf8078a71dba40372d56cfbf0354c40399->leave($__internal_5a7d6a7aedcfc8f003365e2adf611dbf8078a71dba40372d56cfbf0354c40399_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
