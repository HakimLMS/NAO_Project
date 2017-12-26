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
        $__internal_321b30296ee6c77ca569d9ac2aa87d1483a05c925c1eab14d31dffc20e2b17e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321b30296ee6c77ca569d9ac2aa87d1483a05c925c1eab14d31dffc20e2b17e7->enter($__internal_321b30296ee6c77ca569d9ac2aa87d1483a05c925c1eab14d31dffc20e2b17e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_73cb7237bb104aa5071b56c071d82605ef61835e41dc3c81ed64a1254d8f393b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73cb7237bb104aa5071b56c071d82605ef61835e41dc3c81ed64a1254d8f393b->enter($__internal_73cb7237bb104aa5071b56c071d82605ef61835e41dc3c81ed64a1254d8f393b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_321b30296ee6c77ca569d9ac2aa87d1483a05c925c1eab14d31dffc20e2b17e7->leave($__internal_321b30296ee6c77ca569d9ac2aa87d1483a05c925c1eab14d31dffc20e2b17e7_prof);

        
        $__internal_73cb7237bb104aa5071b56c071d82605ef61835e41dc3c81ed64a1254d8f393b->leave($__internal_73cb7237bb104aa5071b56c071d82605ef61835e41dc3c81ed64a1254d8f393b_prof);

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
", "@Framework/Form/email_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
