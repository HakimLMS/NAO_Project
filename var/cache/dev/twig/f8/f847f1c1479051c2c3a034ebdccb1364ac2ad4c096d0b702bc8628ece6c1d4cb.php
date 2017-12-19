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
        $__internal_af776045149442db6bbc04fb5e7a3517b2165b0b84b8bdaff7289a14ad5971ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af776045149442db6bbc04fb5e7a3517b2165b0b84b8bdaff7289a14ad5971ae->enter($__internal_af776045149442db6bbc04fb5e7a3517b2165b0b84b8bdaff7289a14ad5971ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_dd1b9d2cca69bce8a40a070decfc08c09213727fa88d07d2d075532c006c65a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1b9d2cca69bce8a40a070decfc08c09213727fa88d07d2d075532c006c65a0->enter($__internal_dd1b9d2cca69bce8a40a070decfc08c09213727fa88d07d2d075532c006c65a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_af776045149442db6bbc04fb5e7a3517b2165b0b84b8bdaff7289a14ad5971ae->leave($__internal_af776045149442db6bbc04fb5e7a3517b2165b0b84b8bdaff7289a14ad5971ae_prof);

        
        $__internal_dd1b9d2cca69bce8a40a070decfc08c09213727fa88d07d2d075532c006c65a0->leave($__internal_dd1b9d2cca69bce8a40a070decfc08c09213727fa88d07d2d075532c006c65a0_prof);

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
