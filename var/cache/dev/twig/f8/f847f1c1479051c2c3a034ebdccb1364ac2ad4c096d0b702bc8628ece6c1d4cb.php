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
        $__internal_719a836c43a707bef9ed60b774fa6da1dbe336a2e29af9a36009af1068818383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719a836c43a707bef9ed60b774fa6da1dbe336a2e29af9a36009af1068818383->enter($__internal_719a836c43a707bef9ed60b774fa6da1dbe336a2e29af9a36009af1068818383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_71b15e1138180e64d749978f0bce8189ead3a4755ea03f9c8a01fb7a5f2ed904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b15e1138180e64d749978f0bce8189ead3a4755ea03f9c8a01fb7a5f2ed904->enter($__internal_71b15e1138180e64d749978f0bce8189ead3a4755ea03f9c8a01fb7a5f2ed904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_719a836c43a707bef9ed60b774fa6da1dbe336a2e29af9a36009af1068818383->leave($__internal_719a836c43a707bef9ed60b774fa6da1dbe336a2e29af9a36009af1068818383_prof);

        
        $__internal_71b15e1138180e64d749978f0bce8189ead3a4755ea03f9c8a01fb7a5f2ed904->leave($__internal_71b15e1138180e64d749978f0bce8189ead3a4755ea03f9c8a01fb7a5f2ed904_prof);

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
", "@Framework/Form/form_errors.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
