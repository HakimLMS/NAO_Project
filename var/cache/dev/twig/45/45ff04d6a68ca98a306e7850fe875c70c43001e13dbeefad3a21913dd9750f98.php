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
        $__internal_6c279219e4d5ddf3625a294da5e0031f5d323f52c84c65c0f14068b802da0573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c279219e4d5ddf3625a294da5e0031f5d323f52c84c65c0f14068b802da0573->enter($__internal_6c279219e4d5ddf3625a294da5e0031f5d323f52c84c65c0f14068b802da0573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_cf874b2d7eaac6c4a9129218713d1466996ec481b41c58785366f9b7325589d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf874b2d7eaac6c4a9129218713d1466996ec481b41c58785366f9b7325589d5->enter($__internal_cf874b2d7eaac6c4a9129218713d1466996ec481b41c58785366f9b7325589d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6c279219e4d5ddf3625a294da5e0031f5d323f52c84c65c0f14068b802da0573->leave($__internal_6c279219e4d5ddf3625a294da5e0031f5d323f52c84c65c0f14068b802da0573_prof);

        
        $__internal_cf874b2d7eaac6c4a9129218713d1466996ec481b41c58785366f9b7325589d5->leave($__internal_cf874b2d7eaac6c4a9129218713d1466996ec481b41c58785366f9b7325589d5_prof);

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
", "@Framework/Form/search_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
