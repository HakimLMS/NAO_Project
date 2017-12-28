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
        $__internal_4a64764b3b90e42063abfba1b3f7259632adbc2bcd92e12bc6c9aa49f093ac45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a64764b3b90e42063abfba1b3f7259632adbc2bcd92e12bc6c9aa49f093ac45->enter($__internal_4a64764b3b90e42063abfba1b3f7259632adbc2bcd92e12bc6c9aa49f093ac45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c3d347cc275f0a7b2139a22c996071e78a250b52c0342822f3cd6c0a312d7d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d347cc275f0a7b2139a22c996071e78a250b52c0342822f3cd6c0a312d7d6f->enter($__internal_c3d347cc275f0a7b2139a22c996071e78a250b52c0342822f3cd6c0a312d7d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4a64764b3b90e42063abfba1b3f7259632adbc2bcd92e12bc6c9aa49f093ac45->leave($__internal_4a64764b3b90e42063abfba1b3f7259632adbc2bcd92e12bc6c9aa49f093ac45_prof);

        
        $__internal_c3d347cc275f0a7b2139a22c996071e78a250b52c0342822f3cd6c0a312d7d6f->leave($__internal_c3d347cc275f0a7b2139a22c996071e78a250b52c0342822f3cd6c0a312d7d6f_prof);

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
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
