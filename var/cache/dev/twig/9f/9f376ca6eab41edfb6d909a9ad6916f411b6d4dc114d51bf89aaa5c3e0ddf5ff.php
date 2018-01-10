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
        $__internal_840da2e645aac700129b8b5898f7536866088d53a5d7de4cbf9633e1077a981e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840da2e645aac700129b8b5898f7536866088d53a5d7de4cbf9633e1077a981e->enter($__internal_840da2e645aac700129b8b5898f7536866088d53a5d7de4cbf9633e1077a981e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_cace1efc39c4d4d8479c64aab0a61c400456ac71739945107aba5f63c6c2f96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cace1efc39c4d4d8479c64aab0a61c400456ac71739945107aba5f63c6c2f96c->enter($__internal_cace1efc39c4d4d8479c64aab0a61c400456ac71739945107aba5f63c6c2f96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_840da2e645aac700129b8b5898f7536866088d53a5d7de4cbf9633e1077a981e->leave($__internal_840da2e645aac700129b8b5898f7536866088d53a5d7de4cbf9633e1077a981e_prof);

        
        $__internal_cace1efc39c4d4d8479c64aab0a61c400456ac71739945107aba5f63c6c2f96c->leave($__internal_cace1efc39c4d4d8479c64aab0a61c400456ac71739945107aba5f63c6c2f96c_prof);

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
