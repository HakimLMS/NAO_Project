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
        $__internal_1c45185ba498ca99ec495c589374f8e043acf8449b49b5a3cf83938333d99b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c45185ba498ca99ec495c589374f8e043acf8449b49b5a3cf83938333d99b82->enter($__internal_1c45185ba498ca99ec495c589374f8e043acf8449b49b5a3cf83938333d99b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5207e80767a7fca6dfc252f876c698f7bc30b72f518e0b390e83b1a6c78bd86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5207e80767a7fca6dfc252f876c698f7bc30b72f518e0b390e83b1a6c78bd86d->enter($__internal_5207e80767a7fca6dfc252f876c698f7bc30b72f518e0b390e83b1a6c78bd86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1c45185ba498ca99ec495c589374f8e043acf8449b49b5a3cf83938333d99b82->leave($__internal_1c45185ba498ca99ec495c589374f8e043acf8449b49b5a3cf83938333d99b82_prof);

        
        $__internal_5207e80767a7fca6dfc252f876c698f7bc30b72f518e0b390e83b1a6c78bd86d->leave($__internal_5207e80767a7fca6dfc252f876c698f7bc30b72f518e0b390e83b1a6c78bd86d_prof);

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
