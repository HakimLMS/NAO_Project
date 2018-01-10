<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7ff23be161c27d690a1308a53faebce87df25a1e7ef5162f50415cc9e27f2fbd extends Twig_Template
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
        $__internal_3161d40731b3994f74251f722c096aaf844db65ba51967efc3b344470dad1f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3161d40731b3994f74251f722c096aaf844db65ba51967efc3b344470dad1f68->enter($__internal_3161d40731b3994f74251f722c096aaf844db65ba51967efc3b344470dad1f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a01473efec38fb66f722438303e2b02cf84a660040d8c33201d6aedf813a8a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01473efec38fb66f722438303e2b02cf84a660040d8c33201d6aedf813a8a87->enter($__internal_a01473efec38fb66f722438303e2b02cf84a660040d8c33201d6aedf813a8a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3161d40731b3994f74251f722c096aaf844db65ba51967efc3b344470dad1f68->leave($__internal_3161d40731b3994f74251f722c096aaf844db65ba51967efc3b344470dad1f68_prof);

        
        $__internal_a01473efec38fb66f722438303e2b02cf84a660040d8c33201d6aedf813a8a87->leave($__internal_a01473efec38fb66f722438303e2b02cf84a660040d8c33201d6aedf813a8a87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
