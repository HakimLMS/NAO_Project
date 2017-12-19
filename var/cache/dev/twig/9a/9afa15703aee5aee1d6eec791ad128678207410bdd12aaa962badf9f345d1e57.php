<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4ffe92f19597278f5166115e886d83a5021239eed17ce680c52920148694321e extends Twig_Template
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
        $__internal_8a0e7d8507ec73a93449f5b9b631b2d127986312aad663a029be490ff6b8d71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0e7d8507ec73a93449f5b9b631b2d127986312aad663a029be490ff6b8d71d->enter($__internal_8a0e7d8507ec73a93449f5b9b631b2d127986312aad663a029be490ff6b8d71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b210a281a37c14f644b7b4427fd37ae78908cadc538bf7222f179de467cd5c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b210a281a37c14f644b7b4427fd37ae78908cadc538bf7222f179de467cd5c27->enter($__internal_b210a281a37c14f644b7b4427fd37ae78908cadc538bf7222f179de467cd5c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8a0e7d8507ec73a93449f5b9b631b2d127986312aad663a029be490ff6b8d71d->leave($__internal_8a0e7d8507ec73a93449f5b9b631b2d127986312aad663a029be490ff6b8d71d_prof);

        
        $__internal_b210a281a37c14f644b7b4427fd37ae78908cadc538bf7222f179de467cd5c27->leave($__internal_b210a281a37c14f644b7b4427fd37ae78908cadc538bf7222f179de467cd5c27_prof);

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
