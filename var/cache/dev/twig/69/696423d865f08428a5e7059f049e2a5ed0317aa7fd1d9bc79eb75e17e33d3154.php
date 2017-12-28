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
        $__internal_61f9b9019bef40903843102204a005cc9ddf211d6ba36c5dd41bc5965d046c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f9b9019bef40903843102204a005cc9ddf211d6ba36c5dd41bc5965d046c34->enter($__internal_61f9b9019bef40903843102204a005cc9ddf211d6ba36c5dd41bc5965d046c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c6293b11a7866de0870b096b8607536455c994f0be27a1e0232f6d203a84e8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6293b11a7866de0870b096b8607536455c994f0be27a1e0232f6d203a84e8d6->enter($__internal_c6293b11a7866de0870b096b8607536455c994f0be27a1e0232f6d203a84e8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_61f9b9019bef40903843102204a005cc9ddf211d6ba36c5dd41bc5965d046c34->leave($__internal_61f9b9019bef40903843102204a005cc9ddf211d6ba36c5dd41bc5965d046c34_prof);

        
        $__internal_c6293b11a7866de0870b096b8607536455c994f0be27a1e0232f6d203a84e8d6->leave($__internal_c6293b11a7866de0870b096b8607536455c994f0be27a1e0232f6d203a84e8d6_prof);

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
