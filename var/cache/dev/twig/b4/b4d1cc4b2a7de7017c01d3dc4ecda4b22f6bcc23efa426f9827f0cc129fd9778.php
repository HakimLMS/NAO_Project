<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fe9da6a346bfd605db31a21f20134cb92f2e57df31e5905ddb2bde0649c8bf1c extends Twig_Template
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
        $__internal_bb40e30fb8b6888b56b5c82424a0ba572d295a7e390c09724402dca03a532baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb40e30fb8b6888b56b5c82424a0ba572d295a7e390c09724402dca03a532baa->enter($__internal_bb40e30fb8b6888b56b5c82424a0ba572d295a7e390c09724402dca03a532baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ffec29a28e088fc81d226303a8c5f246abc11a28f864c65673a1b8e424f4536f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffec29a28e088fc81d226303a8c5f246abc11a28f864c65673a1b8e424f4536f->enter($__internal_ffec29a28e088fc81d226303a8c5f246abc11a28f864c65673a1b8e424f4536f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bb40e30fb8b6888b56b5c82424a0ba572d295a7e390c09724402dca03a532baa->leave($__internal_bb40e30fb8b6888b56b5c82424a0ba572d295a7e390c09724402dca03a532baa_prof);

        
        $__internal_ffec29a28e088fc81d226303a8c5f246abc11a28f864c65673a1b8e424f4536f->leave($__internal_ffec29a28e088fc81d226303a8c5f246abc11a28f864c65673a1b8e424f4536f_prof);

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
