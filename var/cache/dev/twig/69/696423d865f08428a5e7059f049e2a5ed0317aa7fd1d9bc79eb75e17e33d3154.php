<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0ef9d984b538bd3d84bfaeb12c283505a90dbfee1eab9b0aee8dabeb4d3a327a extends Twig_Template
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
        $__internal_fc52d7d809d800803acc70146ceb03bbd5807bc4452ee1bddc0b9028c88da1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc52d7d809d800803acc70146ceb03bbd5807bc4452ee1bddc0b9028c88da1cb->enter($__internal_fc52d7d809d800803acc70146ceb03bbd5807bc4452ee1bddc0b9028c88da1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1cdf8dec7355dd05de7cac28ef84ce76d85f7f17bd70ecab068d5c769e33e041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdf8dec7355dd05de7cac28ef84ce76d85f7f17bd70ecab068d5c769e33e041->enter($__internal_1cdf8dec7355dd05de7cac28ef84ce76d85f7f17bd70ecab068d5c769e33e041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fc52d7d809d800803acc70146ceb03bbd5807bc4452ee1bddc0b9028c88da1cb->leave($__internal_fc52d7d809d800803acc70146ceb03bbd5807bc4452ee1bddc0b9028c88da1cb_prof);

        
        $__internal_1cdf8dec7355dd05de7cac28ef84ce76d85f7f17bd70ecab068d5c769e33e041->leave($__internal_1cdf8dec7355dd05de7cac28ef84ce76d85f7f17bd70ecab068d5c769e33e041_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
