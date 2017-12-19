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
        $__internal_22b638cd232fe890e0c96a157c068ec87e1b7728182b3f6384ad5564e923575a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b638cd232fe890e0c96a157c068ec87e1b7728182b3f6384ad5564e923575a->enter($__internal_22b638cd232fe890e0c96a157c068ec87e1b7728182b3f6384ad5564e923575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e3ce366ba8b7b073e56b06be6b8d68e68c314994b380565b2c038ff794252e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ce366ba8b7b073e56b06be6b8d68e68c314994b380565b2c038ff794252e21->enter($__internal_e3ce366ba8b7b073e56b06be6b8d68e68c314994b380565b2c038ff794252e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_22b638cd232fe890e0c96a157c068ec87e1b7728182b3f6384ad5564e923575a->leave($__internal_22b638cd232fe890e0c96a157c068ec87e1b7728182b3f6384ad5564e923575a_prof);

        
        $__internal_e3ce366ba8b7b073e56b06be6b8d68e68c314994b380565b2c038ff794252e21->leave($__internal_e3ce366ba8b7b073e56b06be6b8d68e68c314994b380565b2c038ff794252e21_prof);

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
