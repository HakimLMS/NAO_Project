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
        $__internal_541f4ac2cc3bb32664b2c5b440a31d5ffa9dc46736fa78ec4997d3de8c25b45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541f4ac2cc3bb32664b2c5b440a31d5ffa9dc46736fa78ec4997d3de8c25b45b->enter($__internal_541f4ac2cc3bb32664b2c5b440a31d5ffa9dc46736fa78ec4997d3de8c25b45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_090f352fb93c80fc9ae3e3143efcb7b93a83e9c7deea729268a9d44b1da94bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090f352fb93c80fc9ae3e3143efcb7b93a83e9c7deea729268a9d44b1da94bf4->enter($__internal_090f352fb93c80fc9ae3e3143efcb7b93a83e9c7deea729268a9d44b1da94bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_541f4ac2cc3bb32664b2c5b440a31d5ffa9dc46736fa78ec4997d3de8c25b45b->leave($__internal_541f4ac2cc3bb32664b2c5b440a31d5ffa9dc46736fa78ec4997d3de8c25b45b_prof);

        
        $__internal_090f352fb93c80fc9ae3e3143efcb7b93a83e9c7deea729268a9d44b1da94bf4->leave($__internal_090f352fb93c80fc9ae3e3143efcb7b93a83e9c7deea729268a9d44b1da94bf4_prof);

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
