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
        $__internal_c0f79d14efaa5342c404192c4c289db704ae8fd9a6054aed7c384bc6b146e013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f79d14efaa5342c404192c4c289db704ae8fd9a6054aed7c384bc6b146e013->enter($__internal_c0f79d14efaa5342c404192c4c289db704ae8fd9a6054aed7c384bc6b146e013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_758b2c66d6bf84c7f8b1e8ee0e5eca243517f450591dfafdc388678e7e1bab88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758b2c66d6bf84c7f8b1e8ee0e5eca243517f450591dfafdc388678e7e1bab88->enter($__internal_758b2c66d6bf84c7f8b1e8ee0e5eca243517f450591dfafdc388678e7e1bab88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c0f79d14efaa5342c404192c4c289db704ae8fd9a6054aed7c384bc6b146e013->leave($__internal_c0f79d14efaa5342c404192c4c289db704ae8fd9a6054aed7c384bc6b146e013_prof);

        
        $__internal_758b2c66d6bf84c7f8b1e8ee0e5eca243517f450591dfafdc388678e7e1bab88->leave($__internal_758b2c66d6bf84c7f8b1e8ee0e5eca243517f450591dfafdc388678e7e1bab88_prof);

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
