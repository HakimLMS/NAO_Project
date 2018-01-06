<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_659f12b7afe169625686fbbfab6accecb94bb81a82685295e58b84e812497aab extends Twig_Template
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
        $__internal_8cad24bdcf1f93017f2298d2db8f6d69b2a599373c7eb3a2bb264014d4d1e083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cad24bdcf1f93017f2298d2db8f6d69b2a599373c7eb3a2bb264014d4d1e083->enter($__internal_8cad24bdcf1f93017f2298d2db8f6d69b2a599373c7eb3a2bb264014d4d1e083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8cfd3f8df40bd11772b7423e4eb736578958b4361afe9ed791420dc3ed52d77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfd3f8df40bd11772b7423e4eb736578958b4361afe9ed791420dc3ed52d77c->enter($__internal_8cfd3f8df40bd11772b7423e4eb736578958b4361afe9ed791420dc3ed52d77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8cad24bdcf1f93017f2298d2db8f6d69b2a599373c7eb3a2bb264014d4d1e083->leave($__internal_8cad24bdcf1f93017f2298d2db8f6d69b2a599373c7eb3a2bb264014d4d1e083_prof);

        
        $__internal_8cfd3f8df40bd11772b7423e4eb736578958b4361afe9ed791420dc3ed52d77c->leave($__internal_8cfd3f8df40bd11772b7423e4eb736578958b4361afe9ed791420dc3ed52d77c_prof);

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
