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
        $__internal_699a41086dcdfbaf1f390bb04b1d3da30c0574020952389cd3eef6af69df03d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699a41086dcdfbaf1f390bb04b1d3da30c0574020952389cd3eef6af69df03d0->enter($__internal_699a41086dcdfbaf1f390bb04b1d3da30c0574020952389cd3eef6af69df03d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4bea351e5a516ad68da00eabe9426550192af5b90175531e23114e4f15643655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bea351e5a516ad68da00eabe9426550192af5b90175531e23114e4f15643655->enter($__internal_4bea351e5a516ad68da00eabe9426550192af5b90175531e23114e4f15643655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_699a41086dcdfbaf1f390bb04b1d3da30c0574020952389cd3eef6af69df03d0->leave($__internal_699a41086dcdfbaf1f390bb04b1d3da30c0574020952389cd3eef6af69df03d0_prof);

        
        $__internal_4bea351e5a516ad68da00eabe9426550192af5b90175531e23114e4f15643655->leave($__internal_4bea351e5a516ad68da00eabe9426550192af5b90175531e23114e4f15643655_prof);

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
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
