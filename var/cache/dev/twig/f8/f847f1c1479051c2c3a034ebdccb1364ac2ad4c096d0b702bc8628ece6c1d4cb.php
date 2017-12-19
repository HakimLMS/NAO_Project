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
        $__internal_0594e9aa8d35fa1c8f5b55f42529aa177436ba141699b8c1e89bd2f7074c042e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0594e9aa8d35fa1c8f5b55f42529aa177436ba141699b8c1e89bd2f7074c042e->enter($__internal_0594e9aa8d35fa1c8f5b55f42529aa177436ba141699b8c1e89bd2f7074c042e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_84f8384e9b8519c912356ae9c14b986f0e0f61943585e6f8293297d14f3c2e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f8384e9b8519c912356ae9c14b986f0e0f61943585e6f8293297d14f3c2e08->enter($__internal_84f8384e9b8519c912356ae9c14b986f0e0f61943585e6f8293297d14f3c2e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0594e9aa8d35fa1c8f5b55f42529aa177436ba141699b8c1e89bd2f7074c042e->leave($__internal_0594e9aa8d35fa1c8f5b55f42529aa177436ba141699b8c1e89bd2f7074c042e_prof);

        
        $__internal_84f8384e9b8519c912356ae9c14b986f0e0f61943585e6f8293297d14f3c2e08->leave($__internal_84f8384e9b8519c912356ae9c14b986f0e0f61943585e6f8293297d14f3c2e08_prof);

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
