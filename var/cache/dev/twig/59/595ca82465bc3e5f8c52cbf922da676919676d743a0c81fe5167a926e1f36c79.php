<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_651a6e6e36005918cf94111409d1feeb4f2660694fcfd728b158fdde0625d7e3 extends Twig_Template
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
        $__internal_c2bd362485eae0d3e6734b85448cc56faa14be59b51b696d21e0fefc4150af1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2bd362485eae0d3e6734b85448cc56faa14be59b51b696d21e0fefc4150af1b->enter($__internal_c2bd362485eae0d3e6734b85448cc56faa14be59b51b696d21e0fefc4150af1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c81c8beb18f159fd8ff24a5c014ce4f6872d899e02ef19cf39f7377d873bd3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81c8beb18f159fd8ff24a5c014ce4f6872d899e02ef19cf39f7377d873bd3f0->enter($__internal_c81c8beb18f159fd8ff24a5c014ce4f6872d899e02ef19cf39f7377d873bd3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c2bd362485eae0d3e6734b85448cc56faa14be59b51b696d21e0fefc4150af1b->leave($__internal_c2bd362485eae0d3e6734b85448cc56faa14be59b51b696d21e0fefc4150af1b_prof);

        
        $__internal_c81c8beb18f159fd8ff24a5c014ce4f6872d899e02ef19cf39f7377d873bd3f0->leave($__internal_c81c8beb18f159fd8ff24a5c014ce4f6872d899e02ef19cf39f7377d873bd3f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
