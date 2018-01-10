<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9fd3c39394b87ea2b209f9460120e7a33707c7bb4e262d46ac0ac45d61c717af extends Twig_Template
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
        $__internal_5c4bfb704d367e7c813253c1fc9aee511091328c1455f461815e41adea8e501a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4bfb704d367e7c813253c1fc9aee511091328c1455f461815e41adea8e501a->enter($__internal_5c4bfb704d367e7c813253c1fc9aee511091328c1455f461815e41adea8e501a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_72d826f3a0d2275677ca47b8c95bca1eaff8e0d1bb61777040cfd450b9d56ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d826f3a0d2275677ca47b8c95bca1eaff8e0d1bb61777040cfd450b9d56ebf->enter($__internal_72d826f3a0d2275677ca47b8c95bca1eaff8e0d1bb61777040cfd450b9d56ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5c4bfb704d367e7c813253c1fc9aee511091328c1455f461815e41adea8e501a->leave($__internal_5c4bfb704d367e7c813253c1fc9aee511091328c1455f461815e41adea8e501a_prof);

        
        $__internal_72d826f3a0d2275677ca47b8c95bca1eaff8e0d1bb61777040cfd450b9d56ebf->leave($__internal_72d826f3a0d2275677ca47b8c95bca1eaff8e0d1bb61777040cfd450b9d56ebf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
