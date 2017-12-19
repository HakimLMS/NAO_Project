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
        $__internal_7b1b9c78e9ed45a33193240df96721303471cb7cdc0085509a1bdf1a3412a8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1b9c78e9ed45a33193240df96721303471cb7cdc0085509a1bdf1a3412a8a2->enter($__internal_7b1b9c78e9ed45a33193240df96721303471cb7cdc0085509a1bdf1a3412a8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6e3e300045f7ab693515cc2019f5a837a9f3b731f2dbd93177eaa323324072a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3e300045f7ab693515cc2019f5a837a9f3b731f2dbd93177eaa323324072a5->enter($__internal_6e3e300045f7ab693515cc2019f5a837a9f3b731f2dbd93177eaa323324072a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7b1b9c78e9ed45a33193240df96721303471cb7cdc0085509a1bdf1a3412a8a2->leave($__internal_7b1b9c78e9ed45a33193240df96721303471cb7cdc0085509a1bdf1a3412a8a2_prof);

        
        $__internal_6e3e300045f7ab693515cc2019f5a837a9f3b731f2dbd93177eaa323324072a5->leave($__internal_6e3e300045f7ab693515cc2019f5a837a9f3b731f2dbd93177eaa323324072a5_prof);

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
