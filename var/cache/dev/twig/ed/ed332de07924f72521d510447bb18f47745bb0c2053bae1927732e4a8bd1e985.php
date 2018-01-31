<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2801eb251d4aefb798ff649cf0d600f09869ec165956b272fa833146214f8e55 extends Twig_Template
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
        $__internal_6245c9a6687588420d2d326265e17f83816bcc669803e4617070fd17ed426f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6245c9a6687588420d2d326265e17f83816bcc669803e4617070fd17ed426f48->enter($__internal_6245c9a6687588420d2d326265e17f83816bcc669803e4617070fd17ed426f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e2ccaf394b6d9cc922cacdb86886150d82124af5fb29fed730bd4cb203914c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ccaf394b6d9cc922cacdb86886150d82124af5fb29fed730bd4cb203914c62->enter($__internal_e2ccaf394b6d9cc922cacdb86886150d82124af5fb29fed730bd4cb203914c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6245c9a6687588420d2d326265e17f83816bcc669803e4617070fd17ed426f48->leave($__internal_6245c9a6687588420d2d326265e17f83816bcc669803e4617070fd17ed426f48_prof);

        
        $__internal_e2ccaf394b6d9cc922cacdb86886150d82124af5fb29fed730bd4cb203914c62->leave($__internal_e2ccaf394b6d9cc922cacdb86886150d82124af5fb29fed730bd4cb203914c62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
