<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_988b7365c3d99ad2ec26ae98bfdfd0acd15d7bc349622fee4e1668d87a4389d9 extends Twig_Template
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
        $__internal_fe7f410f23640fa2ce8002e891ceffbb31c3a9e82e1fd1ffded512dc61c26996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7f410f23640fa2ce8002e891ceffbb31c3a9e82e1fd1ffded512dc61c26996->enter($__internal_fe7f410f23640fa2ce8002e891ceffbb31c3a9e82e1fd1ffded512dc61c26996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1e95ac61e9e76476d9fbd01bc5d20a2443968694b7e419a152ff5cf537f2ec42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e95ac61e9e76476d9fbd01bc5d20a2443968694b7e419a152ff5cf537f2ec42->enter($__internal_1e95ac61e9e76476d9fbd01bc5d20a2443968694b7e419a152ff5cf537f2ec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fe7f410f23640fa2ce8002e891ceffbb31c3a9e82e1fd1ffded512dc61c26996->leave($__internal_fe7f410f23640fa2ce8002e891ceffbb31c3a9e82e1fd1ffded512dc61c26996_prof);

        
        $__internal_1e95ac61e9e76476d9fbd01bc5d20a2443968694b7e419a152ff5cf537f2ec42->leave($__internal_1e95ac61e9e76476d9fbd01bc5d20a2443968694b7e419a152ff5cf537f2ec42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
