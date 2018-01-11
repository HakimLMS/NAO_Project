<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_003e0f0140e53be7130c206136732ad1856f9e32c0bc3dc81ef76081c77eca30 extends Twig_Template
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
        $__internal_a9c28c9c06cf974c38c0e45132ba83810a524c98bf2972f764e22abd93d93c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c28c9c06cf974c38c0e45132ba83810a524c98bf2972f764e22abd93d93c4e->enter($__internal_a9c28c9c06cf974c38c0e45132ba83810a524c98bf2972f764e22abd93d93c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_07743810317856e818ec9f90ae11217e67e5c76f2c4e920767bd3ce2eee87172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07743810317856e818ec9f90ae11217e67e5c76f2c4e920767bd3ce2eee87172->enter($__internal_07743810317856e818ec9f90ae11217e67e5c76f2c4e920767bd3ce2eee87172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a9c28c9c06cf974c38c0e45132ba83810a524c98bf2972f764e22abd93d93c4e->leave($__internal_a9c28c9c06cf974c38c0e45132ba83810a524c98bf2972f764e22abd93d93c4e_prof);

        
        $__internal_07743810317856e818ec9f90ae11217e67e5c76f2c4e920767bd3ce2eee87172->leave($__internal_07743810317856e818ec9f90ae11217e67e5c76f2c4e920767bd3ce2eee87172_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
