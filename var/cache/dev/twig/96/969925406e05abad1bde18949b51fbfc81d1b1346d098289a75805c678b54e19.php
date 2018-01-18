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
        $__internal_7620c1c012cb7b067c211d0471054f3967ab8a75c122374c4ac24848f6050477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7620c1c012cb7b067c211d0471054f3967ab8a75c122374c4ac24848f6050477->enter($__internal_7620c1c012cb7b067c211d0471054f3967ab8a75c122374c4ac24848f6050477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e70bfd95181ebaa85ae84b912e16e7a3619989a36f79b6c0000c53f8c1dc752c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70bfd95181ebaa85ae84b912e16e7a3619989a36f79b6c0000c53f8c1dc752c->enter($__internal_e70bfd95181ebaa85ae84b912e16e7a3619989a36f79b6c0000c53f8c1dc752c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7620c1c012cb7b067c211d0471054f3967ab8a75c122374c4ac24848f6050477->leave($__internal_7620c1c012cb7b067c211d0471054f3967ab8a75c122374c4ac24848f6050477_prof);

        
        $__internal_e70bfd95181ebaa85ae84b912e16e7a3619989a36f79b6c0000c53f8c1dc752c->leave($__internal_e70bfd95181ebaa85ae84b912e16e7a3619989a36f79b6c0000c53f8c1dc752c_prof);

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
