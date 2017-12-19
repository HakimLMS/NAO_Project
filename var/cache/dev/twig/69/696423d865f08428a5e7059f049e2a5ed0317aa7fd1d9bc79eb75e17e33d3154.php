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
        $__internal_a574e4d22362c61fdec8907a3e5007610bb4a5dde90b60cf0d2252b28df623fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a574e4d22362c61fdec8907a3e5007610bb4a5dde90b60cf0d2252b28df623fe->enter($__internal_a574e4d22362c61fdec8907a3e5007610bb4a5dde90b60cf0d2252b28df623fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_eccb4718fa7f3896e0521e5abed8a29f0ae45c88ff65dd9ae0664a481a477b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccb4718fa7f3896e0521e5abed8a29f0ae45c88ff65dd9ae0664a481a477b17->enter($__internal_eccb4718fa7f3896e0521e5abed8a29f0ae45c88ff65dd9ae0664a481a477b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a574e4d22362c61fdec8907a3e5007610bb4a5dde90b60cf0d2252b28df623fe->leave($__internal_a574e4d22362c61fdec8907a3e5007610bb4a5dde90b60cf0d2252b28df623fe_prof);

        
        $__internal_eccb4718fa7f3896e0521e5abed8a29f0ae45c88ff65dd9ae0664a481a477b17->leave($__internal_eccb4718fa7f3896e0521e5abed8a29f0ae45c88ff65dd9ae0664a481a477b17_prof);

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
