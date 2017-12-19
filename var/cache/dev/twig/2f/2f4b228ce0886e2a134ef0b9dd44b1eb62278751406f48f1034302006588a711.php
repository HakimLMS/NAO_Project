<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_515e5d846bd0dd07296b293269fa27a5e4b3c0d4887c3dab5d7424a485a560ef extends Twig_Template
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
        $__internal_39fcf00b636bffffc34b2b83085e06b667d01a22aa153b1558ba7a84b59340cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fcf00b636bffffc34b2b83085e06b667d01a22aa153b1558ba7a84b59340cd->enter($__internal_39fcf00b636bffffc34b2b83085e06b667d01a22aa153b1558ba7a84b59340cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8772754fb75857d04cad819c7cd4b53e82995756b5ef01ff81bbcf00c4d546c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8772754fb75857d04cad819c7cd4b53e82995756b5ef01ff81bbcf00c4d546c4->enter($__internal_8772754fb75857d04cad819c7cd4b53e82995756b5ef01ff81bbcf00c4d546c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_39fcf00b636bffffc34b2b83085e06b667d01a22aa153b1558ba7a84b59340cd->leave($__internal_39fcf00b636bffffc34b2b83085e06b667d01a22aa153b1558ba7a84b59340cd_prof);

        
        $__internal_8772754fb75857d04cad819c7cd4b53e82995756b5ef01ff81bbcf00c4d546c4->leave($__internal_8772754fb75857d04cad819c7cd4b53e82995756b5ef01ff81bbcf00c4d546c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
