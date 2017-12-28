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
        $__internal_e0c91965d7fee02ef8a58c59ced574ea459923b8ffe0ac9b4ff8ca71974a94d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c91965d7fee02ef8a58c59ced574ea459923b8ffe0ac9b4ff8ca71974a94d5->enter($__internal_e0c91965d7fee02ef8a58c59ced574ea459923b8ffe0ac9b4ff8ca71974a94d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e18623ed66043a93a5efeeb83976022b503e524aead2f9cc31188f99370daf11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18623ed66043a93a5efeeb83976022b503e524aead2f9cc31188f99370daf11->enter($__internal_e18623ed66043a93a5efeeb83976022b503e524aead2f9cc31188f99370daf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e0c91965d7fee02ef8a58c59ced574ea459923b8ffe0ac9b4ff8ca71974a94d5->leave($__internal_e0c91965d7fee02ef8a58c59ced574ea459923b8ffe0ac9b4ff8ca71974a94d5_prof);

        
        $__internal_e18623ed66043a93a5efeeb83976022b503e524aead2f9cc31188f99370daf11->leave($__internal_e18623ed66043a93a5efeeb83976022b503e524aead2f9cc31188f99370daf11_prof);

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
