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
        $__internal_7945adcc50b32f1d17888a352a36f3b5e9d3c5dcd0b23b333c9692ea85548551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7945adcc50b32f1d17888a352a36f3b5e9d3c5dcd0b23b333c9692ea85548551->enter($__internal_7945adcc50b32f1d17888a352a36f3b5e9d3c5dcd0b23b333c9692ea85548551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e8fa27ca0310aed201840b62e7d3b9b2237b5162045bbb1631f0920c5fe8a597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fa27ca0310aed201840b62e7d3b9b2237b5162045bbb1631f0920c5fe8a597->enter($__internal_e8fa27ca0310aed201840b62e7d3b9b2237b5162045bbb1631f0920c5fe8a597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7945adcc50b32f1d17888a352a36f3b5e9d3c5dcd0b23b333c9692ea85548551->leave($__internal_7945adcc50b32f1d17888a352a36f3b5e9d3c5dcd0b23b333c9692ea85548551_prof);

        
        $__internal_e8fa27ca0310aed201840b62e7d3b9b2237b5162045bbb1631f0920c5fe8a597->leave($__internal_e8fa27ca0310aed201840b62e7d3b9b2237b5162045bbb1631f0920c5fe8a597_prof);

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
