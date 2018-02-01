<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9f19bf554848926a53f71dd044585bc141a931e42e50ce50bc0a8764b597c843 extends Twig_Template
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
        $__internal_5ad3efee3db07926941fe824b860421a6390ba9c587aa7a30e2f71ec8699fd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad3efee3db07926941fe824b860421a6390ba9c587aa7a30e2f71ec8699fd4c->enter($__internal_5ad3efee3db07926941fe824b860421a6390ba9c587aa7a30e2f71ec8699fd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_04fbeeb94ecd9d5e41f61d90317cea99b73e279adc06bc186ef59c509bc18116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fbeeb94ecd9d5e41f61d90317cea99b73e279adc06bc186ef59c509bc18116->enter($__internal_04fbeeb94ecd9d5e41f61d90317cea99b73e279adc06bc186ef59c509bc18116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5ad3efee3db07926941fe824b860421a6390ba9c587aa7a30e2f71ec8699fd4c->leave($__internal_5ad3efee3db07926941fe824b860421a6390ba9c587aa7a30e2f71ec8699fd4c_prof);

        
        $__internal_04fbeeb94ecd9d5e41f61d90317cea99b73e279adc06bc186ef59c509bc18116->leave($__internal_04fbeeb94ecd9d5e41f61d90317cea99b73e279adc06bc186ef59c509bc18116_prof);

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
", "@Framework/Form/form_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
