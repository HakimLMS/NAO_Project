<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9927e15d5e96a2afdf9bf86a760475c67d0b70de9f3d2f5ec17794a1401e62c1 extends Twig_Template
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
        $__internal_985b9f36250db873ddae45e117c5fc81f464c3c0e2a0fa86b0e3a3d3fd1cccfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985b9f36250db873ddae45e117c5fc81f464c3c0e2a0fa86b0e3a3d3fd1cccfa->enter($__internal_985b9f36250db873ddae45e117c5fc81f464c3c0e2a0fa86b0e3a3d3fd1cccfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_55617a2e063d15e70e86ad5e8fcb825cf4073af4d0db267def9caa28672fea29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55617a2e063d15e70e86ad5e8fcb825cf4073af4d0db267def9caa28672fea29->enter($__internal_55617a2e063d15e70e86ad5e8fcb825cf4073af4d0db267def9caa28672fea29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_985b9f36250db873ddae45e117c5fc81f464c3c0e2a0fa86b0e3a3d3fd1cccfa->leave($__internal_985b9f36250db873ddae45e117c5fc81f464c3c0e2a0fa86b0e3a3d3fd1cccfa_prof);

        
        $__internal_55617a2e063d15e70e86ad5e8fcb825cf4073af4d0db267def9caa28672fea29->leave($__internal_55617a2e063d15e70e86ad5e8fcb825cf4073af4d0db267def9caa28672fea29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
