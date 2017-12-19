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
        $__internal_e0437f85f14849c45e87dbf2f91095b910f8bb35ab53739ef5d463b36534e181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0437f85f14849c45e87dbf2f91095b910f8bb35ab53739ef5d463b36534e181->enter($__internal_e0437f85f14849c45e87dbf2f91095b910f8bb35ab53739ef5d463b36534e181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_70e58e9b621c2491b9d9d114f163f2b3cd1dd838685831dc0416b46b1f838884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e58e9b621c2491b9d9d114f163f2b3cd1dd838685831dc0416b46b1f838884->enter($__internal_70e58e9b621c2491b9d9d114f163f2b3cd1dd838685831dc0416b46b1f838884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e0437f85f14849c45e87dbf2f91095b910f8bb35ab53739ef5d463b36534e181->leave($__internal_e0437f85f14849c45e87dbf2f91095b910f8bb35ab53739ef5d463b36534e181_prof);

        
        $__internal_70e58e9b621c2491b9d9d114f163f2b3cd1dd838685831dc0416b46b1f838884->leave($__internal_70e58e9b621c2491b9d9d114f163f2b3cd1dd838685831dc0416b46b1f838884_prof);

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
