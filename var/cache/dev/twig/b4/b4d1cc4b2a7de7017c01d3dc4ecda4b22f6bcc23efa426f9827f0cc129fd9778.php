<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fe9da6a346bfd605db31a21f20134cb92f2e57df31e5905ddb2bde0649c8bf1c extends Twig_Template
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
        $__internal_8c7d37ed79526606a8e4a0deb96a692f3e2f87e3446ee5b965013356eff17137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7d37ed79526606a8e4a0deb96a692f3e2f87e3446ee5b965013356eff17137->enter($__internal_8c7d37ed79526606a8e4a0deb96a692f3e2f87e3446ee5b965013356eff17137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_428aed7be57310cd202d992e1904bf6ee743484ee4e7f9f045ec65dec0cbc67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428aed7be57310cd202d992e1904bf6ee743484ee4e7f9f045ec65dec0cbc67d->enter($__internal_428aed7be57310cd202d992e1904bf6ee743484ee4e7f9f045ec65dec0cbc67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8c7d37ed79526606a8e4a0deb96a692f3e2f87e3446ee5b965013356eff17137->leave($__internal_8c7d37ed79526606a8e4a0deb96a692f3e2f87e3446ee5b965013356eff17137_prof);

        
        $__internal_428aed7be57310cd202d992e1904bf6ee743484ee4e7f9f045ec65dec0cbc67d->leave($__internal_428aed7be57310cd202d992e1904bf6ee743484ee4e7f9f045ec65dec0cbc67d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
