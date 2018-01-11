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
        $__internal_fd81b18414c0574a65539b54bd425b3f91bc8ceed0e1ba34f75c0637ba5f5f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd81b18414c0574a65539b54bd425b3f91bc8ceed0e1ba34f75c0637ba5f5f46->enter($__internal_fd81b18414c0574a65539b54bd425b3f91bc8ceed0e1ba34f75c0637ba5f5f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2d9536bd8d27c2178bc79fdf196bce7ba2600358d59fddbffa7a601421551d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9536bd8d27c2178bc79fdf196bce7ba2600358d59fddbffa7a601421551d45->enter($__internal_2d9536bd8d27c2178bc79fdf196bce7ba2600358d59fddbffa7a601421551d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fd81b18414c0574a65539b54bd425b3f91bc8ceed0e1ba34f75c0637ba5f5f46->leave($__internal_fd81b18414c0574a65539b54bd425b3f91bc8ceed0e1ba34f75c0637ba5f5f46_prof);

        
        $__internal_2d9536bd8d27c2178bc79fdf196bce7ba2600358d59fddbffa7a601421551d45->leave($__internal_2d9536bd8d27c2178bc79fdf196bce7ba2600358d59fddbffa7a601421551d45_prof);

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
