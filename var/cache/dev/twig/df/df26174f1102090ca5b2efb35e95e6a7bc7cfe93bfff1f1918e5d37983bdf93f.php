<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f0964555d776509c00691aa1257eaab97ec305027eac6d7d67b2af2f1cb7250b extends Twig_Template
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
        $__internal_eb2ed0e9fc4c628fdc04af5376c0c038172d04b8e087e7d256310855ef717e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2ed0e9fc4c628fdc04af5376c0c038172d04b8e087e7d256310855ef717e1b->enter($__internal_eb2ed0e9fc4c628fdc04af5376c0c038172d04b8e087e7d256310855ef717e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_dcfc9a2982e568c7fe5e3512bee9c283ef14f7d85929a8854fe6b2387af1bbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfc9a2982e568c7fe5e3512bee9c283ef14f7d85929a8854fe6b2387af1bbf6->enter($__internal_dcfc9a2982e568c7fe5e3512bee9c283ef14f7d85929a8854fe6b2387af1bbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_eb2ed0e9fc4c628fdc04af5376c0c038172d04b8e087e7d256310855ef717e1b->leave($__internal_eb2ed0e9fc4c628fdc04af5376c0c038172d04b8e087e7d256310855ef717e1b_prof);

        
        $__internal_dcfc9a2982e568c7fe5e3512bee9c283ef14f7d85929a8854fe6b2387af1bbf6->leave($__internal_dcfc9a2982e568c7fe5e3512bee9c283ef14f7d85929a8854fe6b2387af1bbf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
