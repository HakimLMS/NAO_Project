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
        $__internal_d08867ef55c4e30faf4e648b622f2ee0679b6ba08aa11a1423a2ce2f3f952fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08867ef55c4e30faf4e648b622f2ee0679b6ba08aa11a1423a2ce2f3f952fe4->enter($__internal_d08867ef55c4e30faf4e648b622f2ee0679b6ba08aa11a1423a2ce2f3f952fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3a5e411af49c1557416f2009e3489c939bdd427c4cc742ed3dc1e51835173381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5e411af49c1557416f2009e3489c939bdd427c4cc742ed3dc1e51835173381->enter($__internal_3a5e411af49c1557416f2009e3489c939bdd427c4cc742ed3dc1e51835173381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d08867ef55c4e30faf4e648b622f2ee0679b6ba08aa11a1423a2ce2f3f952fe4->leave($__internal_d08867ef55c4e30faf4e648b622f2ee0679b6ba08aa11a1423a2ce2f3f952fe4_prof);

        
        $__internal_3a5e411af49c1557416f2009e3489c939bdd427c4cc742ed3dc1e51835173381->leave($__internal_3a5e411af49c1557416f2009e3489c939bdd427c4cc742ed3dc1e51835173381_prof);

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
