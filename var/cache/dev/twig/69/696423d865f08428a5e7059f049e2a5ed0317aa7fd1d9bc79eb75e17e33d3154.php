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
        $__internal_07d0df6c139219d40c90dcf0fbce6c3b8b87d621e18642cb20c6f7080b9971f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d0df6c139219d40c90dcf0fbce6c3b8b87d621e18642cb20c6f7080b9971f3->enter($__internal_07d0df6c139219d40c90dcf0fbce6c3b8b87d621e18642cb20c6f7080b9971f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0f364254ae3621d3df5c6390423b1254ceadb28724aa30e07b911daa0152f9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f364254ae3621d3df5c6390423b1254ceadb28724aa30e07b911daa0152f9b6->enter($__internal_0f364254ae3621d3df5c6390423b1254ceadb28724aa30e07b911daa0152f9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_07d0df6c139219d40c90dcf0fbce6c3b8b87d621e18642cb20c6f7080b9971f3->leave($__internal_07d0df6c139219d40c90dcf0fbce6c3b8b87d621e18642cb20c6f7080b9971f3_prof);

        
        $__internal_0f364254ae3621d3df5c6390423b1254ceadb28724aa30e07b911daa0152f9b6->leave($__internal_0f364254ae3621d3df5c6390423b1254ceadb28724aa30e07b911daa0152f9b6_prof);

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
", "@Framework/Form/button_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
