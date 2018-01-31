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
        $__internal_3cfa95db6cdab2a4ee8c919f51e9d1fb38aca00a181dd85ab8c061c8bb77a03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfa95db6cdab2a4ee8c919f51e9d1fb38aca00a181dd85ab8c061c8bb77a03e->enter($__internal_3cfa95db6cdab2a4ee8c919f51e9d1fb38aca00a181dd85ab8c061c8bb77a03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_be95fb3f9930e91ecd6f9091c27c462d3f3637d1f692cb36cee0c0eb5775a4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be95fb3f9930e91ecd6f9091c27c462d3f3637d1f692cb36cee0c0eb5775a4d9->enter($__internal_be95fb3f9930e91ecd6f9091c27c462d3f3637d1f692cb36cee0c0eb5775a4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3cfa95db6cdab2a4ee8c919f51e9d1fb38aca00a181dd85ab8c061c8bb77a03e->leave($__internal_3cfa95db6cdab2a4ee8c919f51e9d1fb38aca00a181dd85ab8c061c8bb77a03e_prof);

        
        $__internal_be95fb3f9930e91ecd6f9091c27c462d3f3637d1f692cb36cee0c0eb5775a4d9->leave($__internal_be95fb3f9930e91ecd6f9091c27c462d3f3637d1f692cb36cee0c0eb5775a4d9_prof);

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
