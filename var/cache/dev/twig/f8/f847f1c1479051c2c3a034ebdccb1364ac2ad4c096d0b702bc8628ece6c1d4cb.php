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
        $__internal_79bcdba46de976ce59d50f6260469f98906580ce7cecf07b99976d068cda3ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79bcdba46de976ce59d50f6260469f98906580ce7cecf07b99976d068cda3ad8->enter($__internal_79bcdba46de976ce59d50f6260469f98906580ce7cecf07b99976d068cda3ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_917bb9f05552f6686263959202ca4924d615824fef57de1ef39d1202773a3f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917bb9f05552f6686263959202ca4924d615824fef57de1ef39d1202773a3f67->enter($__internal_917bb9f05552f6686263959202ca4924d615824fef57de1ef39d1202773a3f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_79bcdba46de976ce59d50f6260469f98906580ce7cecf07b99976d068cda3ad8->leave($__internal_79bcdba46de976ce59d50f6260469f98906580ce7cecf07b99976d068cda3ad8_prof);

        
        $__internal_917bb9f05552f6686263959202ca4924d615824fef57de1ef39d1202773a3f67->leave($__internal_917bb9f05552f6686263959202ca4924d615824fef57de1ef39d1202773a3f67_prof);

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
