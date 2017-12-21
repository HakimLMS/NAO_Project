<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_515e5d846bd0dd07296b293269fa27a5e4b3c0d4887c3dab5d7424a485a560ef extends Twig_Template
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
        $__internal_21e204f2fc5ac180f1739276f89167974b7378ead3c3b35c0246d5b400f596ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e204f2fc5ac180f1739276f89167974b7378ead3c3b35c0246d5b400f596ef->enter($__internal_21e204f2fc5ac180f1739276f89167974b7378ead3c3b35c0246d5b400f596ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_72f61243600d9b623e632ceb758d6294e5b313863022b10e4df06a9bb35c63b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f61243600d9b623e632ceb758d6294e5b313863022b10e4df06a9bb35c63b1->enter($__internal_72f61243600d9b623e632ceb758d6294e5b313863022b10e4df06a9bb35c63b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_21e204f2fc5ac180f1739276f89167974b7378ead3c3b35c0246d5b400f596ef->leave($__internal_21e204f2fc5ac180f1739276f89167974b7378ead3c3b35c0246d5b400f596ef_prof);

        
        $__internal_72f61243600d9b623e632ceb758d6294e5b313863022b10e4df06a9bb35c63b1->leave($__internal_72f61243600d9b623e632ceb758d6294e5b313863022b10e4df06a9bb35c63b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
