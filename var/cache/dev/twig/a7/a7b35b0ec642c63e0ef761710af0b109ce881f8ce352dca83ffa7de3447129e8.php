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
        $__internal_4cc854079b9c5255dcc9a3bf3c29733b82d3ac68d5f79fd81ee92b8583710f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc854079b9c5255dcc9a3bf3c29733b82d3ac68d5f79fd81ee92b8583710f2f->enter($__internal_4cc854079b9c5255dcc9a3bf3c29733b82d3ac68d5f79fd81ee92b8583710f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_550fd4f17fd71ad3010d064b7c4f8afa852fdd441cec57b3373673aa22c902ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550fd4f17fd71ad3010d064b7c4f8afa852fdd441cec57b3373673aa22c902ef->enter($__internal_550fd4f17fd71ad3010d064b7c4f8afa852fdd441cec57b3373673aa22c902ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4cc854079b9c5255dcc9a3bf3c29733b82d3ac68d5f79fd81ee92b8583710f2f->leave($__internal_4cc854079b9c5255dcc9a3bf3c29733b82d3ac68d5f79fd81ee92b8583710f2f_prof);

        
        $__internal_550fd4f17fd71ad3010d064b7c4f8afa852fdd441cec57b3373673aa22c902ef->leave($__internal_550fd4f17fd71ad3010d064b7c4f8afa852fdd441cec57b3373673aa22c902ef_prof);

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
