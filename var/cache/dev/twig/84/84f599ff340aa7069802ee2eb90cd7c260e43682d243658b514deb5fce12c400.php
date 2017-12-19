<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4405ed7a96c20fae48611ac333110ee1a08da1d31b1b224acf6fbf8fab85210a extends Twig_Template
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
        $__internal_5e270a586790d1762d4ff637ed6c5457527fc93a44e5e7a14461c5f34cd155ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e270a586790d1762d4ff637ed6c5457527fc93a44e5e7a14461c5f34cd155ef->enter($__internal_5e270a586790d1762d4ff637ed6c5457527fc93a44e5e7a14461c5f34cd155ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8388f6b73a28bbc67f7cdb2982ae426cd5901e179e3b53b58b653e9d6faddbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8388f6b73a28bbc67f7cdb2982ae426cd5901e179e3b53b58b653e9d6faddbec->enter($__internal_8388f6b73a28bbc67f7cdb2982ae426cd5901e179e3b53b58b653e9d6faddbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_5e270a586790d1762d4ff637ed6c5457527fc93a44e5e7a14461c5f34cd155ef->leave($__internal_5e270a586790d1762d4ff637ed6c5457527fc93a44e5e7a14461c5f34cd155ef_prof);

        
        $__internal_8388f6b73a28bbc67f7cdb2982ae426cd5901e179e3b53b58b653e9d6faddbec->leave($__internal_8388f6b73a28bbc67f7cdb2982ae426cd5901e179e3b53b58b653e9d6faddbec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
