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
        $__internal_fb2fbd7f42b83b8b429ab06a0b1ac7856da2ea10b1e0a5137f620c0d2dda1df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2fbd7f42b83b8b429ab06a0b1ac7856da2ea10b1e0a5137f620c0d2dda1df5->enter($__internal_fb2fbd7f42b83b8b429ab06a0b1ac7856da2ea10b1e0a5137f620c0d2dda1df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f949b0fdce57f06ea155e44a9945dd6b2115cd64d865a9b5a81b2e727327ec94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f949b0fdce57f06ea155e44a9945dd6b2115cd64d865a9b5a81b2e727327ec94->enter($__internal_f949b0fdce57f06ea155e44a9945dd6b2115cd64d865a9b5a81b2e727327ec94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fb2fbd7f42b83b8b429ab06a0b1ac7856da2ea10b1e0a5137f620c0d2dda1df5->leave($__internal_fb2fbd7f42b83b8b429ab06a0b1ac7856da2ea10b1e0a5137f620c0d2dda1df5_prof);

        
        $__internal_f949b0fdce57f06ea155e44a9945dd6b2115cd64d865a9b5a81b2e727327ec94->leave($__internal_f949b0fdce57f06ea155e44a9945dd6b2115cd64d865a9b5a81b2e727327ec94_prof);

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
