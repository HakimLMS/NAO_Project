<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_6af44899a3189585123642642421d3a4caff8b7cd4a489f6a40cfc67a1bf39a1 extends Twig_Template
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
        $__internal_b9be2cf6fe79e4c68cb5d1be5a0badea9c430e1c5e3de1a596c76d064f275ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9be2cf6fe79e4c68cb5d1be5a0badea9c430e1c5e3de1a596c76d064f275ddd->enter($__internal_b9be2cf6fe79e4c68cb5d1be5a0badea9c430e1c5e3de1a596c76d064f275ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f44804d9a4cf0324edac15fa353b392bf98ffbd9794ca1500acf33511e663226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44804d9a4cf0324edac15fa353b392bf98ffbd9794ca1500acf33511e663226->enter($__internal_f44804d9a4cf0324edac15fa353b392bf98ffbd9794ca1500acf33511e663226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b9be2cf6fe79e4c68cb5d1be5a0badea9c430e1c5e3de1a596c76d064f275ddd->leave($__internal_b9be2cf6fe79e4c68cb5d1be5a0badea9c430e1c5e3de1a596c76d064f275ddd_prof);

        
        $__internal_f44804d9a4cf0324edac15fa353b392bf98ffbd9794ca1500acf33511e663226->leave($__internal_f44804d9a4cf0324edac15fa353b392bf98ffbd9794ca1500acf33511e663226_prof);

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
