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
        $__internal_f50b4789d1fb81464e8f799413f27bbedfbededcdae5cb71aad61a124addb96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50b4789d1fb81464e8f799413f27bbedfbededcdae5cb71aad61a124addb96f->enter($__internal_f50b4789d1fb81464e8f799413f27bbedfbededcdae5cb71aad61a124addb96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9d1a2959f062eb036d2ee7f1f496d02bdfa8b0c2437f360db5cfa0b88d06cb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1a2959f062eb036d2ee7f1f496d02bdfa8b0c2437f360db5cfa0b88d06cb1e->enter($__internal_9d1a2959f062eb036d2ee7f1f496d02bdfa8b0c2437f360db5cfa0b88d06cb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f50b4789d1fb81464e8f799413f27bbedfbededcdae5cb71aad61a124addb96f->leave($__internal_f50b4789d1fb81464e8f799413f27bbedfbededcdae5cb71aad61a124addb96f_prof);

        
        $__internal_9d1a2959f062eb036d2ee7f1f496d02bdfa8b0c2437f360db5cfa0b88d06cb1e->leave($__internal_9d1a2959f062eb036d2ee7f1f496d02bdfa8b0c2437f360db5cfa0b88d06cb1e_prof);

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
