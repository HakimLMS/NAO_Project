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
        $__internal_d627ec08f1da08460cb97637bd070397e2b66ba723ecf34c0deddbb49ad6c468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d627ec08f1da08460cb97637bd070397e2b66ba723ecf34c0deddbb49ad6c468->enter($__internal_d627ec08f1da08460cb97637bd070397e2b66ba723ecf34c0deddbb49ad6c468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_096b4136193ce9c0bd4b6059d1f0967024c88ca05ae2e64bef72848cb3f68097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096b4136193ce9c0bd4b6059d1f0967024c88ca05ae2e64bef72848cb3f68097->enter($__internal_096b4136193ce9c0bd4b6059d1f0967024c88ca05ae2e64bef72848cb3f68097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d627ec08f1da08460cb97637bd070397e2b66ba723ecf34c0deddbb49ad6c468->leave($__internal_d627ec08f1da08460cb97637bd070397e2b66ba723ecf34c0deddbb49ad6c468_prof);

        
        $__internal_096b4136193ce9c0bd4b6059d1f0967024c88ca05ae2e64bef72848cb3f68097->leave($__internal_096b4136193ce9c0bd4b6059d1f0967024c88ca05ae2e64bef72848cb3f68097_prof);

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
