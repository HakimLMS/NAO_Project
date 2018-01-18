<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9befff9c36ecb304a16f585a30c19f1a4d025f7481da052bc428276aea79cb57 extends Twig_Template
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
        $__internal_5afaa2c4340d2a718d957599b8762337af24e5f1f2e2536d67d82cce38c8d17b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afaa2c4340d2a718d957599b8762337af24e5f1f2e2536d67d82cce38c8d17b->enter($__internal_5afaa2c4340d2a718d957599b8762337af24e5f1f2e2536d67d82cce38c8d17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e8d81cd1ae49f4dbb17a598bdaca1f6ee95c4f7bed46d77766c0f057d5610991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d81cd1ae49f4dbb17a598bdaca1f6ee95c4f7bed46d77766c0f057d5610991->enter($__internal_e8d81cd1ae49f4dbb17a598bdaca1f6ee95c4f7bed46d77766c0f057d5610991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5afaa2c4340d2a718d957599b8762337af24e5f1f2e2536d67d82cce38c8d17b->leave($__internal_5afaa2c4340d2a718d957599b8762337af24e5f1f2e2536d67d82cce38c8d17b_prof);

        
        $__internal_e8d81cd1ae49f4dbb17a598bdaca1f6ee95c4f7bed46d77766c0f057d5610991->leave($__internal_e8d81cd1ae49f4dbb17a598bdaca1f6ee95c4f7bed46d77766c0f057d5610991_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
