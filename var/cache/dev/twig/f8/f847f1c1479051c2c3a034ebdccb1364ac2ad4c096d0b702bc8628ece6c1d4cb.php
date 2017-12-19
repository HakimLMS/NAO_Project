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
        $__internal_6c3927e2851e37fc54aba24c97158eb30741d249b0d996a50ed3a8c8a4243a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3927e2851e37fc54aba24c97158eb30741d249b0d996a50ed3a8c8a4243a79->enter($__internal_6c3927e2851e37fc54aba24c97158eb30741d249b0d996a50ed3a8c8a4243a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_104dd6e02ea56d4286ffe1d47d805a376e48370048116c3a506f12a6606aabf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104dd6e02ea56d4286ffe1d47d805a376e48370048116c3a506f12a6606aabf4->enter($__internal_104dd6e02ea56d4286ffe1d47d805a376e48370048116c3a506f12a6606aabf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6c3927e2851e37fc54aba24c97158eb30741d249b0d996a50ed3a8c8a4243a79->leave($__internal_6c3927e2851e37fc54aba24c97158eb30741d249b0d996a50ed3a8c8a4243a79_prof);

        
        $__internal_104dd6e02ea56d4286ffe1d47d805a376e48370048116c3a506f12a6606aabf4->leave($__internal_104dd6e02ea56d4286ffe1d47d805a376e48370048116c3a506f12a6606aabf4_prof);

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
