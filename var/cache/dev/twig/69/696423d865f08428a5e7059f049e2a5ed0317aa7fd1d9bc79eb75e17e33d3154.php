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
        $__internal_34b22b4b9b296d6b6f7ac80a9d26603f5da09da0c206bc12cb7ae3823a4b7883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b22b4b9b296d6b6f7ac80a9d26603f5da09da0c206bc12cb7ae3823a4b7883->enter($__internal_34b22b4b9b296d6b6f7ac80a9d26603f5da09da0c206bc12cb7ae3823a4b7883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_11726dce650a2c0bff9b7142300c6e0ce66c694a7ac89a2686b77cc6b621c8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11726dce650a2c0bff9b7142300c6e0ce66c694a7ac89a2686b77cc6b621c8db->enter($__internal_11726dce650a2c0bff9b7142300c6e0ce66c694a7ac89a2686b77cc6b621c8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_34b22b4b9b296d6b6f7ac80a9d26603f5da09da0c206bc12cb7ae3823a4b7883->leave($__internal_34b22b4b9b296d6b6f7ac80a9d26603f5da09da0c206bc12cb7ae3823a4b7883_prof);

        
        $__internal_11726dce650a2c0bff9b7142300c6e0ce66c694a7ac89a2686b77cc6b621c8db->leave($__internal_11726dce650a2c0bff9b7142300c6e0ce66c694a7ac89a2686b77cc6b621c8db_prof);

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
